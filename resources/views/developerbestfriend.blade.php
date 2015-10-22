@extends('layouts.master')

@section('title')
    Developer BF
@stop

@section('head')

@stop

@section('content')

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
  <ul class="actions">
    <li><a href="/lorem" class="button special">LoremIpsum Generator</a></li>
    <li><a href="/randomuser" class="button">Random User Generator</a></li>
  </ul>


@stop
