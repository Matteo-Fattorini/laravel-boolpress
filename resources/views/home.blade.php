@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row ">
            <div class="col-8 offset-2 mt-5 d-flex flex-wrap justify-content-center ">
                @foreach ($posts as $post)


                    <div class="card mr-3 mb-3" style="width: 18rem;">
                        <div class="card-body">
                            <img width="50px" src="{{ asset($post->url) }}" alt="">
                            <h5 class="card-title">{{ $post->title }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">
                                {{ $post->getUser->name }}
                            </h6>
                            <p class="card-text">{{ $post->details }}</p>

                            <form method="GET" action="{{ route('post.edit', $post) }}">
                                @csrf
                                @method("GET")
                                <button type="submit" @if (!\Auth::check()) disabled @endif class="btn btn-warning float-left mr-4">Modifica</button>
                            </form>

                            <form method="POST" action="{{ route('post.destroy', $post) }}">
                                @csrf
                                @method("delete")
                                <button type="submit" @if (!\Auth::check()) disabled @endif onclick="return confirm('Sei sicuro di volerlo eliminare?')"
                                    class="btn btn-danger float-left">Elimina</button>
                            </form>



                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
