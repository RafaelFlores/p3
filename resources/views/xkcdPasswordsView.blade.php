@extends('layouts.master')

@section('title')
    xkcd PasswordsGenerator
@stop

@section('head')

@stop



@section('content')
@if(isset($numOfWords))
   <h3><?php echo $outString?></h3>
@else

<h3> Password Generator</h3>

  <div class="box1">
  A password needs to comply with two functions: It has to be hard to crack but
  it has to be easy to remember, so thats why  this page genereates passwords
  using words that are easy to remember. This passwords are known to be
  xkcd passwords because they explain the issue in their comic #936 Password
  Strength at <a href="http://www.explainxkcd.com/wiki/index.php/936:_Password_Strength"
  >http://www.explainxkcd.com/wiki/index.php/936:_Password_Strength</a>
</div>

<p>
  <h1 class="for-title" >Enter the number of words for the password (Max: 10)</h1>
  @if(count($errors) > 0)
      <ul class="for-title">
        <h3>The following errors occured:</h3>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </ul>

  @endif



<div class='input-text'>

<form method='post' action='/passgen'>
    <input type='hidden' name='_token' value='{{ csrf_token() }}'>
    <input id='input-form' type='text' name='numOfWords'>
    <input type="checkbox" name = "number" id="number" value="number">number
    <label for="number"></label>
    <input type="checkbox" name = "symbol" id="symbol" value="symbol">symbol
    <label for="symbol"></label>
<p>

<br>
<br>
      <input type='submit' value='Submit'>
</p>

</form>
</div>
  </p>
@endif
@stop
