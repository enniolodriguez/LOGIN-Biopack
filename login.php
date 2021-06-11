<?php
session_start();
if ($_SESSION['loggedin'] == true){
    header('Location: home.php');
}
else{
    header('Location: index.html');

}
include('config.php');
$gebruikersnaam = $_POST['gebruikersnaam'];
$wachtwoord = $_POST['wachtwoord'];

$gebruikersnaam = stripcslashes($gebruikersnaam);
$wachtwoord = stripcslashes($wachtwoord);
$gebruikersnaam = mysqli_real_escape_string($mysqli, $gebruikersnaam);
$wachtwoord= mysqli_real_escape_string($mysqli, $wachtwoord);

$sql = "select * from Klant where gebruikersnaam = '$gebruikersnaam' and wachtwoord = '$wachtwoord'";
$resultaat = mysqli_query($mysqli, $sql);
$rij = mysqli_fetch_array($resultaat, MYSQLI_ASSOC);
$tel = mysqli_num_rows($resultaat);

if($tel == 1){
    $_SESSION['loggedin'] = true;
    header("location:home.php");
}
else{
    echo($gebruikersnaam);
    echo($wachtwoord);

    echo "<h1> Login mislukt.</h1>";
}
?>
