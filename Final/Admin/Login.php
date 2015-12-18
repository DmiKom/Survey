<?php
session_start();
session_destroy();
session_start();
$DBConnect = @mysql_connect("localhost", "root", "");
$DBName = "bbdata";
mysql_select_db($DBName, $DBConnect);

?>
<!DOCTYPE>
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
<body>
<div id="wrap">
  
	<div id="head"><img style="height: 100px;" src= "DunwoodyLogo.png"/></div>

     <h3>Admin Page</h3>
     <form method="POST" action="Home.php">
          <p>User Name<input type="text" name="UserName" /></p>
          <p>password
               <input type="password" name="Password" /></p>
          <input type="submit" name="submit"/>


     </form>
</div>
</body>

</html>
<?php

	?>