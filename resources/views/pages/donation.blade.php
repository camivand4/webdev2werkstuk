@extends('layout3')

@section('title')
    Donation
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
            <a class="donate" href="{{ route('makePayment')}}">Donate</a>
        </div>
    </div>
@endsection
