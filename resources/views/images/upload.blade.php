@extends('layouts.app')

@section('content')
        <h1>Upload Pictures</h1>
        {!! Form::open(['action' => 'Imagescontroller@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
            <div class="form-group">
                {{Form::file('cover_image')}}
            </div>
            {{Form::submit('Submit')}}
        {!! Form::close() !!}
@endsection