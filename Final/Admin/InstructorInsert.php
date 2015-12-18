<?php
session_start();
$DBConnect = @mysql_connect("localhost", "root", "");
$DBName = "bbdata";
mysql_select_db($DBName, $DBConnect);
?>

<HTML>
<HEAD>
    <TITLE>Successful User Insert</TITLE>
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
                        <?php
                        
                         $SQLstring = "insert into  instructor(UserID, UserName, Password, Roles, Inactive) Values(null,'".trim($_POST['UserName'])."','". trim($_POST['Password'])."','".trim($_POST['Role'])."',".($_POST['Inactive']).")";
                            $QueryResult = @mysql_query($SQLstring, $DBConnect);
                            if ($QueryResult === TRUE){
                                echo"<B>The details for ".$_POST['UserName']." have been successfully Inserted.</B>";
                            }
                            else "<B>Failed to insert Instructor</B>"
                        ?>
				
			</TD>
		</TR>
	</TABLE>
	</CFIF>
</BODY>
</HTML>
