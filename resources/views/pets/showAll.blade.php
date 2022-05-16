@extends('pets.layout')
    @foreach ($pets as $pet)
    <div class="container" style="padding-top:100px;font-size:20px;padding-left:25%;">
        <h2 style="margin-top:20px;font-size:80px;">Pet #<span style="color:red;">{{$pet->id}}</span></h2>
        <p><strong>Pet Name:</strong> {{ $pet->name }} </p>
        <p><strong>Pet Type:</strong> {{ $pet->type }}</p>
        <p><strong>Pet Owner:</strong> {{ $pet->owner }}</p>
        <p><strong>Owner Address:</strong> {{ $pet->owner_address }}</p>
    </div>
    @endforeach
    <div class="col-xs-12 col-sm-12 col-md-12 text-center" style="margin-top:30px;margin-bottom:10px;">
        <a class="btn btn-primary" href="{{ route('pets.index') }}"> Back</a>
    </div>