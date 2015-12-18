<?php
session_start();
$DBConnect = @mysql_connect("localhost", "root", "");
$DBName = "bbdata";
mysql_select_db($DBName, $DBConnect);
?>

<!DOCTYPE>
<html>
<head>
<title>Add a New Section</title>
<link rel="stylesheet" href="../styles/bbstyle.css" type="text/css">
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
<b>Insert a new Section</b>
<!--- begin nested table with form --->

<form action="" method="POST">
    <table bgcolor="##00BFFF" bordercolor="##000000" border="1" cellpadding="4" cellspacing="0">
        <tr>
        <td>Section number</td>
        <td>
        <input type="text" name="SectionNo" message="Please enter a name" required="yes" size="30" maxlength="100">
        </td>
        
        </tr>
        <tr>
            <td>Term</td>
        <td>
            
        <SELECT NAME="TermIDs">
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
        <td>Course</td>
        <td>
           
        <SELECT NAME="CourseID">

            <?php
                    $SQLstring = "select * from course";
                    $QueryResult = @mysql_query($SQLstring, $DBConnect);
                    while ($Row = @mysql_fetch_assoc($QueryResult)){
                        echo "<OPTION VALUE='".$Row['CourseID']."'>".$Row['CourseName']."</OPTION>";
                    }
                ?>

        </SELECT>
        </td>
        </tr>
        <tr>
        <td>Instructor</td>
        <td>
           
        <SELECT NAME="Inst">

            <?php
                    $SQLstring = "select * from instructor";
                    $QueryResult = @mysql_query($SQLstring, $DBConnect);
                    while ($Row = @mysql_fetch_assoc($QueryResult)){
                        echo "<OPTION VALUE='".$Row['UserID']."'>".$Row['UserName']."</OPTION>";
                    }
                ?>

        </SELECT>
        </td>
        </tr>
        <tr>
        <td>&nbsp;</td>
        <td>
        <input type="submit" name="Submit" value="Add Section">
        </td>
        </tr>
    </table>
</form>

</td>
<?php
}
if (isset ($_POST['SectionNo'])){
$section = trim($_POST['SectionNo']);
$inst=$_POST['Inst'];
$SQLstring = "insert into section (SectionID, SectionNo, Course, TermID, Instructor, Inactive) Values (null,". $section.",'".$_POST['CourseID']."',".$_POST['TermIDs'].",".$inst.", 0)";
$QueryResult = @mysql_query($SQLstring, $DBConnect);
if($QueryResult===TRUE){
    echo  "section" . trim($_POST['SectionNo']). " has been added.";
}
else{
    echo "Error please start over";
    var_dump($_POST);
}
}

    ?>
</body>
</html>