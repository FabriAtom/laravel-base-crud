@extends('layouts.app')

@section('content')

    
<div class="container_show">
    <h1>{{$comic->title}}</h1>
    <div class="description">
        <ul>
            <li>
               <span>Description</span> <p>{{$comic->description}}</p>
            </li>
            <li>
                <p>{{$comic->thumb}}</p>
            </li>
            <li>
               <span>Price</span> <p>{{$comic->price}}</p>
            </li>
            <li>
                <span>Series</span>{{$comic->series}}
            </li>
            <li>
                <span>Sale date</span>{{$comic->sale_date}}
            </li>
            <li>
               <span>Type</span> {{$comic->type}}
            </li>
        </ul>
        
    </div>
</div>
<section>
    <div>
       <a href="{{route('comics.edit',$comic)}}">Edit comic</a>  

       {{-- <a href="{{ route('comics.edit',$comic->id) }}">Edit comic</a> 
       <form action="{{ route('comics.destroy',$comic->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="Elimina">  --}}
    </div>
</section>

@endsection