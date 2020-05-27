<?php
include "../Project/connect.php";

$FileName = $_POST["name"];
$taskid = $_POST["taskid"];
$memberid = $_POST["memberid"];
$filetype = $_POST["ftype"];
$doa = $_POST["date"];

$que = "SELECT * FROM Task WHERE TaskID = '$taskid' AND MemberID = '$memberid';";
$result1 = mysqli_query($link, $que);

if (mysqli_num_rows($result1)==0) {
    echo "User with member ID (";
    echo $memberid;
    echo ") does not have access to task number";
    echo $taskid;
    echo "documents.";
    die("");
} else{
    echo "USER CONIFRMED ::: ";
}

#if($que){
#    echo "User confirmed assigned to task";
#} else{
#    echo "User with member ID (";
#    echo $memberid;
#    echo ") does not have access to task number";
#    echo $taskid;
#    echo "documents.";
#    die("");
#}

$query = "SELECT * FROM Document
                WHERE FileName = '$FileName';
";
$result = mysqli_query($link, $query);

if($result){
    echo "\n";
    echo "\nDocument Before Edit: ";
    
    while($row = mysqli_fetch_array($result)) {
        //echo $row['column_name']; // Print a single column data
        $FileContent = $row['FileContent'];
        echo $row['FileContent'];       // Print the entire row data
    }
    
    
} else{
    echo "Search failed.";
}
?>

<html>
    <body>
        <h2>
            <form action="insertTrackedChanges.php" method="POST">
                Altered Document Content: <input type="text" name="post" value="<?php echo $FileContent;?>"><br>
                File Name: <input type="text" name="fname" value="<?php echo $FileName;?>"><br>
                Task ID: <input type="number" name="taskid" value="<?php echo $taskid;?>"><br>
                Member ID: <input type="number" name="memberid" value="<?php echo $memberid;?>"><br>
                File Type: <input type="text" name="ftype" value="<?php echo $filetype;?>"><br>
                Date of Access: <input type="date" name="date" value="<?php echo $doa;?>"><br>
                Pre Access Document: <input type="text" name="pre" value="<?php echo $FileContent;?>"><br>                
                <input type="submit">
            </form>
        </h2>
    </body>
</html>