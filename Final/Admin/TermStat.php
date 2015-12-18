<?php
session_start();
            $DBConnect = @mysql_connect("localhost", "root", "");
            $DBName = "bbdata";
            mysql_select_db($DBName, $DBConnect);
?>
<HTML>
<HEAD>
    <TITLE>Term Statistics</TITLE>
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
				<TABLE CELLSPACING="4">
				<form action="TStat.php" method="POST">
				<tr>
				<td>Term</td>
				<td>
				<select name="TermIDs">
				<?php
				$TermIDs = null;
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
	
	<?php
	}
	?>
   </BODY>
</HTML>
