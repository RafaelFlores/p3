@extends('layouts.master')

@section('title')
LoremIpsum Generator
@stop

@section('head')
The head
@stop

@section('content')


@if(isset($numOfParagraphs))
<?php
$generator = new Badcow\LoremIpsum\Generator();
$paragraphs = $generator->getParagraphs($numOfParagraphs);
echo implode('<p>', $paragraphs);
?>
@else
<br>
<br>
<h3 class='for-title' >Enter Number of paragraphs (Max: 99)</h3>
@if(count($errors) > 0)
<ul class="for-title">
  The following errors occured:
  @foreach ($errors->all() as $error)
  <li>{{ $error }}</li>
  @endforeach
</ul>
@endif
<div class='input-text'>
  <form method='post' action='/lorem'>
    <input type='hidden' name='_token' value='{{ csrf_token() }}'>
    <input id='input-form' type='text'  name='numOfParagraphs'>
    <p>
      <br>
      <br>
      <br>
      <input type='submit' value='Submit'>
    </p>

  </form>
</div>
@endif
<br>

@stop
