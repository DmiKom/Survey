<?php
session_start();
            $DBConnect = @mysql_connect("localhost", "root", "");
            $DBName = "bbdata";
            mysql_select_db($DBName, $DBConnect);
	    $_SESSION['Courseid'] = $_POST['CourseID']
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
				<form action="SStat.php" method="POST">
				<tr>
				<td>Course</td>
				<td>
				<SELECT NAME="SectionID">
				    <?php
				$SQLstring = "SELECT * FROM section where TermID =".$_SESSION['Termid']. " AND Course = ".$_SESSION['Courseid'];
				$QueryResult = @mysql_query($SQLstring, $DBConnect);
				while($Row = @mysql_fetch_assoc($QueryResult)){
				echo "<OPTION VALUE='".$Row['SectionID']."'>".$Row['SectionNo']."</OPTION>";
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