<?php
session_start();
$DBConnect = @mysql_connect("localhost", "root", "");
$DBName = "bbdata";
mysql_select_db($DBName, $DBConnect);
$pid = $_GET['pid'];
?>

<HTML>
<HEAD>
    <TITLE>Dunwoody Survey</TITLE>

</HEAD>
   <BODY>

	<TABLE CELLSPACING="2" CELLPADDING="2" BORDER="0">
		<TR>
		
		    <TD WIDTH="175">
			<?php
include('Navigation.php');
?>
			
			</TD>
	
		
		    <TD>

				<TABLE CELLSPACING="4" width="400">
				    <tr>
						<td colspan="3"><b>Courses</b></td>
					</tr>
					<tr>
						
						<td width="70%"><b>Course Name</b></td>
						<td width="10%"><b>Action</b></td>
					</tr>
				
				<?php  
			    $SQLstring = "SELECT  * FROM course where Inactive = 0 and TermID='".$pid. "'";
			    $QueryResult = @mysql_query ($SQLstring, $DBConnect);
			    while ($qCategory = @mysql_fetch_assoc($QueryResult)) {
			    
				echo "<tr>";
					echo"<td>". $qCategory['CourseName'] . "</td>";
				    
					echo "<td><A HREF='CourseEdit.php?pid=". $qCategory['CourseID'] . "'>Edit</A></td>";
				echo "</tr>";
			    }
			     ?>	  
				</TABLE>
				<TABLE CELLSPACING="4" width="400">
				    <tr>
						<td colspan="3"><b>Inactive Users</b></td>
					</tr>
					<tr>
						
						<td width="70%"><b>Course Name</b></td>
						<td width="10%"><b>Action</b></td>
					</tr>
				  <?php  
			    $SQLstring = "SELECT  * FROM   course where Inactive = 1";
			    $QueryResult = @mysql_query ($SQLstring, $DBConnect);
			    while ($qInactive = @mysql_fetch_assoc($QueryResult)) {
			    
				echo "<tr>";
					echo"<td>". $qInactive['CourseName'] . "</td>";
				    
					echo "<td><A HREF='CourseEdit.php?pid=". $qInactive['CourseID'] . "'>Edit</A></td>";
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
