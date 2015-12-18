
<?php
session_start();
$DBConnect = @mysql_connect("localhost", "root", "");
$DBName = "bbdata";
mysql_select_db($DBName, $DBConnect);
$ID =$_GET['pid'];
$_SESSION['ID'] = $ID;
?>



<HTML>
<HEAD>
    <TITLE>Edit User Description</TITLE>
	
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
		    <TD VALIGN="top">
				<B>Edit Users</B>
				<!--- begin nested table with form --->
				
				  <FORM ACTION="InstructorUpdate.php" METHOD="POST">
				    <TABLE BGCOLOR="#FFFFCC"  BORDERCOLOR="#000000" BORDER="1" CELLPADDING="4" CELLSPACING="0" >
				    <?php
							$SQLstring = "SELECT  * FROM instructor WHERE UserID = '$ID'";
							 $QueryResult = @mysql_query($SQLstring, $DBConnect);
							 if ($row = @mysql_fetch_assoc($QueryResult)){
								$user = $row['UserID'];
								?>
					<TR>
					    
					    <TD>Employee Number</TD>
					    <TD>
					       <input TYPE='hidden' NAME='UserID' VALUE='<?php $user ?>'>
					    </TD>
					</TR>
					<TR>
					    <TD>User Name</TD>
					    <TD><input TYPE='Text' NAME='UserName' VALUE='<?php $row['UserName'] ?>' REQUIRED='Yes' SIZE='30' MAXLENGTH='100'></TD>
					</TR>
					<TR>
					    <TD>User Password</TD>
					    <TD><input TYPE='Text' NAME='Password' VALUE='<?php $row['Password']?>'REQUIRED='Yes' SIZE='30' MAXLENGTH='100'></TD>
					</TR>
					<TR>
					    <TD>User Role</TD>
					    <TD><input TYPE='Text' NAME='Roles' VALUE='<?php $row['Roles']?>'  REQUIRED='Yes' SIZE='10'></TD>
					</TR>
					<TR>
					    <TD>Inactive Record</TD>
					    <TD>
						<input type="radio" name="Inactive" value='0'>no
						<input type="radio" name="Inactive" value='1'>Yes
							 
					    </TD>
					</TR>				
					<TR>
					    <TD>&nbsp;</TD>
					    <TD><INPUT TYPE='submit' NAME='Submit' VALUE='Update User Details'></TD>
					</TR>
					<?php
					}
							?>
				</TABLE>
				  </FORM>
				
				
			</TD>
		</TR>
	</TABLE>
</BODY>
</HTML>