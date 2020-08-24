@extends('layout3')

@section('title')
    {{$title}}
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
@endsection
