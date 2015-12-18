<?php
session_start();
            $DBConnect = @mysql_connect("localhost", "root", "");
            $DBName = "bbdata";
            mysql_select_db($DBName, $DBConnect);
?>
<HTML>
<HEAD>
    <TITLE>Dunwoody Survey Admin Panel</TITLE>
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
				<TABLE CELLSPACING="4">
				<form action="CourseStat1.php" method="POST">
				
				
				<tr>
				<td>Term</td>
				<td>
				<select name="TermIDs">
				<?php
				$SQLstring = "SELECT * FROM term";
				$QueryResult = @mysql_query($SQLstring, $DBConnect);
				while($Row = @mysql_fetch_assoc($QueryResult)){
				echo "<OPTION VALUE='".$Row['TermID']."'>".$Row['Term']."</OPTION>";
				
				}
				?>
				</select>
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