<?php
session_start();
$DBConnect = @mysql_connect("localhost", "root", "");
$DBName = "bbdata";
mysql_select_db($DBName, $DBConnect);

if (empty($_SESSION['UserID'])){
	if (isset ($_POST['UserName']) && isset($_POST['Password'])){    
		$SQLstring = "SELECT * FROM instructor WHERE UserName = '" . $_POST['UserName']."' && Password = '" . $_POST['Password'] . "'";
		$QueryResult = @mysql_query($SQLstring, $DBConnect);
            
		if ($termArray = @mysql_fetch_assoc($QueryResult)) {
		    $_SESSION ['UserID'] = $termArray ['UserID'];
		    $_SESSION ['Role'] = $termArray ['Roles'];
		}
		else{
		    header("Location: login.php");
		}
	}
	else{
		header("Location: login.php");
	}
}



?>

<!DOCTYPE html>
	<head>
		
	</head>
	<body>
		
		<TABLE CELLSPACING="2" CELLPADDING="2" BORDER="0">
		<TR>
			<!--- cell with navigation menu --->
		    <TD WIDTH="175">
				<?php
                            include('Navigation.php');
			     if(strcmp($_SESSION['Role'], "Instructor")===0){
                            ?>
			</TD>
		
			<!--- main content cell --->
		    <TD>			
					

		<table border="1" style="clear: left; float: left;" >
					
				    <TR HEIGHT="60" WIDTH="200">
					<TD HEIGHT="60" WIDTH="10">QID</td>
					<TD HEIGHT="60" WIDTH="10">Question</td>
					<TD HEIGHT="60" WIDTH="200">Average</td>
					</tr>
		<?php
		
		$SQLstring = "select answers.QID, course.CourseID, answers.SID, anskey.Ans, avg(answers.AVal)as avg, questions.Question from course join answers on answers.courseID = course.CourseID join anskey on answers.AVal = anskey.AVal join questions on answers.QID = questions.QID Where answers.userID =(select userID from instructor where UserID = '". $_SESSION['UserID']."') group by answers.QID";
		$QueryResult = @mysql_query($SQLstring, $DBConnect);
		while ($stat = @mysql_fetch_assoc($QueryResult)){
				echo "<TR HEIGHT='60' WIDTH='200'>";
				echo "<TD HEIGHT='60 WIDTH='10'>".$stat['QID']."</td>";
				echo'<TD HEIGHT="60" WIDTH="200">'.$stat["Question"].'</td>';					
				echo '<TD HEIGHT="60" WIDTH="100">'.$stat["avg"].'</td>';
		

				   echo "</tr>";
		}
			     }
			?>	
				
				    
				</table>
<hr>
			</TD>
		</TR>
	</TABLE>
	
	
   </BODY>




    