<?php
include "../Project/connect.php";

$memberid = $_POST["id"];

$query = "SELECT * FROM Message m, TeamMember t
                WHERE m.RecipientID = '$memberid' AND m.MemberID = t.MemberID;
";
$result = mysqli_query($link, $query);

if($result){
    
    while($row = mysqli_fetch_array($result)) {
        //echo $row['column_name']; // Print a single column data
        echo "Message from ";
        echo $row['Fname'];
        echo " ";
        echo $row['Mname'];
        echo " ";
        echo $row['name'];
        echo ": ";
        echo $row['MessageContent'];       // Print the entire row data
    }
    
    
} else{
    echo "No messages in inbox.";
}
?>