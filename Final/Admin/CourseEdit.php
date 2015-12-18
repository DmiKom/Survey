<?php
session_start();
$DBConnect = @mysql_connect("localhost", "root", "");
$DBName = "bbdata";
mysql_select_db($DBName, $DBConnect);
$CID = $_GET['pid'];
?>

<HTML>
<HEAD>
<TITLE>Edit Course</TITLE>
</HEAD>
<BODY>
<TABLE CELLSPACING="2" CELLPADDING="2" BORDER="0">
<TR>
<TD VALIGN="top" WIDTH="175">
<?php
include('Navigation.php');
?>
</TD>

<TD VALIGN="top">
<B>Edit courses</B>

    <?php

    if (strcmp($_SESSION['Role'], "Administrator")===0) {
        ?>
<form action="" method="POST">
    <TABLE BGCOLOR="#FFFFCC" BORDERCOLOR="#000000" BORDER="1" CELLPADDING="4" CELLSPACING="0" >
        <TR>
        <TD>Course Number</TD>
        <TD>
            <?php
                    $SQLstring = "SELECT CourseID, CourseName, Inactive FROM course WHERE CourseID=". $CID ."";
                    $QueryResult = @mysql_query ($SQLstring, $DBConnect);
                    $Row= @mysql_fetch_assoc($QueryResult);
        ?>
        <INPUT TYPE="hidden" NAME="CourseID"/><?php echo $Row['CourseName']; ?>

        </TD>
        </TR>
        <TR>
        <TD>Course Name</TD>
        <TD>
            <input type="Text" name="CourseName"  SIZE="30" MAXLENGTH="100"/>
        </TD>
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
        <TD>
            <INPUT TYPE="submit" NAME="Submit" VALUE="Update Details"></TD>
        </TR>
    </TABLE>
</form>
    <?php
    }
    
    
    
    if(isset($_POST['CourseName'])){
        $CName= trim(strtoupper($_POST['CourseName']));
         $SQLstring = " UPDATE course SET CourseName = '".$CName."' , Inactive = ".$_POST['Inactive']." WHERE CourseID = '". $CID." ' ";
        $QueryResult = @mysql_query($SQLstring, $DBConnect);
    if ($QueryResult===TRUE)
        echo"Update complete";
    else
        echo "Unable to update";
    }
   
        ?>

</TD>
</TR>
</TABLE>
</BODY>
</HTML>






