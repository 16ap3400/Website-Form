<?php
include "../Project/connect.php";
//echo "insert connected";

$name = $_POST["name"];
$mname = $_POST["mname"];
$lname = $_POST["lname"];
$memberid = $_POST["memberid"];
$emptype = $_POST["employeetype"];

$query = "INSERT INTO TeamMember(MemberID, Fname, Mname, name, EmployeeType)
                VALUES($memberid, '$name', '$mname', '$lname', '$emptype');
";
$result = mysqli_query($link, $query);

if($result){
    echo "Input data is succeeded.";
} else{
    echo "Input data is fail.";
}

?>