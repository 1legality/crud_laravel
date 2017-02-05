@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">What's on your mind?</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/posts/create') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('text') ? ' has-error' : '' }}">
                                {{--<label for="email" class="col-md-4 control-label">E-Mail Address</label>--}}

                                    {{--<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>--}}
                                <textarea class="form-control" rows="5" id="text"></textarea>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                            </div>
                            <div class="form-group">
                                <div class="col-md-8 ">
                                    <button type="submit" class="btn btn-primary">
                                        Post
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default text-center">
                    <div class="panel-heading"><h3>{{$user->name}}'s awesome posts</h3></div>
                </div>
            </div>
        </div>
    </div>
    @foreach($posts as $post)
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    {{--<div class="panel-heading">Your posts</div>--}}
                    <div class="panel-body">
                        <label for="created_at" class="control-label">Created at</label>{{$post->created_at}}<br>
                        {{$post->text}}<br>
                        <a href="/posts/{{$post->id}}">view comments</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
@endsection