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
	<TABLE CELLSPACING="2" CELLPADDING="2" BORDER="0">
		<TR>
		    <TD VALIGN="top" WIDTH="175">
				<?php
				    include('../Admin/Navigation.php');
				?>
			</TD>
			<!--- main content cell --->
			
		    <TD VALIGN="top">
				<!--- start nested table to list OnSpecial products --->
				<TABLE CELLSPACING="4">
				<FORM>
				<tr>
				<td>&nbsp;</td>
				<td>
				<input type="submit" name="Submit" value="submit">
				</td>
				</tr>
				
				
				
				<TABLE border="1" >
				    <TR HEIGHT="60" WIDTH="200">
					<TD HEIGHT="60" WIDTH="10">QID</td>
					<TD HEIGHT="60" WIDTH="10">SID</td>
					<TD HEIGHT="60" WIDTH="10">Question</td>
					<TD HEIGHT="60" WIDTH="200">AVal</td>
					<TD HEIGHT="60" WIDTH="100">Response</td>
					
					
				    </tr>
				    <?php
				
				$SQLstring = " select answers.QID, course.CourseID, answers.SID, anskey.Ans, answers.AVal, questions.Question from course join answers on answers.courseID = course.CourseID join anskey on answers.AVal = anskey.AVal 
				join questions on answers.QID = questions.QID Where answers.TermID =" .$_SESSION['Termid']." AND answers.CourseID =".$_SESSION['Courseid']." AND answers.SectionID =". $_POST['SectionID'] ." order by answers.SID asc, answers.QID";
				$QueryResult = @mysql_query($SQLstring, $DBConnect);
				while($Row = @mysql_fetch_assoc($QueryResult)){
				    echo "<TR HEIGHT='60' WIDTH='200'>";
					echo "<TD HEIGHT='60' WIDTH='10'>".$Row['QID']."</td>";
					echo "<TD HEIGHT='60' WIDTH='200'>".$Row['SID']."</td>";
					echo "<TD HEIGHT='60' WIDTH='200'>".$Row['Question']."</td>";					
					echo "<TD HEIGHT='60' WIDTH='100'>".$Row['AVal']."</td>";
					echo "<TD HEIGHT='60' WIDTH='100'>".$Row['Ans']."</td>";
					echo "</tr>";
				}
				?>
					
				    

				    </CFOUTPUT>
				</table>
				
				<Table>
				    <tr>
					
			    
				    </tr>
				</Table>
				</TABLE>
				</CFFORM>
				
			</TD>
		</TR>
	</TABLE>
	
	
   </BODY>
</HTML>
