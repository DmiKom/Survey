
<?php
session_start();
$DBConnect = @mysql_connect("localhost", "root", "");
$DBName = "bbdata";
mysql_select_db($DBName, $DBConnect);

?>

<HTML>
<HEAD>
<TITLE>Edit Course</TITLE>
<LINK REL="stylesheet" HREF="../styles/bbstyle.css" TYPE="text/css">
</HEAD>
<BODY>
<!--- table for main content --->
<TABLE CELLSPACING="2" CELLPADDING="2" BORDER="0">
<TR>
<!--- cell with navigation menu --->
<TD VALIGN="top" WIDTH="175">
<?php
                            include('Navigation.php');
                            ?>
</TD>

<TD VALIGN="top">
<B>Edit Section</B>
<!--- begin nested table with form --->

<form ACTION="" METHOD="POST">
    <TABLE BGCOLOR="#FFFFCC" BORDERCOLOR="#000000" BORDER="1" CELLPADDING="4" CELLSPACING="0" >
        <TR>
            <TD>Section</TD>
            <TD>
                <?php
                $SQLstring = "SELECT * FROM section WHERE SectionID = '".$_GET['pid']."'";
                $QueryResult = @mysql_query($SQLstring, $DBConnect);
                $row = @mysql_fetch_assoc($QueryResult);
                $sec = $row['SectionNo'];
                echo $sec;
                ?>
                
            </TD>
        </TR>
        <TR>
            <TD>Section</TD>
            <TD>
                <input type="text" name="SectionNo" REQUIRED="Yes" SIZE="30" MAXLENGTH="100"></TD>
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
            <TD><INPUT TYPE="submit" NAME="Submit" VALUE="Update Details"></TD>
        </TR>
        

    </TABLE>
</form>
<?php

        if(isset($_POST['SectionNo'])){
    $SectionNo =trim(strtoupper($_POST['SectionNo']));
        $SQLstring = "UPDATE `section` SET `SectionID`=".$_GET['pid'].",`SectionNo`=$SectionNo,`Course`=".$row['Course'].",`TermID`=".$row['TermID'].",`Instructor`=".$row['Instructor'] . ",`Inactive`=".$_POST['Inactive']." WHERE SectionID = '". $_GET['pid'] ."'";
        $QueryResult = @mysql_query($SQLstring, $DBConnect);

                if ($QueryResult===TRUE){
        echo "Update complete";
        }
    else
        echo "Unable to update";

    }

 


?>
        </TD>
        </TR>

</TABLE>
</BODY>
</HTML>

