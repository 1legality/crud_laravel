@extends('layouts.app')

@section('content')

    <div class="container" xmlns="http://www.w3.org/1999/html">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        What's on your mind?
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/posts') }}">
                            {{ csrf_field() }}

                            {{--<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                --}}{{--<label for="email" class="col-md-4 control-label">E-Mail Address</label>--}}{{--

                                <div class="col-md-6">

                                </div>
                            </div>--}}

                            <textarea id="text" type="text" class="form-control" name="text" value="{{ old('text') }}" required autofocus></textarea></br>

                            @if ($errors->has('text'))
                                <div class="panel panel-danger text-center">
                                    <div class="panel-heading">{{ $errors->first('text') }}</div>
                                </div>
                                {{--<span class="help-block">
                                        <strong>{{ $errors->first('text') }}</strong>
                                </span>--}}
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
                <div class="panel panel-primary text-center">
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
                            {{$post->created_at->toDayDateTimeString()}}
                        @else
                            <i>No date provided</i>
                        @endif
                        <div class="pull-right">
                            <form class="form-horizontal" role="form" method="POST" action="{{ url('/posts/' . $post->id) }}">
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-default">X</button>
                            </form>
                        </div>
                        <div class="panel-body">{{$post->text}}</div>
                        <a href="/posts/{{$post->id}}">view comments</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
@endsection