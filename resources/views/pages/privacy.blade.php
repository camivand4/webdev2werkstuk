@extends('layout3')

@section('title')
    {{$pages[0]->title}}
@endsection

@section('content')
<div class="content">
    <div class="image">
        <img class="actualimage" src="{{$image}}">
    </div>
    <div class="message">
        {{$pages[0]->message}}
    </div>
</div>
@endsection

