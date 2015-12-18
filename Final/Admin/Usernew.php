<?php
session_start();
$DBConnect = @mysql_connect("localhost", "root", "");
$DBName = "bbdata";
mysql_select_db($DBName, $DBConnect);
?>



<html>
<head>
<title>Add a New User</title>
<link rel="stylesheet" href="../styles/bbstyle.css" type="text/css">
</head>

<body>


<!--- table for main content --->
<table cellspacing="2" cellpadding="2" border="0">
<tr>
	<!--- cell with navigation menu --->
	<td valign="top" width="150">
					<?php
include('Navigation.php');
?>
		
		</td>
	
	<!--- main content cell --->
	<td valign="top">
	<b>Insert New User</b>
	
	<!--- begin nested table with form --->
		<table bgcolor="##FFFFCC" bordercolor="##000000" border="1" cellpadding="4" cellspacing="0">
			
			
			     <h3>Admin Page</h3>
     <form method="POST" action="InstructorInsert.php">
          <p>User Name <input type="text" name="UserName" /></p>
          <p>Password <input type="password" name="Password" /></p>
	  <p>Role <input type="text" name="Role" /></p>
	  Inactive <input type="radio" name="Inactive" value='0'>no<input type="radio" name="Inactive" value='1'>Yes <br />
          <input type="submit" name="submit"/>
     </form>

</table>


</body>
</html>
