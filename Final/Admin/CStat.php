<?php
session_start();
            $DBConnect = @mysql_connect("localhost", "root", "");
            $DBName = "bbdata";
            mysql_select_db($DBName, $DBConnect);
?>
<HTML>
<HEAD>
    <TITLE>Course Statistics</TITLE>
 </HEAD>
   <BODY>
    <?php
	if (strcmp($_SESSION['Role'], "Administrator")===0) {
    ?>
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
				</FORM>
				<table>
				    <TR HEIGHT="60" WIDTH="200">
					<TD HEIGHT="60" WIDTH="10">Question ID</td>
					<TD HEIGHT="60" WIDTH="10">Question</td>
					<TD HEIGHT="60" WIDTH="200">Average</td>
					<TD HEIGHT="60" WIDTH="100">Response</td>
				    </tr>
				    <?php
				    $SQLstring = "select avg(answers.Aval) as average, term.Term, questions.Question, course.CourseID, questions.QID, term.TermID, anskey.Ans, course.CourseName from term join course on term.TermID = course.TermID join answers
				on answers.courseID = course.CourseID join anskey on answers.AVal = anskey.AVal join questions on answers.QID = questions.QID Where term.TermID =".$_SESSION['Termid'] ." AND course.CourseID =".$_POST['CourseID']." group by questions.QID";
				    $QueryResult = @mysql_query($SQLstring, $DBConnect);
				    while($Row = @mysql_fetch_assoc($QueryResult)){
					echo "<TR HEIGHT='60' WIDTH='200'>";
					echo "<TD HEIGHT='60' WIDTH='200'>".$Row['QID']."</td>";
					echo "<TD HEIGHT='60' WIDTH='200'>".$Row['Question']."</td>";					
					echo "<TD HEIGHT='60' WIDTH='100'>".$Row['average']."</td>";
					echo "<TD HEIGHT='60' WIDTH='100'>". $Row['Ans']."</td>";
				    echo "</tr>";
					}
				    ?>
				    
				    
				</table>
			</TD>
		</TR>
	</TABLE>
	
	<?php
	}
	?>
   </BODY>
</HTML>