<?php
include "../Project/connect.php";

$FirstName = $_POST["name"];
$LastName = $_POST["lname"];

$query = "SELECT MemberID FROM TeamMember
                WHERE Fname = '$FirstName' OR name = '$LastName';
";
$result = mysqli_query($link, $query);

if($result){
    echo "\n";
    echo "\nID for $FirstName $LastName:";
    while($row = mysqli_fetch_array($result)) {
        //echo $row['column_name']; // Print a single column data
        echo $row['MemberID'];       // Print the entire row data
    }
    
    
} else{
    echo "Search failed.";
}
?>