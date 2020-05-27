


<?php
include "../Project/connect.php";
//echo "insert connected";

$name = $_POST["name"];
$mname = $_POST["mname"];
$lname = $_POST["lname"];
$memberid = $_POST["memberid"];

$query = "INSERT INTO Management(MemberID, Fname, Mname, Lname)
                VALUES($memberid, '$name', '$mname', '$lname');
";
$result = mysqli_query($link, $query);

if($result){
    echo "Input data is succeeded.";
} else{
    echo "Input data is fail.";
}

?>