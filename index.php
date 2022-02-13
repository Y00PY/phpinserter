<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<h1>autoverleih</h1><br>
<form action="insert.php">
<h2>Daten einfügen:</h2>

vorname: <input type="text" name="vorname"><br>
nachname: <input type="text" name="nachname"><br>
modell: <input type="text" name="modell"><br>
marke: <input type="text" name="marke"><br>
baujahr: <input type="text" name="baujahr"><br>
<br>
<input type="submit">
</form>

<h2>Daten abfragen</h2>
<form action="select.php">
<input value="Daten Abfragen" type="submit">
</form>

</body>
</html>