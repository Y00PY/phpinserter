<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<?php
$con=mysqli_connect("localhost","root","","trainingdb");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM insertbeispiel");

echo "<table class=\"table table-dark\">
<tr>
<th>Vorname</th>
<th>Nachname</th>
<th>Marke</th>
<th>Modell</th>
<th>Baujahr</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['vorname'] . "</td>";
echo "<td>" . $row['nachname'] . "</td>";
echo "<td>" . $row['marke'] . "</td>";
echo "<td>" . $row['modell'] . "</td>";
echo "<td>" . $row['baujahr'] . "</td>";

echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>

</body>
</html>