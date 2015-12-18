<?php
session_start();
            $DBConnect = @mysql_connect("localhost", "root", "");
            $DBName = "bbdata";
            mysql_select_db($DBName, $DBConnect);
$Course= $_POST['Course'];
$_SESSION['Course'] = $Course;

            

?>

<!DOCTYPE html>
    <head>
        <title>Survey</title>
        <style>
            #wrap{
                background-color: #7F0000;
                margin: auto;
                width: 800px;
                height: 100%;
                
            }
            form{
                margin: 15%;
                margin-top: 10%;
            }
            #box{
                margin-top:10%;
                margin-left: 29%;
            }
        </style>
    </head>
    <body>
        <div id="wrap">
        <form action="Instructor.php" method="post">
            <select name="Section" id="box">
                
                <?php
                $TableName = "section";
                $SQLstring = "select * from $TableName where TermID ='". $_SESSION['Term']."' and Course ='". $_SESSION['Course'] ."'";
                $QueryResult = @mysql_query ($SQLstring, $DBConnect);
                while($Row = mysql_fetch_assoc($QueryResult)){
                echo "<option value='".$Row['SectionID']. "'>" . $Row['SectionNo'] . "</option>";
                }
                
                
                ?>
                <input name="submit" type="submit" value=" Submit ">
            </select>
        </form>
        </div>
    </body>