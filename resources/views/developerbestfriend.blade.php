@extends('layouts.master')

@section('title')
    Developer BF
@stop

@section('head')

@stop

@section('content')
<h3>Developer's Best Friend</h3>
  <p>The site where you can find the friendly resourses for the developer</p>
  <p>
    You can select form our tools:
  </p>
  <p>
    Random User Generator: Get random name and adress data for users. <br>You can select
    up to three options: E-mail, username or password
  </p>
  <p>
    LoremIpsum Generator: Generate up to 99 paragraphs of random text to fill your needs.
  </p>
  <p>
    xkcd Password Generator: Generate easy to remember passwords <br> You choose to add a number and/or a symbol.
  </p>
  <ul class="actions">
    <li><a href="/lorem" class="button">LoremIpsum Generator</a></li>
    <li><a href="/randomuser" class="button special">Random User Generator</a></li>
    <li><a href="/passgen" class="button">xkcd Password Generator</a></li>
  </ul>


@stop
