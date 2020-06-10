@extends('layout2')

@section('head')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{$title}}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700i" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
@endsection

@section('navbar')
<body>
    <nav role='navigation' id="mainnav">
    <br><br><br>
  <ul class="gap">
    <li><a href="/">Home</a></li>
    {{-- <li><a href="test">Test</a></li> --}}
    <li><a href="test2">Test2</a></li>
    {{-- <li><a href="test3">Test3</a></li> --}}
    <li><a href="contact">Contact</a></li>
    <li><a href="mailchimp">Mailchimp</a></li>
    <li><a href="donation">Donation</a></li>

  </ul>
   <ul class="navbar-nav ml-auto logout">
        <!-- Authentication Links -->
        @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @endif
        @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        @endguest
    </ul>
</nav>

<div class="hamb">
  <a href="#"><i class="fa fa-bars"></i></a>
</div>

<canvas id="bubble"></canvas>
@endsection

@section('content')
    <div class="content">
        <div class="image">
            <img class="actualimage" src="{{$image}}">
        </div>
        <div class="title">
            {{$title}}
        </div>
        <div class="message">
            {{$message}}
        </div>
    </div>
    <div class="donationprice">
        <div class="plusmindiv">
            <div class="plusminbuttons min" onclick="min()">-</div>
            <input id="price" value="0">
            <div class="plusminbuttons plus" onclick="plus()">+</div>
        </div>
        <div>
            <div class="donate ">Donate</div>
        </div>
    </div>
@endsection

@section('end')
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.10.3/jquery-ui.js"></script>
<script src="{{asset("js/script.js")}}"></script>
</body>
@endsection
