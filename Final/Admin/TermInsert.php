<?php
session_start();
$DBConnect = @mysql_connect("localhost", "root", "");
$DBName = "bbdata";
mysql_select_db($DBName, $DBConnect);

                    ?>
                    
<HTML>
<HEAD>
<title>Add a New Term</title>
</HEAD>
<BODY>
<TABLE CELLSPACING="2" CELLPADDING="2" BORDER="0">
<TR>
<TD VALIGN="top" WIDTH="175">
<?php
include ("Navigation.php");
?>
</TD>
<?php
if (strcmp($_SESSION['Role'], "Administrator")===0) {
    ?>

<td valign="top">
<b>Insert a new Term</b>


    <form action="" method="POST">
        <table bgcolor="##00BFFF" bordercolor="##000000" border="1" cellpadding="4" cellspacing="0">
        <tr>
            <td>Term Name</td>
            <td>
                <input type="text" name="Term" message="Please enter a term" required="yes" size="30" maxlength="100">
            </td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>
            <input type="submit" name="Submit" value="Add Term">
            </td>
        </tr>
    </table>
    </form>
    <?php

}

if (isset($_POST['Term'])){
    $term = strtoupper($_POST['Term']);
    $SQLstring = "insert into term (TermID, Term) Values (null,'". $term. "')";
		$QueryResult = @mysql_query($SQLstring, $DBConnect);
        if ($QueryResult ===TRUE){
            echo $term. " has been succesfully inserted";
        }
        else
        echo $term." term already exists";
}
?>
        
        

    </td>
    </TR>
</TABLE>
</BODY>
</HTML>

