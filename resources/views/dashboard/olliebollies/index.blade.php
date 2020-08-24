@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-1">
                <a class="btn" href="{{ route('dashboard.olliebollies.create')}}">Pagina toevoegen</a>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Titel</th>
                            <th>Intro</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($olliebollies as $olliebollie)
                        <tr>
                            <td>
                                {{$olliebollie->title}}
                            </td>
                            <td>
                                {{ Str::limit($olliebollie->intro,50)}}
                            </td>
                            <td>
                                <a href='{{ route("dashboard.olliebollies.edit", $olliebollie->id) }}' class="btn btn-success">
                                    edit
                                </a>
                                <form action="{{ route('dashboard.olliebollies.delete') }}" method="post">
                                    @csrf
                                    <input type='hidden' name="olliebollie_id" value='{{ $olliebollie->id }}'>
                                    <button class="btn btn-danger">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection
