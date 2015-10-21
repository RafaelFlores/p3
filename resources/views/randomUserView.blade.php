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
  echo '<br>';
}
?>
@else

<div class='input-text'>
  <h1>Enter the number of Random Users</h1>
<form method='post' action='/randomuser'>
    <input type='hidden' name='_token' value='{{ csrf_token() }}'>
    <input type='text' id='input-form' name='numOfUsers'>
    <input type='submit' value='Submit'>
</form>
</div>
@endif

<br>
@stop
