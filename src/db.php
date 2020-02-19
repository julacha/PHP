<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "music";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$sql = "SELECT * FROM tracks";
$result = $conn->query($sql);


$rows = $result->fetch_all(MYSQLI_ASSOC);
//var_dump($rows);

echo "<hr>";
$areColumnSet = false;

foreach ($rows as $index => $row){
    if (!$areColumnSet){
        echo "<div class='tracks-cont'>";
        foreach ($row as $colname => $cell){ 
            echo "<span class='col-fields'>$colname</span>";  
    }
    echo "</div>";
    $areColumnSet = true;
}
    echo "<div class='track-cont'>";
    echo "Row: $index";
    //print_r($index);
    foreach ($row as $colname => $cell){
        echo "<span class='track-cell'>$cell</span>";
    }
    echo "</div>";
}
/* if ($result->num_rows > 0) {
   // output data of each row
    while ($row = $result->fetch_assoc()) {
       echo "<div class='tracks-cont'>";
       echo "<span class='track-cell'>id: " . $row["id"] . "</span>";
       echo "<span class='track-cell'>name: " . $row["name"] . "</span>";
       echo "<span class='track-cell'>album: " . $row["album"] . "</span>";
       echo "</div>";
    }
} else {
    echo "0 results";
} */
$conn->close();
