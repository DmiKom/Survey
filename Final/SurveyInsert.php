
<?php
session_start();
            $DBConnect = @mysql_connect("localhost", "root", "");
            $DBName = "bbdata";
            mysql_select_db($DBName, $DBConnect);
//finds the survey number
$TableName = "survey";
  $SQLstring = "select SID from $TableName";
  $QueryResult = @mysql_query ($SQLstring, $DBConnect);
  $SID = mysql_num_rows($QueryResult) + 1 ;
$Quest = 1;
$_POST['question11'] = null;
//pulls all the survey questions and inserts into database
while($_POST['question'. $Quest] && strcmp ($_POST['question'. $Quest],  "question11") !== 0  ) {
    $q = $_POST['question'. $Quest];
    $SQLstring = "insert into answers(QID,AVal,SID,SectionID,CourseID,UserID,TermID)Values(".$Quest.",".$q.",".$SID.",".$_SESSION['Section'].",".$_SESSION['Course'].",".$_SESSION['Inst']."," .$_SESSION['Term'].")";
    $QueryResult = @mysql_query ($SQLstring, $DBConnect);
        var_dump($_POST['question'.$Quest]);
    $Quest++;

}
//inserts the last two questions
$SQLstring = "insert into last (SID, Q11, Q12)Values(" .$SID. ", '" . $_POST['Q11'] . "','". $_POST['Q12Text']."')";
@mysql_query($SQLstring, $DBConnect);
  
  
  //insert into survey
  $SQLstring = "insert into survey (SID, SecID)Values( null ," . $_SESSION['Section'] . ")";
  @mysql_query($SQLstring, $DBConnect);
  

if ($QueryResult === TRUE){
?>
<HEAD>
<TITLE>Successful Survey Insert</TITLE>

</HEAD>
<BODY>
<h2>Thank you for your feedback</h2>
</TD>
</TR>
</TABLE>

</BODY>
</HTML>
<?php
}
else
echo "error has occured restart survey"; 
?>
