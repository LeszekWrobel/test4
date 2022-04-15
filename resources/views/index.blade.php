@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header "><h1>{{ __('Ogłoszenia ind') }}</h1>
                     <div class="g-3 text-end">
                           <a class="btn btn-primary " href="{{ route('login') }}" role="button">Dodaj</a>
                     </div>
                </div>

                <div class="card-body">
                    @foreach($posts as $post)
    <ul>
        <li>{{$post}}</li>
        <li>Tytuł ogłoszenia : {{$post->title}}</li>
        <li>Opis : {{$post->description}}</li>
        <li>Dodano dnia : {{$post->created_at}}</li>
    </ul>
    @endforeach               
                </div>{{$posts->links()}}
            </div> 
        </div>
    </div>
</div>
@endsection
