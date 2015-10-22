<?php
$words =array();
$maxNumOfWords = 10;
$outString = " ";
$numbersArray = array("1","2","3","4","5","6","7","8","9", "0");
$symbolsArray = array("!", "@", "#", "$", "%", "^", "&", "*", "(", ")" );
$num ="";

//Array Create.
if($fileHandler = fopen("../dictionary.txt", "r")) {
  while($line = fgets($fileHandler)){
    array_push($words, trim($line));
  }
  fclose($fileHandler);
}


if (isset($_POST["numOfWords"]) && !empty($_POST["numOfWords"]))
{
    $numOfWords = htmlspecialchars(trim($_POST["numOfWords"]));
      if (!is_numeric($numOfWords)) {
        $_SESSION['errorMessage'] = 'You must enter a number';
        echo '<script>location.href = "error.php"</script>';
        }

      if ($numOfWords > $maxNumOfWords) {
        $_SESSION['errorMessage'] = 'The max. number of words is:' . $maxNumOfWords;
        echo '<script>location.href = "error.php"</script>';
      }

      $passwords = ($numOfWords < 2) ? array(array_rand($words, $numOfWords)):
      array_rand($words, $numOfWords);

    for($i = 0; $i < $numOfWords; $i++) {
        $outString .= $words[$passwords[$i]];
        if(($i +1) < $numOfWords)
          $outString .= "-";
     }

     if(isset($_POST["number"]))
     $num = $numbersArray[array_rand($numbersArray,1)];
     $outString .= $num;

     if (isset($_POST["symbol"])) {
       $symb = $symbolsArray[array_rand($symbolsArray,1)];
       $outString .= $symb;
     }



}
 ?>
