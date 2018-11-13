@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>{{$title}}</h1>
        <p class="lead">This is the laravel application from "Laravel From Scratch" Youtube series</p>
        <p><a class="btn btn-lg btn-primary" href="/login" role="button">Login</a> <a class="btn btn-lg btn-success" href="/register" role="button">Register</a></p>
    </div>
    <div  class="text-center">
        <button type="button" class="btn btn-lg btn-primary">Primary</button>
        <button type="button" class="btn btn-lg btn-success">Success</button>
        <button type="button" class="btn btn-lg btn-info">Info</button>
        <button type="button" class="btn btn-lg btn-warning">Warning</button>
    </div>
@endsection

