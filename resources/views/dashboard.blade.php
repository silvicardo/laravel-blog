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

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
