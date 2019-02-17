@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>

                    @endif
                    <div>
                      <a href="/posts/create/" class="btn btn-lg btn-primary">Create Post</a>
                      <h3 class="mt-5">You are logged in!</h3>
                    </div>

                    {{-- solo se l'array posts passato dalla index function di
                        DashboardController contiene almeno un post mostriamo la table--}}
                    @if(count($posts) > 0)
                    <table class="table">
                      <thead class="thead-light">
                        <tr>
                          <th scope="col">Title</th>
                          <th scope="col"></th>
                          <th scope="col"></th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($posts as $post)
                          <tr>
                            <th scope="row">{{ $post->title }}</th>
                            <td><a href="/posts/{{$post->id}}/edit" class="btn btn-success">Edit post</a></td>
                            <td>
                              {{-- FORM PER LA CANCELLAZIONE, DELETE REQUEST --}}
                              {{-- Richiamo alla funzione destroy in PostsController, mandangogli l'id --}}
                              {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method'=> 'POST', 'class' => 'float-right']) !!}

                                {{-- per effetturare una DELETE request laravel fornisce questo metodo --}}
                                {{ Form::hidden('_method', 'DELETE')}}
                                {{ Form::submit('Delete this post',['class' => 'btn btn-danger'])}}

                            </td>
                          </tr>
                        @endforeach
                      </tbody>
                    </table>
                  @else
                    <p>You have no posts</p>
                  @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
