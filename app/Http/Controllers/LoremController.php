<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class LoremController extends controller {

public function __construct() {

}


public function getIndex() {
return view('loremIpsumView');

}


public function postLorem(Request $request) {
 $numOfParagraphs = $request->input('numOfParagraphs');

  return view('loremIpsumView')->with('numOfParagraphs', $numOfParagraphs);
}


}



?>
