<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RandomUserController extends Controller {

  public function __construct() {
          # Put anything here that should happen before any of the other actions
      }

  public function getIndex() {
            return view('randomUserView');
        }

  public function postRandomUser(Request $request) {
             $numOfUsers = $request->input('numOfUsers');
             return view('randomUserView')->with('numOfUsers', $numOfUsers);
  }
}
 ?>
