<?php
session_start();
$DBConnect = @mysql_connect("localhost", "root", "");
$DBName = "bbdata";
mysql_select_db($DBName, $DBConnect);
?>
<html>
	
<head>

</head>
<body>
    <table CELLSPACING="2" CELLPADDING="2" BORDER="0">
	    <tr>
		<td WIDTH="175">
		    <?php
				    include('../Admin/Navigation.php');
				?>
		    </td>
		<td VALIGN="top">
			    <table CELLSPACING="4" width="400">
				<tr>
					    <td colspan="3"><b>Active Users</b></td>
				    </tr>
				    <tr>
					    <td width="20%"><b>UserID</b></td>
					    <td width="70%"><b>UserName</b></td>
					    <td width="50%"><b>Role</b></td>
					    <td width="10%"><b>Action</b></td>
				    </tr>
			    <?php
			    $SQLstring = "SELECT  UserID, Username, Password, Roles FROM instructor WHERE inactive = 0";
			    $QueryResult = @mysql_query ($SQLstring, $DBConnect);
			    while ($qUsers = @mysql_fetch_assoc($QueryResult)) {
			    
				    echo "<tr>";
					    echo"<td>". $qUsers['UserID'] . "</td>";
					    echo"<td>". $qUsers['Username'] . "</td>";
					    echo"<td>". $qUsers['Roles'] . "</td>";
					    echo "<td><A HREF='InstructorEdit.php?pid=". $qUsers['UserID'] . "'>Edit</A></td>";
				    echo "</tr>";
			    }
			     ?>			
			    </table>
			      <hr>
			      <table CELLSPACING="4" width="400">
				<tr>
					    <td colspan="3"><b>Inactive Users</b></td>
				    </tr>
				    <tr>
					    <td width="20%"><b>UserID</b></td>
					    <td width="70%"><b>UserName</b></td>
					    <td width="50%"><b>Role</b></td>
					    <td width="10%"><b>Action</b></td>
				    </tr>
			      
			    <?php
			    $SQLstring = "SELECT  UserID, Username, Password, Roles FROM instructor WHERE inactive = 1";
				  $QueryResult = @mysql_query ($SQLstring, $DBConnect);
				  while ($qInactive = @mysql_fetch_assoc($QueryResult)) {
			  
				  echo "<tr>";
					  echo"<td>". $qInactive['UserID'] . "</td>";
					  echo"<td>". $qInactive['Username'] . "</td>";
					  echo"<td>". $qInactive['Roles'] . "</td>";
					  echo "<td><A HREF='InstructorEdit.php?pid=". $qInactive['UserID'] . "'>Edit</A></td>";
				  echo "</tr>";
				  }
				  
				  ?>
			    
			      
			      </table>	
		    </td>
	    </tr>
    </table>	
</body>
</html>