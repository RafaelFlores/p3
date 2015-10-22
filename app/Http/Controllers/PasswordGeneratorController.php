<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PasswordGeneratorController extends Controller {

  public function __construct() {
    # Put anything here that should happen before any of the other actions
  }

  public function getIndex() {
    return view('xkcdPasswordsView');
  }

  public function postPass(Request $request) {

    $this->validate($request, [
      'numOfWords' => 'required|integer|max:10'
      ]);

      $numOfWords = $request->input('numOfWords');
      $number = $request->input('number');
      $symbol = $request->input('symbol');


      $words =array();
      $maxNumOfWords = 10;
      $outString = " ";
      $numbersArray = array("1","2","3","4","5","6","7","8","9", "0");
      $symbolsArray = array("!", "@", "#", "$", "%", "^", "&", "*", "(", ")" );
      $num ="";


      if($fileHandler = fopen(public_path("dictionary.txt"), "r")) {
        while($line = fgets($fileHandler)){
          array_push($words, trim($line));
        }
        fclose($fileHandler);
      }
      $passwords = ($numOfWords < 2) ? array(array_rand($words, $numOfWords)):
      array_rand($words, $numOfWords);

      for($i = 0; $i < $numOfWords; $i++) {
        $outString .= $words[$passwords[$i]];
        if(($i +1) < $numOfWords)
        $outString .= "-";
      }

      if (isset($number))
      $num = $numbersArray[array_rand($numbersArray,1)];
      $outString .= $num;

      if (isset($_POST["symbol"])) {
        $symb = $symbolsArray[array_rand($symbolsArray,1)];
        $outString .= $symb;
      }

      return view('xkcdPasswordsView')
      ->with('numOfWords', $numOfWords)
      ->with('outString', $outString);
    }

  }

  ?>
