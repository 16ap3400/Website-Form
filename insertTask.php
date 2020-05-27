<?php
include "../Project/connect.php";
//echo "insert connected";

$taskid = $_POST["taskid"];
$taskname = $_POST["taskname"];
$stdate = $_POST["startdate"];
$compgoal = $_POST["finishgoal"];
$currstatus = $_POST["status"];
$memberid = $_POST["id"];

$query = "INSERT INTO Task(TaskID, MemberID, TaskName, StartDate, FinishDateGoal, CurrentStatus)
                VALUES($taskid, $memberid, '$taskname', '$stdate', '$compgoal', '$currstatus');
";
$result = mysqli_query($link, $query);

if($result){
    echo "Input data is succeeded.";
} else{
    echo "Input data is fail.";
}

?>