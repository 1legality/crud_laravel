@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default text-center">
                    <div class="panel-heading"><h3>All yours awesome posts</h3></div>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
@endsection