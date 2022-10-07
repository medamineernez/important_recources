@extends('layouts.app')

@section('content')
<div>
    <form action="{{route('forms.create')}}" >
        <button type="submit" class="btn btn-primary">add</button>
    </form>
</div>
    <div class="container">
        @foreach($forms as $form)
            <h1> {{$form->name}}  </h1>
            <h1> {{$form->title}}  </h1>
            <h1> {{$form->type}}  </h1>
            <h1> {{$form->rules}}  </h1>
            <hr>
        @endforeach
    </div>


@endsection
