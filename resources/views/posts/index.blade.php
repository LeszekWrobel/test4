@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header "><h1>{{ __('Ogłoszenia post') }}</h1>
                     <div class="g-3 text-end">
                           <a class="btn btn-primary " href="{{ route('posts.create') }}" role="button">Dodaj</a>
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


                          <nav aria-label="Page navigation example">
                          <ul class="pagination justify-content-center">
                            <li class="page-item disabled">
                              <a class="page-link">Previous</a>
                            </li>
                            {{ $posts->links() }}
                            <li class="page-item">
                              <a class="page-link" href="#">Next</a>
                            </li>
                          </ul>
                        </nav>         
                </div>
            </div>
        </div>
    </div>
</div>
                            
@endsection
