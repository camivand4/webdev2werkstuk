@extends('layout3')

@section('title')
    Mailchimp
@endsection

@section('content')
    <div  class="formcontact">
        <form action="{{route('mailchimp.save')}}" method="post">
            @csrf
            <div class="form-group inchimp">
                <label for='email'>Email</label>
                <input id="email" name="email" type="text" class="form-control inchimpinput">
            </div>
            <div class="form-group inchimp">
                <input type='submit' class="form-control" class="inchimpinput">
            </div>
        </form>
    </div>
@endsection

