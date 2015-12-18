<!--- 
File:			UserInsert.cfm	
Description:	Insterts a new User
Author:			Bob Nell	
Created:		October 2006
--->

<!--- if the checkbox on the form was not checked its value will not be passed
	  so check to see if if exists, if not give it the value of 0 
		This code is added for a MySQL databse to process check boxes
		The CFPARAM resets the box to it's default value if the checkbox was not checked --->
			
<cfif IsDefined ("form.Inactive") >
	  	<cfset form.Inactive = "1">
	  <cfelse>
	  	<cfset form.Inactive = "0">
	  </cfif>
<CFPARAM NAME="FORM.Inactive" DEFAULT="0">		

<!--- insert product information --->

<?php
$SQLstring = "insert into  instructor(UserID, UserName, Password, Roles, Inactive \";
$QueryResult = @msql_query ($SQLstring, $DBConnect);
$userInsert = @mysql_fetch_assoc($QueryResult);

?>
	insert into  instructor(UserID, UserName, Password, Roles, Inactive 
	  				   
					   
Values			      Trim $_POST ['UserID)']
			      Trim $_POST ['UserName']
			      Trim $_POST ['Password']
			      Trim $_POST ['Roles'],
				  $_POST ['Inactive']
	
</CFQUERY>
<HTML>
<HEAD>
    <TITLE>Successful User Insert</TITLE>
</HEAD>
<BODY>
<CFIF IsUserInRole("Administrator")>
 	<!--- include panel --->
 	<CFINCLUDE TEMPLATE="inc_Banner.cfm">
	
	<!--- table for main content --->
	<TABLE CELLSPACING="2" CELLPADDING="2" BORDER="0">
		<TR>
			<!--- cell with navigation menu --->
		    <TD VALIGN="top" WIDTH="175">
				<CFINCLUDE TEMPLATE="inc_Navigation.cfm">
			</TD>
			<!--- main content cell --->
		    <TD VALIGN="top">
				<B>The details for '<CFOUTPUT>#FORM.UserName#</CFOUTPUT>' have been
				successfully Inserted.</B>
			</TD>
		</TR>
	</TABLE>
	</CFIF>
</BODY>
</HTML>
