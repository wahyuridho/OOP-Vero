 <?php
 
 // Release 0

require_once('animal.php');
require_once('ape.php');
require_once('frog.php');

$sheep = new animal("shaun");

echo "Nama Animal :  $sheep->name <br>" ; // "shaun"
echo "Legs        :  $sheep->legs <br>" ; // 4
echo "Cold Blooded:  $sheep->cold_blooded <br> <br>" ; // "no"


//Release 1 (masih lanjutan release 0 dan animal.php)

$sungokong = new ape("kera sakti");

echo "Nama Animal : $sungokong->name <br>";
echo "Legs        : $sungokong->legs <br>";
echo "Cold Blooded: $sungokong->cold_blooded <br>";
echo $sungokong->Yell(); //Memanggil paramater
echo "<br> <br>";

//Release 2

$kodok = new frog("buduk");

echo "Nama Animal : $kodok->name <br>";
echo "Legs        : $kodok->legs <br>";
echo "Cold Blooded: $kodok->cold_blooded <br>";
echo $kodok->Jump(); // "hop hop"
