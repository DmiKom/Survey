<?php
session_start();
            $DBConnect = @mysql_connect("localhost", "root", "");
            $DBName = "bbdata";
            mysql_select_db($DBName, $DBConnect);
$Section= $_POST['Section'];
$_SESSION['Section'] = $Section;


            

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
        <form action="Survey.php" method="post">
            <select name="instructor" id="box">
                
                <?php
                $TableName = "section";
                $SQLstring = "select * from $TableName  join  instructor  on instructor.UserID = section.Instructor where section.TermID ='". $_SESSION['Term']."' and section.Course ='". $_SESSION['Course'] ."' and section.SectionID ='". $_SESSION['Section']."'";
                $QueryResult = @mysql_query ($SQLstring, $DBConnect);
                while($Row = mysql_fetch_assoc($QueryResult)){
                echo "<option value='".$Row['UserID']. "'>" . $Row['UserName'] . "</option>";
                }
                
                
                ?>
                <input name="submit" type="submit" value=" Submit ">
            </select>
        </form>
        </div>
    </body>