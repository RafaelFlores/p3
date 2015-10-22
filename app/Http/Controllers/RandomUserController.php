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

    $this->validate($request, [
      'numOfUsers' => 'required|integer|max:99'
      ]);
      $numOfUsers = $request->input('numOfUsers');
      $email = $request->input('email');
      $username = $request->input('username');
      $password = $request->input('password');

      return view('randomUserView')
      ->with('numOfUsers', $numOfUsers)
      ->with('email', $email)
      ->with('username', $username)
      ->with('password', $password);
    }
  }
  ?>
