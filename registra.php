<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Template</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="miostile.css">

</head>
<body>

<div class="sidenav">
  <a href="index.html">Home</a>
  <a href="prenotazioni.html">Prenota</a>
</div>

<div class="content">
  <h2>CSS Template</h2>
  
  <?php
$ID = 0;
$nome=$_GET["nome"];
$cognome=$_GET["cognome"];
$email=$_GET["email"];
$ID = $ID + 1;
$telefono=$_GET["telefono"];
echo "<br />L'ID dell'utente è $ID <br />";
echo "<br />la prenotazione di $nome $cognome è stata effettuata <br />";
echo "<br />con l'indirizzo di posta elettronica $email. <br />";
echo "<br />con il seguente numero telefonico: $telefono. <br />";
$ora = date("H:i:s");
$data = date("d-m-Y");
echo "<br />alle ore $ora del giorno: $data <br />";
$file = fopen("Registrazione.txt", "a");
fwrite($file, "$ID, $nome, $cognome, $email, $telefono, $ora, $data ");
fclose($file);
?>
</div>

</body>
</html>935.
