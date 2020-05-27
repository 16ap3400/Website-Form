<?php
include "../Project/connect.php";
//echo "insert connected";

$memberid = $_POST["memberid"];
$messid = $_POST["messageid"];
$dsent = $_POST["datesent"];
$recid = $_POST["recid"];
$messcontent = $_POST["message"];

$que = "SELECT * FROM TeamMember WHERE MemberID = '$recid' AND RecipientID = '$memberid';";
$result1 = mysqli_query($link, $que);

if (mysqli_num_rows($result1)==0) {
    echo "User with member ID (";
    echo $memberid;
    echo ") does not exist";
    die("");
} else{
    echo "";
}


$query = "INSERT INTO Message(MemberID, MessageID, DateSentRecieved, RecipientID, SenderID, MessageContent)
                VALUES($memberid, '$messid', '$dsent', '$recid', '$memberid', '$messcontent');
";
$result = mysqli_query($link, $query);

if($result){
    echo "Message sent!";
} else{
    echo "Message failed to send.";
}

?>