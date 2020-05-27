<?php
include "../Project/connect.php";
//echo "insert connected";

$taskid = $_POST["taskid"];
$memberid = $_POST["memberid"];
$filetype = $_POST["ftype"];
$filename = $_POST["fname"];
$doa = $_POST["date"];
$post = $_POST["post"];
$pre = $_POST["pre"];

$query = "INSERT INTO TrackedChanges(TaskID, MemberID, FileType, FileName, DateOfAccess, PostAccessContent, PreAccessContent)
                VALUES($taskid, '$memberid', '$filetype', '$filename', '$doa', '$post', '$pre');
";
$result = mysqli_query($link, $query);

if($result){
    echo "Input data is succeeded.";
} else{
    echo "Input data is fail.";
}

$squery = "SELECT * FROM Document
                WHERE FileName = '$filename';
";
if($squery){
    $query4 = "UPDATE Document SET FileContent = '$post', AuthorMemberID = '$memberid', UploadDate = '$doa' WHERE FileName = '$filename';";
    $result4 = mysqli_query($link, $query4);
    if($result4){
        echo "Update document is succeeded.";
    } else{
        echo "Update document is fail.";
    }
} else{
    $query2 = "INSERT INTO Document(TaskID, FileType, FileName, FileContent, AuthorMemberID, UploadDate)
                VALUES($taskid, '$filetype', '$filename', '$post', '$memberid', '$doa');
    ";
    $result2 = mysqli_query($link, $query2);
    if($result2){
        echo "Input data is succeeded.";
    } else{
        echo "Input data is fail.";
    }
}




?>