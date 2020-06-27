@extends('layouts.app')

@section('content')
        <h1>index</h1>
        <p>This is the index page</p>
        @if (count($images) >= 1)
         @foreach ($images as $image)
            <div class="well">
                <div class="row">
                <img style="width:100%" src="/picpoolagain/public/storage/cover_images/{{$image->cover_image}}">
                </div>
            </div>
            {!!Form::open(['action' => ['Imagescontroller@destroy', $image->id], 'method' => 'POST', 'enctype' => 'multipart/form-data'])!!}
               {{Form::hidden('_method', 'DELETE')}}   
               {{Form::submit('Delete')}}
            {!!Form::close()!!}
         @endforeach   
        @else
           <p>no image found</p> 
        @endif
@endsection