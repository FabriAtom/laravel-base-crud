@extends('layouts.app')


@section('content')

    
<section>
    <div class="container">
        <h1>Create a comic</h1>
    </div>
    <div>
        <form action="{{route('comics.update',$comic)}}" method="POST">

            @csrf

            @method('PUT')

            <p>
                <label for="title">Title</label>
                <input type="text" name="title" value=" {{old('title',$comic->name)}}" id='title' placeholder="insert title" >
            @error('title')
                <div class="alert alert-danger" style="color: blue">{{$message}}</div>
            @enderror
            </p>
            <p>
                <label for="description">description</label>
                <input type="text"name="description" value=" {{old('description',$comic->description)}}" id='description' placeholder="insert description">
                @error('description')
                <div class="alert alert-danger" style="color: blue">{{$message}}</div>
            @enderror
            </p>
            <p>
                <label for="thumb">Cover</label>
                <input type="text" name="thumb" value=" {{old('thumb',$comic->thumb)}}" id='thumb' placeholder="insert link img">
                @error('thumb')
                <div class="alert alert-danger" style="color: blue">{{$message}}</div>
            @enderror
            </p>
            <p>
                <label for="price">Price</label>
                <input type="text" name="price" value=" {{old('price',$comic->price)}}" id='price' placeholder="insert price">
                @error('price')
                <div class="alert alert-danger" style="color: blue">{{$message}}</div>
            @enderror
            </p>
            <p>
                <label for="series">Series</label>
                <input type="text" name="series" value=" {{old('series',$comic->series)}}" id='series' placeholder="insert series">
                @error('series')
                <div class="alert alert-danger" style="color: blue">{{$message}}</div>
            @enderror
            </p>
            <p>
                <label for="sale_date">Sale date</label>
                <input type="date" name="sale_date" value=" {{old('sale_date',$comic->sale_date)}}" id='sale_date' placeholder="insert a sale date">
                @error('sale_date')
                <div class="alert alert-danger" style="color: blue">{{$message}}</div>
            @enderror
            </p>
            <p>
                <label for="type">type</label>
                <input type="text"name="type" value=" {{old('type',$comic->type)}}" id='type' placeholder="enter a type">
                @error('type')
                <div class="alert alert-danger" style="color: blue">{{$message}}</div>
            @enderror
            </p>
            <p>
                <input type="submit"value="Salva">
            </p>
        </form>
    </div>
    
</section>

@endsection