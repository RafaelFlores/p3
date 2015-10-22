@extends('layouts.master')

@section('title')
    RandomUser Generator
@stop

@section('head')
    The head
@stop

@section('content')


@if(isset($numOfUsers))
<?php
// use the factory to create a Faker\Generator instance

for ($i=0; $i < $numOfUsers ; $i++) {
  # code...

$faker = Faker\Factory::create();


// generate data by accessing properties
echo $faker->name;
  // 'Lucy Cechtelar';
echo '<br>';
echo $faker->address;
  // "426 Jordy Lodge
  // Cartwrightshire, SC 88120-6700"
echo '<br>';

if(isset($email)) {
 echo $faker->email;
 echo '<br>';
}
if(isset($username)) {
 echo $faker->userName ;
 echo '<br>';
}
if(isset($password)) {
 echo $faker->password ;
 echo '<br>';
}
  echo '<br>';
  echo '<br>';
}
?>
@else
<h3 class="for-title" >Enter the number of Random Users (Max: 99)</h3>
@if(count($errors) > 0)
    <ul class="for-title">
      The following errors occured:
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>

@endif

<div class='input-text'>

<form method='post' action='/randomuser'>
    <input type='hidden' name='_token' value='{{ csrf_token() }}'>
    <input id='input-form' type='text' name='numOfUsers'>
    <input type="checkbox" name = "email" id="email" value="email">E-mail
    <label for="email"></label>
    <input type="checkbox" name = "username" id="username" value="username">User Name
    <label for="username"></label>
    <input type="checkbox" name = "password" id="password" value="password">Password
    <label for="password"></label>
    <p>
      <br>
      <br>
      <input type='submit' value='Submit'>
    </p>

</form>
</div>
@endif

<br>
@stop
