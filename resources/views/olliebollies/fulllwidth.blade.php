@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
                <h1 class="card-header">
                    {{ $olliebollie->title }}
                </h1>

                <blockquote>
                    {{ $olliebollie->intro }}
                </blockquote>

                <div>
                    {!! $olliebollie->content !!}
                </div>

        </div>
    </div>
</div>
