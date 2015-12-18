
<?php
session_start();
$DBConnect = @mysql_connect("localhost", "root", "");
$DBName = "bbdata";
mysql_select_db($DBName, $DBConnect);

?>
<HTML>
<HEAD>
    <TITLE>Term Statistics</TITLE>
	<LINK REL="stylesheet" HREF="../styles/bbstyle.css" TYPE="text/css">
 </HEAD>
   <BODY>
	
	<!--- table for main content --->
	<TABLE CELLSPACING="2" CELLPADDING="2" BORDER="0">
		<TR>
			<!--- cell with navigation menu --->
		    <TD VALIGN="top" WIDTH="175">
				<?php
                            include('Navigation.php');
                            ?>
			</TD>
			<!--- main content cell --->

		    <TD VALIGN="top">
				<!--- start nested table to list OnSpecial products --->
				<TABLE CELLSPACING="4">
				<FORM action="" method="POST">
				
				<tr>
				<td>Term</td>
				<td>
				<SELECT NAME="TermIDs">
				    <?php $SQLstring = "SELECT * FROM term";
				    $result= @mysql_query ($SQLstring, $DBConnect);
				    while ($term= mysql_fetch_assoc($result)){
					echo'<OPTION VALUE="'. $term['TermID'].'">'.$term['Term'].'</OPTION>';
				    }
				?>
				
				</SELECT>
				</td>
				</tr>
				
				
				<tr>
				<td>Course</td>
				<td>
				<SELECT NAME="CourseID">
				    <?php
				   
				$SQLstring = "SELECT * FROM course where course.TermID = TermID";
				    $result = @mysql_query ($SQLstring, $DBConnect);
				    while ($course= mysql_fetch_assoc($result)){
					echo '<OPTION VALUE="'.$course['CourseID'].'">'. $course['CourseName'].'</OPTION>';
				    }
				?>
				
				</SELECT>
				</td>
				</tr>
				
				<td>Section</td>
				<td>
				<SELECT NAME="SectionID">
				    <?php $SQLstring = "SELECT * FROM section";
				    $result= @mysql_query ($SQLstring, $DBConnect);
				    while ($section = mysql_fetch_assoc($result)){
					echo '<OPTION VALUE="'. $section['SectionID'].'">'. $section['SectionNo'].'</OPTION>';
					}
				?>
				
				</SELECT>
				</td>
				</tr>
				<tr>
				<td>&nbsp;</td>
				<td>
				<input type="submit" name="Submit" value="submit">
				</td>
				</tr>
	    
				
				
				    </FORM>
				</TABLE>
				
				<TABLE border="1" >
				    <TR HEIGHT="60" WIDTH="200">
					<TD HEIGHT="60" WIDTH="10">QID</td>
					<TD HEIGHT="60" WIDTH="10">SID</td>
					<TD HEIGHT="60" WIDTH="10">Question</td>
					<TD HEIGHT="60" WIDTH="200">answers</td>
					<TD HEIGHT="60" WIDTH="100">Response</td>
					</tr>
					<?php
				if(isset($_POST['SectionID'])){
				$SQLstring = "select answers.QID, course.CourseID, answers.SID, anskey.Ans, answers.AVal, questions.Question from course join answers on answers.CourseID = course.CourseID join anskey on answers.AVal = anskey.AVal join questions on answers.QID = questions.QID Where answers.TermID =". $_POST['TermIDs']." AND answers.CourseID = ". $_POST['CourseID']." AND answers.SectionID =". $_POST['SectionID']." AND answers.UserID =(select UserID from instructor where UserID = '".$_SESSION['UserID']."') order by answers.SID asc, answers.QID";
				    $Results = @mysql_query ($SQLstring, $DBConnect);
				    while ($course = mysql_fetch_assoc($Results)){

?>
					
				    
				    <TR HEIGHT="60" WIDTH="200">
					<TD HEIGHT="60" WIDTH="10"><?php echo $course['QID']; ?></td>
					<TD HEIGHT="60" WIDTH="200"><?php echo $course['SID']; ?> </td>
					<TD HEIGHT="60" WIDTH="200"><?php echo $course['Question']; ?> </td>					
					<TD HEIGHT="60" WIDTH="100"><?php echo $course['AVal']; ?></td>
					<TD HEIGHT="60" WIDTH="100"><?php echo $course['Ans']; ?></td>
					
					
					
				    </tr>
				    <?php
				    
				    }
					 }
				    ?>
				</table>
				
			</TD>
		</TR>
	</TABLE>
	
	
   </BODY>
</HTML>
<?php

				    var_dump($_POST);

?>