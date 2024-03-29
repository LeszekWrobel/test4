@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h1>Dodaj ogłoszenie HOME</h1></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <form class="row m-3" method="POST" action="/posts" enctype="multipart-data">
                        {{csrf_field()}}

                            <div class="form-group row">
                                <label for="title" class="col-md-4 col-form-label">Tytuł</label>

                                <input id="title" type="text"
                                class="form-control{{ $errors->has('title') ? ' is-invalid' : ''}}" name="title" required>

                                @if ($errors->has('title'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group row">
                                <label for="textarea" class="col-md-4 col-form-label">Opis</label>

                                <textarea class="form-control" name="description" id="floatingTextarea2" style="height: 100px"  required></textarea>
  
                                <input type="hidden" name="user_id" value="">

                                @if ($errors->has('description'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group row g-2">
                                <label form="image">Dodaj zdjęcie</label>
                                <input type="file" id="image" name="image">
                            </div>

                            <div class="g-3">
                                <button class="btn btn-primary" type="submmit">Dodaj</button>
                            </div>
                        </form>

                
            </div>
        </div>
    </div>
</div>
@endsection
