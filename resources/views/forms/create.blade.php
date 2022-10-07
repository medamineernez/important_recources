@extends('layouts.app')

@section('content')
    <div>
        <form action="{{route('forms.index')}}">
            <button type="submit" class="btn btn-primary flex-md-row">go back</button>
        </form>
    </div>
    <div class="container">
        <form action="{{route('forms.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">title</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="title">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">name</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="name">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">type</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="type">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">rules</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="rules">
            </div>
            <div class="form-group mt-2">
                <button type="submit" class="btn btn-primary">Submit</button>

            </div>


        </form>
    </div>

@endsection

