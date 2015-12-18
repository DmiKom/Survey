<?php
session_start();
            $DBConnect = @mysql_connect("localhost", "root", "");
            $DBName = "bbdata";
            mysql_select_db($DBName, $DBConnect);
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
        <div id = "wrap">
        <form action="Course.php" method="post">
            <select name="Term" id="box">
                
                <?php
                $TableName = "term";
                $SQLstring = "select * from $TableName ";
                $QueryResult = @mysql_query ($SQLstring, $DBConnect);
                While ($Row = mysql_fetch_assoc($QueryResult)){
                echo "<option value='".$Row['TermID']. "'>" . $Row['Term'] . "</option>";
                
                }

                
                ?>
            </select>
            
            <input name="submit" type="submit" value=" Submit ">
        </form>
        
        
        <div style=" margin-top: 40%; ">
            <a href="admin/Login.php" style=" margin-bottom:15px; margin-left: 15px; color: #ffffff; ">Login to admin</a>
        </div>
        </div>
    </body>
    <?php
    
    
    ?>