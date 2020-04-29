@extends('layout')

@section('content')
<div class="row">
    <div class="medium-12 large-12 columns">
      <h4>Nieuwe klant</h4>
      <form action="{{ route('clients.save') }}" method="post">
        @csrf
        <div class="medium-4  columns">
          <label>Titel</label>
          <select name="title">
            <option value="mr" selected="selected">Mr.</option>
            <option value="mw">Mw.</option>
            <option value="juf">Juf.</option>
            <option value="dr">Dr.</option>
          </select>
        </div>
        <div class="medium-4  columns">
          <label>Voornaam</label>
          <input name="firstname" type="text">
        </div>
        <div class="medium-4  columns">
          <label>Achternaam</label>
          <input name="lastname" type="text">
        </div>
        <div class="medium-8  columns">
          <label>Adres</label>
          <input name="address" type="text">
        </div>
        <div class="medium-4  columns">
          <label>Postcode</label>
          <input name="postal_code" type="text">
        </div>
        <div class="medium-4  columns">
          <label>Stad</label>
          <input name="city" type="text">
        </div>
        <div class="medium-4  columns">
          <label>Provincie</label>
          <input name="province" type="text">
        </div>
        <div class="medium-12  columns">
          <label>E-mail</label>
          <input name="email" type="text">
        </div>
        <div class="medium-12  columns">
          <input value="BEWAAR" class="button success hollow" type="submit">
        </div>
        <div class="medium-12 columns">
            @if($errors->any())
            <div class="callout error">
                <ul>
                    @foreach($errors->all() as $error)
                    <li>
                        {{ $error }}
                    </li>
                    @endforeach
                </ul>
            </div>
            @endif
        </div>
      </form>
    </div>
  </div>
@endsection
