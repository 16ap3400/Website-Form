<?php
include "../Project/connect.php";
//echo "insert connected";

$taskid = $_POST["taskid"];
$ftype = $_POST["filetype"];
$fname = $_POST["filename"];
$fcontent = $_POST["filecontent"];
$memberid = $_POST["authormemberid"];
$update = $_POST["uploaddate"];

echo $taskid;
echo $ftype;
echo $fname;
echo $fcontent;
echo $memberid;
echo $update;

$query = "INSERT INTO Document(TaskID, FileType, FileName, FileContent, AuthorMemberID, UploadDate)
                VALUES($taskid, '$ftype', '$fname', '$fcontent', '$memberid', '$update');
";
$result = mysqli_query($link, $query);

if($result){
    echo "Input data is succeeded.";
} else{
    echo "Input data is fail.";
}

?>