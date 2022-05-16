@extends('pets.layout')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 style="text-align:center;margin-top:20px;">Edit Pet #<span style="color:red;">{{$pet->id}}</span></h2>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Warning!</strong> Please check input field code<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('pets.update',$pet->id) }}" method="POST">
        @csrf
        @method('PUT')

         <div class="row" style="padding:50px;">
            <div class="col-xs-12 col-sm-12 col-md-12" style="padding-left:350px;padding-right:350px;">
                <div class="form-group">
                    <strong>Pet Name:</strong>
                    <input type="text" name="name" value="{{ $pet->name }}" class="form-control" placeholder="" required>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12" style="padding-left:350px;padding-right:350px;">
                <div class="form-group">
                    <strong>Pet Type:</strong>
                    <input type="text" name="type" value="{{ $pet->type }}" class="form-control" placeholder="" required>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12" style="padding-left:350px;padding-right:350px;">
                <div class="form-group">
                    <strong>Pet Owner:</strong>
                    <input type="text" name="owner" value="{{ $pet->owner }}" class="form-control" placeholder="" required>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12"  style="padding-left:350px;padding-right:350px;">
                <div class="form-group">
                    <strong>Owner Address:</strong>
                    <input type="text" name="owner_address" value="{{ $pet->owner_address }}" class="form-control" placeholder="" required>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <a class="btn btn-secondary" href="{{ route('pets.index') }}"> Back</a>
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
        
    </form>
