<?php
session_start();
            $DBConnect = @mysql_connect("localhost", "root", "");
            $DBName = "bbdata";
            mysql_select_db($DBName, $DBConnect);
	    $_SESSION['Termid'] = $_POST['TermIDs']
?>
<HTML>
<HEAD>
    <TITLE>Course Stat</TITLE>
 </HEAD>
   <BODY>
	<TABLE CELLSPACING="2" CELLPADDING="2" BORDER="0">
		<TR>
		    <TD VALIGN="top" WIDTH="175">
				<?php
				    include('../Admin/Navigation.php');
				?>
			</TD>
			
		    <TD VALIGN="top">
				<!--- start nested table to list OnSpecial products --->
				<TABLE CELLSPACING="4">
				<form action="CStat.php" method="POST">
				<tr>
				<td>Course</td>
				<td>
				<SELECT NAME="CourseID">
				    <?php
				$SQLstring = "SELECT * FROM course where TermID =".$_POST['TermIDs'];
				$QueryResult = @mysql_query($SQLstring, $DBConnect);
				while($Row = @mysql_fetch_assoc($QueryResult)){
				echo "<OPTION VALUE='".$Row['CourseID']."'>".$Row['CourseName']."</OPTION>";
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
				</TABLE>
				</FORM>
				
			</TD>
		</TR>
	</TABLE>
	
	
   </BODY>
</HTML>                               
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                