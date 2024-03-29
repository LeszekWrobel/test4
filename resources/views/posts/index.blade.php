@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header "><h1>{{ __('Ogłoszenia') }}</h1>
                     <div class="g-3 text-end">
                     {{'message'}}
                           <a class="btn btn-primary " href="{{ route('posts.create') }}" role="button">Dodaj ogłoszenie</a>
                     </div>
                </div>

                <div class="card-body">
                   
                        @foreach($posts as $post)

                        <div class="card mb-3" style="">
                          <div class="row g-0">
                            <div class="col-md-4">
                               <img src="{{$post->image}}" class="img-thumbnail w-50" alt="...">
                            </div>
                            <div class="col-md-8">
                              <div class="card-body">
                                <h3 class="card-title">{{$post->title}}</h3>
                                
                                <p class="card-text"><small class="text-muted">Dodano : {{$post->updated_at}} <br/>
                                Ostatnia aktualizacja : {{$post->created_at}}</small></p>
                                <a href="posts/{{$post->id}}" class="btn btn-outline-dark btn-sm shadow p-1 mb-5 bg-body rounded ">Zobacz szczegóły</a>
                              </div>
                            </div>
                          </div>
                        </div>

                        @endforeach

                        <nav aria-label="Page navigation example">
                          <ul class="pagination justify-content-center">                         
                                {{ $posts->links() }}
                          </ul>
                        </nav>      
                </div>
            </div>
        </div>
    </div>
</div>
                            
@endsection
