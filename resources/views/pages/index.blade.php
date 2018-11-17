@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>{{$title}}</h1>
        <p class="lead">This is the laravel application from "Laravel From Scratch" Youtube series</p>
        <p><a class="btn btn-lg btn-primary" href="/login" role="button">Login</a> <a class="btn btn-lg btn-success" href="/register" role="button">Register</a></p>
    </div>
    <div  class="text-center">
        <button type="button" class="btn btn-lg btn-primary">Instagram</button>
        <button type="button" class="btn btn-lg btn-danger">Facebook</button>
        <button type="button" class="btn btn-lg btn-info">Twitter</button>
        <button type="button" class="btn btn-lg btn-warning">Linked-In</button>
        <button type="button" class="btn btn-lg btn-success">Git Hub</button>
    </div>
@endsection

