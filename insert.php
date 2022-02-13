<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password,'trainingdb');
// Create connection

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$parts = parse_url($url);
parse_str($parts['query'], $query);

$vorname= $query['vorname'];
$nachname= $query['nachname'];
$modell= $query['modell'];
$marke= $query['marke'];
$baujahr= $query['baujahr'];


echo "insert following: ".$vorname." ".$nachname." ".$marke." ".$modell." ".$baujahr;
echo "<br>";

$sql = "INSERT INTO insertbeispiel (vorname, nachname, marke, modell, baujahr) VALUES ('".$vorname."', '".$nachname."', '".$marke."', '".$modell."',".$baujahr.")";
if(mysqli_query($conn, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}



mysqli_close($conn);
?>

</body>
</html>