@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">What's on your mind?</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/posts') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                {{--<label for="email" class="col-md-4 control-label">E-Mail Address</label>--}}

                                <div class="col-md-6">

                                </div>
                            </div>

                            <textarea id="text" type="text" class="form-control" name="text" value="{{ old('text') }}" required autofocus></textarea></br>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif

                            <div class="form-group">
                                <div class="col-md-8">
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
                        <label for="created_at" class="control-label">Created at</label>
                        @if ($post->created_at != null)
                            {{$post->created_at->toDayDateTimeString()}}<br>
                        @else
                            <i>No date provided</i><br>
                        @endif
                        {{$post->text}}<br>
                        <a href="/posts/{{$post->id}}">view comments</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
@endsection