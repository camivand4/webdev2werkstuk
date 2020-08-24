@extends('layouts.app')

@section('scripts')
<script>
    tinymce.init({
        selector: "#content",
        height: "480"
    });
</script>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-1">
                Edit page
            </div>
        </div>
        <div class="row">
            <div class="col">

                <form action="{{ route('dashboard.olliebollies.edit', $olliebollie->id) }}" method="post">
                    @csrf

                    <input type='hidden' name="id" value='{{ $olliebollie->id }}'>

                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" value="{{ $olliebollie->title }}" name="title" class="form-control" id="title" placeholder="place title here">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Active</label>
                        <select class="form-control" id="active" name="active">
                            <option  @if($olliebollie->active) selected @endif value="1">Page visible</option>
                            <option @if(!$olliebollie->active) selected @endif value="0">Pagina invisible</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="intro">Intro</label>
                        <textarea class="form-control" id="intro" name="intro" rows="5">{{ $olliebollie->intro }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="content">Content</label>
                        <textarea id="content" name="content">{{ $olliebollie->content }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="Template">Template</label>
                        <input type="text" value="{{ $olliebollie->Template }}" name="Template" class="form-control" id="Template" placeholder="place template here">
                    </div>

                    <button class="btn btn-succes" type='submit'>
                        Confirm
                    </button>
                </form>
            </div>

        </div>
    @endsection
