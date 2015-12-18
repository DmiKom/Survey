<?php
session_start();
$DBConnect = @mysql_connect("localhost", "root", "");
$DBName = "bbdata";
mysql_select_db($DBName, $DBConnect);

?>
<!DOCTYPE>
<html>
<head>
<title>Add a New Course</title>
</head>
<body>
<table cellspacing="2" cellpadding="2" border="0">
<tr>

<td valign="top" width="150">
<?php
include ('Navigation.php');
?>

</td>

<?php
if (strcmp($_SESSION['Role'], "Administrator")===0) {
    ?>

<td valign="top">
<b>Insert a New Course</b>

    <form action="" method="POST">
        <table bgcolor="##00BFFF" bordercolor="##000000" border="1" cellpadding="4" cellspacing="0">
            <tr>
            <td>Course Name</td>
            <td>
            <input type="text" name="CourseName" message="Please enter a name" required="yes" size="30" maxlength="100">
            </td>
            </tr>
            <tr>
            <td>Term</td>
            <td>
            <SELECT NAME="TermID">
                <?php
                    $SQLstring = "select * from term";
                    $QueryResult = @mysql_query($SQLstring, $DBConnect);
                    while ($Row = @mysql_fetch_assoc($QueryResult)){
                        echo "<OPTION VALUE='".$Row['TermID']."'>".$Row['Term']."</OPTION>";
                    }
                ?>
            </SELECT>
            </td>
            </tr>
            <tr>
            <td>&nbsp;</td>
            <td>
            <input type="submit" name="Submit" value="Add Course">
            </td>
            </tr>
            
        </table>
    </form>
    <?php

}

if (isset($_POST['CourseName'])){
    $course = strtoupper($_POST['CourseName']);
    $term = $_POST['TermID'];
    $SQLstring = "INSERT INTO course(CourseID, CourseName, TermID, Inactive) VALUES (null,'".$course ."',".$term.",0)";
		$QueryResult = @mysql_query($SQLstring, $DBConnect);
        if ($QueryResult ===TRUE){
            echo $course. " has been succesfully inserted";
        }
        else
            echo $course." term already exists";
}
?>

</td>
</body>
</html>
