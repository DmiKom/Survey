<?php
session_start();
$Inst= $_POST['instructor'];
$_SESSION['Inst'] = $Inst;


$DBConnect = @mysql_connect("localhost", "root", "");
            $DBName = "bbdata";
            mysql_select_db($DBName, $DBConnect);
            

?>

<HTML>

    <HEAD>
        <TITLE>Dunwoody Survey </TITLE>
    </HEAD>
    <BODY BGCOLOR="#333333" TEXT="#000000" LEFTMARGIN="2" TOPMARGIN="2" MARGINWIDTH="2" MARGINHEIGHT="2">
        
        <TABLE WIDTH="735" BORDER="0" CELLPADDING="0" CELLSPACING="0" ALIGN="center">
            <TR>
            <!-- navigation column -->
                <TD WIDTH="740" HEIGHT="438" VALIGN="top" BGCOLOR="#7F0000" ALIGN="CENTER">
                    <Form ACTION="SurveyInsert.php" METHOD="POST" >
                        

<?php
$SQLstring = "select count(*) + 1 as NewNumber from survey";
$QueryResult = @mysql_query($SQLstring, $DBConnect);
if($Row = mysql_num_rows($QueryResult)){
echo "<INPUT type='hidden' name='SurveyID' message='new ID number' value=".$Row.">";
}
?>
    <TABLE border="0" BGcolor="#FFFFFF">
        
        <TR HEIGHT="60" WIDTH="200">
            <TD HEIGHT="60" width="200">
                QUESTIONS
            </TD>
            <TD HEIGHT="60" width="100">
                Strongly Agree
            </TD>
            <TD HEIGHT="60" width="100">
                    Agree
            </TD >
            <TD HEIGHT="60" width="100">
                   neutral
            </TD>
            <TD HEIGHT="60" width="100">
                   Disagree
            </TD>
            <TD HEIGHT="60" width="100">
                 Strongly Disagree
            </TD>
        </TR>
        
        <TR>
            <?php
                $SQLstring = "select * from questions";
                $QueryResult = @mysql_query($SQLstring, $DBConnect);
                while($Row = mysql_fetch_assoc($QueryResult)){
                    echo "<TR><td>";
                    echo $Row['Question'];
                    echo "</td><td>";
                       echo "<input type='radio' value='1' name='question".$Row['QID']."' >";
                        echo "</TD>";
                        echo "<TD HEIGHT='60' WIDTH='50'>";
                            echo "<input type='radio' value='2' name='question".$Row['QID']."'  >";
                        echo "</TD>";
                        echo "<TD text-align='center'>";
                            echo "<input type='radio' value='3' name='question".$Row['QID']."' >";
                        echo "</TD >";
                        echo "<TD>";
                            echo "<input type='radio' value='4' name='question".$Row['QID']."'  >";
                        echo "</TD>";
                        echo "<TD>";
                            echo "<input type='radio' value='5' name='question".$Row['QID']."'  >";
                        echo "</TD>";
                    echo "</TR>";
                }
                    ?>
        </TR>
        <tr>
            <td>
                
            </td>
            <td> Yes</td>
            <td>No</td>
            
        </tr>
        <tr>
            <TD>blah blah blah blah blah</TD>
            <td>
            <input type="radio" name="Q11" value="yes"><br>
            </td>
            <td>
            <input type="radio" name="Q11" value="no">
            </td>
        </tr>
        <tr>
            <td>
                Comments
            </td>
        </tr>
        <tr>
            <td>
            <textarea type="text"  rows="4" cols="100" name="Q12Text"> </textarea>
            </td>
        </tr>

        
        <TR>
                    <TD>
                            <button type="submit" name="submit" value="Yes">Submit</button>
                            <INPUT TYPE="reset">
                    </TD>
            </TR>
        </table>
    
    </form>
    </TD>
</TR>
</TABLE>
</BODY>
</HTML>