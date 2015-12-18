
<?php
session_start();
$DBConnect = @mysql_connect("localhost", "root", "");
$DBName = "bbdata";
mysql_select_db($DBName, $DBConnect);
var_dump($_POST);
?>
<HTML>
<HEAD>
    <TITLE>Successful User Update</TITLE>
</HEAD>
<BODY>
	<TABLE CELLSPACING="2" CELLPADDING="2" BORDER="0">
		<TR>
		    			
			<!--- cell with navigation menu --->
		    <TD VALIGN="top" WIDTH="175">
				<?php
                            include('Navigation.php');
                            ?>
			</TD>
			<!--- main content cell --->
                        <?php
                        $password= trim($_POST['Password']);
                        $userName = trim($_POST['UserName']);
                        $inactive = ($_POST['Inactive']);
                        $Roles = trim($_POST['Roles']);
			$userID = 
                        
                        $SQLstring = "UPDATE  instructor SET UserName = '$userName', Password = '$password', Roles = '$Roles', Inactive = $inactive WHERE UserID = '".$_SESSION['ID']."'";
                            $QueryResult = @mysql_query($SQLstring, $DBConnect);
                            
                        
                        ?>
		    <TD VALIGN="top">
				<B>The details for $userName have been
				successfully updated.</B>
			</TD>
		</TR>
	</TABLE>
</BODY>
</HTML>