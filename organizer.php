<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Organizer</title>
    <link rel="stylesheet" type="text/css" href="styl6.css"/>
</head>
<body>
    <div id="baner1">
     <h2> MÓJ ORGANIZER </h2>
    </div>
      
       <div id="baner2">
        <form method="post">
            <label> Wpis wydarzenia
            <input type="text" name="tekst" id="tekst"/>
            <input type="submit" value="ZAPISZ"/>
        </label>
</form>
<?php

// utworzenie zmiennych
$server = "localhost";
$user = "root";
$passwd = "";
$dbname = "egzamin6";

$conn = mysqli_connect($server,$user,$passwd,$dbname);

/*
if (!$conn) {
    die ("fatal error" . mysqli_error($conn));
} echo "jest okej";
*/



if(!empty($_POST['tekst'])){
    $tekst = $_POST['tekst'];
    $sql3 = "UPDATE zadania SET wpis = '$tekst' WHERE dataZadania = '2020-08-27'";
    mysqli_query($conn,$sql3);

}
?>





        </form>
       </div>

          <div id="baner3">
           <img src="logo2.png" alt="Mój organizer"/>
          </div> 

            <div id="glowny">
<?php
$zapytanie = "SELECT dataZadania, wpis, miesiąc FROM zadania WHERE miesiąc = 'sierpień'";
$sql = mysqli_query($conn,$zapytanie);

while ($wynik = mysqli_fetch_row($sql)) {
    echo "<div class='blok'> <h6> $wynik[0] , $wynik[2] </h6> 
    <p> $wynik[1] </p> </div>";
}

?>
            </div>
             
               <div id="stopka">
<?php

$zapytanie2 = "SELECT miesiąc, rok FROM zadania WHERE dataZadania = '2020-08-01'";
$sql2 = mysqli_query($conn,$zapytanie2);

while ($wynik2 = mysqli_fetch_row($sql2)){
    echo "<h1> miesiąc: $wynik2[0], rok: $wynik2[1]</h6>";
}





?>
               <p> Stronę wykonał:000000000 </p>
               </div>

</body>
</html>