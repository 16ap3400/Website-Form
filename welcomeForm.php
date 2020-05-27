<html>
<link rel="stylesheet" type="text/css" href="style.css">

<body>

<h1>
    SEARCH DATA:
</h1>

<h2>Search Team Member ID by Name:</h2>
<form action="searchTeamMembers.php" method="POST">
    First Name: <input type="text" name="name"><br>
    Last Name: <input type="text" name="lname"><br>
    <input type="submit">
</form>

<h2>Check Message Inbox:</h2>
<form action="findMessages.php" method="POST">
    Member ID: <input type="text" name="id"><br>
    <input type="submit">
</form>

<h2>Search Number of Changes on a Document:</h2>
<form action="countChanges.php" method="POST">
    File Name: <input type="text" name="name"><br>
    <input type="submit">
</form>

<h1>
    WORK ON A DOCUMENT:
</h1>

<h2>Alter a Document:</h2>
<form action="alterDocument.php" method="POST">
    File Name: <input type="text" name="name"><br>
    Member ID: <input type="text" name="memberid"><br>
    Task ID: <input type="number" name="taskid"><br>
    File Type: <input type="text" name="ftype"><br>
    Date of Access: <input type="datetime" name="date" value='<?php date_default_timezone_set('America/Chicago'); echo date('Y-m-d h:i:s');?>'><br>
    <input type="submit">
</form>




<h1>
    INSERT DATA:
</h1>
<h2>
    
    Insert member of management:
</h2>
<form action="insertManagement.php" method="POST">
Name: <input type="text" name="name"><br>
Middle: <input type="text" name="mname"><br>
Last: <input type="text" name="lname"><br>
Member ID: <input type="number" name="memberid"><br>
<input type="submit">
</form>

<h2>
    
    Insert a document into database:
</h2>
<form action="insertDocument.php" method="POST">
Task ID: <input type="number" name="taskid"><br>
File Name: <input type="text" name="filename"><br>
File Type: <input type="text" name="filetype"><br>
File Content: <input type="text" name="filecontent"><br>
Member ID: <input type="number" name="authormemberid"><br>
Upload Date: <input type="date" name="uploaddate" value='<?php date_default_timezone_set('America/Chicago'); echo date('Y-m-d');?>'><br>
<input type="submit">
</form>

<h2>
    
    Send a message:
</h2>
<form action="insertMessage.php" method="POST">
Member ID: <input type="number" name="memberid"><br>
Date Sent: <input type="datetime" name="datesent" value='<?php date_default_timezone_set('America/Chicago'); echo date('Y-m-d h:i:s');?>'><br>
Recipient ID: <input type="text" name="recid"><br>
Message Content: <input type="text" name="message"><br>

<input type="submit">
</form>

<h2>
    
    Insert a new task or add team member to a current task:
</h2>
<form action="insertTask.php" method="POST">
Task ID: <input type="number" name="taskid"><br>
Member ID: <input type="number" name="id"><br>
Task Name: <input type="text" name="taskname"><br>
Start Date: <input type="date" name="startdate"><br>
Completion Goal: <input type="date" name="finishgoal"><br>
Current Status: <input type="text" name="status"><br>
<input type="submit">
</form>

<h2>
    
    Insert a team member:
</h2>
<form action="insertTeamMember.php" method="POST">
Name: <input type="text" name="name"><br>
Middle: <input type="text" name="mname"><br>
Last: <input type="text" name="lname"><br>
Member ID: <input type="text" name="memberid"><br>
Employee Type: <input type="text" name="employeetype"><br>
<input type="submit">
</form>



<!--
<h2>
 

    Log the changes of a document:
</h2>
<form action="insertTrackedChanges.php" method="POST">
Task ID: <input type="number" name="taskid"><br>
Member ID: <input type="number" name="memberid"><br>
File Type: <input type="text" name="ftype"><br>
File Name: <input type="text" name="fname"><br>
Date of Access: <input type="date" name="date"><br>
Post Access Document: <input type="text" name="post"><br>
Pre Access Document: <input type="text" name="pre"><br>
<input type="submit">
</form>


-->

</body>
</html>