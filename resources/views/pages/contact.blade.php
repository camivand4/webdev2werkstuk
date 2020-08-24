@extends('layout3')

@section('title')
    Contact
@endsection

@section('content')
<form action="" method="post" class="formcontact">
    @csrf

    <input type='text' name="name" id="name" placeholder="naam" class="incontact">
    <input type='email' name="email" id="email" placeholder="E-mail" class="incontact">
    <input type='text' name="onderwerp" id="onderwerp" placeholder="onderwerp" class="incontact">
    <textarea name="message" id="content" cols="30" rows="10" placeholder='bericht' class="incontact"></textarea>
    <button type='submit' class="incontact">verzend</button>
</form>
@endsection


