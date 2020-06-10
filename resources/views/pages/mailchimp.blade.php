
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">

                    <h1>NewsLetter</h1>

                    <form action="{{route('mailchimp.save')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for='email'>Email</label>
                            <input id="email" name="email" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type='submit' class="form-control">
                        </div>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

