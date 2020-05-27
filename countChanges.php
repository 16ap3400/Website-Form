<?php
include "../Project/connect.php";

$FileName = $_POST["name"];

$query = "SELECT COUNT(*) FROM TrackedChanges
                WHERE FileName = '$FileName';
";
$result = mysqli_query($link, $query);

if($result){
    echo "\n";
    echo "\nNumber of edits made to document: ";
    
    while($row = mysqli_fetch_array($result)) {
        //echo $row['column_name']; // Print a single column data
        echo $row['COUNT(*)'];       // Print the entire row data
    }
    
    
} else{
    echo "Search failed.";
}
?>