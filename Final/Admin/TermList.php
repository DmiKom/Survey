

<HTML>
<HEAD>
    <TITLE>Dunwoody Survey</TITLE>
	<LINK REL="stylesheet" HREF="../styles/bbstyle.css" TYPE="text/css">
</HEAD>
   <BODY>

	
	<!--- table for main body --->
	<TABLE CELLSPACING="2" CELLPADDING="2" BORDER="0">
		<TR>
			<!--- cell with navigation menu --->
		    <TD WIDTH="175">

			</TD>

			<!--- main content cell --->
		    <TD>
				<!--- begin nested table --->
				<TABLE CELLSPACING="4" width="400">
					<tr>
						<td width="20%"><b>section #</b></td>
						<td width="70%"><b>Course Name</b></td>
						<td width="10%"><b>Action</b></td>
					</tr>
				<?php  
			    $SQLstring = "SELECT sectionNo, CourseName, term.Term FROM section join course on section.Course = course.CourseID join term on course.TermID = term.TermID WHERE section.TermID= '#URL.TermID#' AND section.Inactive = 0";
			    $QueryResult = @mysql_query ($SQLstring, $DBConnect);
			    while ($qProducts = @mysql_fetch_assoc($QueryResult)) {
			    
				echo "<tr>";
					echo"<td>". $qProducts['SectionNo'] . "</td>";
					echo"<td>". $qProducts['CourseName'] . "</td>";
				    
					echo "<td><A HREF='CourseEdit.php?pid=". $qProducts['TermId'] . "'>Edit</A></td>";
				echo "</tr>";
			    }
			     ?>	

			</TD>
		</TR>
	
	</TABLE>
	
	
   </BODY>
</HTML>
