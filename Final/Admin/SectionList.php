<?php
session_start();
$DBConnect = @mysql_connect("localhost", "root", "");
$DBName = "bbdata";
mysql_select_db($DBName, $DBConnect);
?>

<HTML>
<HEAD>
    <TITLE>Dunwoody Survey</TITLE>
	<LINK REL="stylesheet" HREF="../styles/bbstyle.css" TYPE="text/css">
</HEAD>
   <BODY>
   	<!--- include banner --->
   	
	<!--- table for main body --->
	<TABLE CELLSPACING="2" CELLPADDING="2" BORDER="0">
		<TR>
			<!--- cell with navigation menu --->
		    <TD WIDTH="175">
				<?php
                            include('Navigation.php');
                            ?>
			</TD>
		
			<!--- main content cell --->
		    <TD>
				<!--- begin nested table --->
				<TABLE CELLSPACING="4" width="400">
				    <tr>
						<td colspan="3"><b>Courses</b></td>
					</tr>
					<tr>
						<td width="20%"><b>CourseName</b></td>
						<td width="70%"><b>section Name</b></td>
						<td width="10%"><b>Action</b></td>
					</tr>
  
				   <?php
			    $SQLstring = "SELECT  * FROM  section join course on section.Course = course.CourseID where section.Inactive = 0";
			    $QueryResult = @mysql_query ($SQLstring, $DBConnect);
			    while ($qactive = @mysql_fetch_assoc($QueryResult)) {
			    
				    echo "<tr>";
					    echo"<td>". $qactive['CourseName'] . "</td>";
					    echo"<td>". $qactive['SectionNo'] . "</td>";
					    echo "<td><A HREF='SectionEdit.php?pid=". $qactive['SectionID'] . "'>Edit</A></td>";
				    echo "</tr>";
			    }
			     ?>	
				   
				</TABLE>
				<TABLE CELLSPACING="4" width="400">
				    <tr>
						<td colspan="3"><b>Inactive Users</b></td>
					</tr>
					<tr>
						<td width="20%"><b>Course Name</b></td>
						<td width="70%"><b>section Name</b></td>
						<td width="10%"><b>Action</b></td>
					</tr>
				 <?php  
				$SQLstring = "SELECT  * FROM  section join course on section.Course = course.CourseID where section.Inactive = 1";
			    $QueryResult = @mysql_query ($SQLstring, $DBConnect);
			    while ($qCategory = @mysql_fetch_assoc($QueryResult)) {
			    
				echo "<tr>";
					echo"<td>". $qCategory['CourseName'] . "</td>";
					echo"<td>". $qCategory['SectionNo'] . "</td>";
				    
					echo "<td><A HREF='SectionEdit.php?pid=". $qCategory['SectionID'] . "'>Edit</A></td>";
				echo "</tr>";
			    }
			     ?>	
				  
				  
				  </TABLE>
				
				<!--- output table for the inactive products --->
				<hr>
			</TD>
		</TR>
	</TABLE>
	
	
   </BODY>
</HTML>
