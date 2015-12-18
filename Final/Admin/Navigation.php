
<!DOCTYPE html>
<head>
    
</head>
<body>

<div id=left>
    <p>
    <A href="Login.php">Log Out</A></p>
    <p>
        <A HREF="home.php">Admin Home</A><br>
        <A HREF="../Index.php">Public Web Site</A>
    </p>
    <?php
    if (strcmp($_SESSION['Role'], "Administrator")===0) {
        ?>
    <p>
        
        <font COLOR="#000000"><b>Administrator Tools</b></font><br>
        <br />
        <font color="#000000">Terms</b><br />
	<table style="margin-bottom: 15px;">
	    <?php
	    $qProducts['TermId']=null;
	$SQLstring = "SELECT * from term";
	$QueryResult = @mysql_query ($SQLstring, $DBConnect);
	while ($qProducts = @mysql_fetch_assoc($QueryResult)) {
	echo "<tr><A HREF='CourseList.php?pid=".$qProducts['TermID']."'>".$qProducts['Term']. "</A></tr><br/>";
	};
	
	?>
	</table>
	</font><br>
	
	
        <A HREF="TermInsert.php">Insert Term</A><BR>
        <A HREF="CourseInsert.php">Insert Course</A><BR>
        <A HREF="SectionInsert.php">Insert Section</A><BR>
        <A HREF="SectionList.php">update Section</A><BR>
        <br>
        <FONT COLOR="#000000">Statistics</B></FONT><BR>
        <A href="TermStat.php">Term </A><BR>
        <A href="CourseStat.php">Course </A><BR>
        <A href="SectionStat.php">section </A><BR>
        <br>
        <FONT COLOR="#000000">Instructors</B></FONT><BR>
        <P><A HREF="UserList.php">Edit Instructors</A><BR>
        <A HREF="Usernew.php">Insert New Instructors</A><BR>	</P> 
    </p>
    <?php
    }
    if(strcmp($_SESSION['Role'], "Instructor")===0){
        ?>
	<P>
		<FONT COLOR="#000000">Statistics</B></FONT><BR>
		<A href="inst.php">Course average </A><BR>
		<A href="CourseInst.php">Course </A><BR>

		<br>
	</P>
        <?php
        
    }

	
    
        ?>
        </div>
</body>