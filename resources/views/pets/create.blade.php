@extends('pets.layout')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2 style="text-align:center;margin-top:20px;">Insert New Pet</h2>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Warning!</strong> Please check your input code<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('pets.store') }}" method="POST">
    @csrf
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12" style="padding-left:350px;padding-right:350px;">
            <div class="form-group">
                <strong>Pet Name:</strong>
                <input type="text" name="name" class="form-control" placeholder="" required>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12" style="padding-left:350px;padding-right:350px;">
            <div class="form-group">
                <strong>Pet Type:</strong>
                <input type="text" name="type" class="form-control" placeholder="" required>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12" style="padding-left:350px;padding-right:350px;">
            <div class="form-group">
                <strong>Pet Owner:</strong>
                <input type="text" name="owner" class="form-control" placeholder="" required>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12" style="padding-left:350px;padding-right:350px;">
            <div class="form-group">
                <strong>Owner Address:</strong>
                <input type="text" name="owner_address" class="form-control" placeholder="" required>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <a class="btn btn-secondary" href="{{ route('pets.index') }}">Back</a>
                <button type="submit" class="btn btn-primary">Insert</button>
        </div>
    </div>
            

</form>