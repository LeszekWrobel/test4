@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h1>Edycja ogłoszenia</h1></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                        <form class="row m-3" method="POST" action="/posts/{{$post->id}}" enctype="multipart-data">
                            @method('PATCH')
                            @csrf                     

                            <div class="form-group row">
                                <label for="title" class="col-md-4 col-form-label">Tytuł</label>

                                <input id="title" type="text" value="{{$post->title}}"
                                class="form-control{{ $errors->has('title') ? ' is-invalid' : ''}}" name="title" required>

                                @if ($errors->has('title'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group row">
                                <label for="textarea" class="col-md-4 col-form-label">Opis</label>

                                <textarea class="form-control" name="description" id="floatingTextarea2" style="height: 100px"  required>{{$post->description}}" </textarea>
  
                                <input type="hidden" name="user_id" value="">

                                @if ($errors->has('description'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="g-3 d-grid gap-2 d-md-block">
                              <button class="btn-sm btn-primary" type="submmit">Zapisz zmiany</button>
                                
                            
                        </form>
                        <form method="POST" action="/posts/{{$post->id}}">
                                @method('DELETE')
                                @csrf
                                    <button class="btn-sm btn-danger" type="submmit">Usuń ogłoszenie</button>
                        </form>
                    

                
            </div>
        </div>
    </div>
</div>
@endsection
