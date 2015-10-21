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
<h1 class='for-title' >Enter Number of paragraphs</h1>
<div class='input-text'>
<form method='post' action='/lorem'>
    <input type='hidden' name='_token' value='{{ csrf_token() }}'>
    <input id='input-form' type='text'  name='numOfParagraphs'>
    <input type='submit' value='Submit'>
</form>
</div>
@endif
<br>

@stop
