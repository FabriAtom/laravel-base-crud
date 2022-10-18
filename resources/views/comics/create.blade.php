@extends('layouts.app')


@section('content')

    
<section>
    <div class="container">
        <h1>Edit a Comic</h1>
    </div>
    <div>
        <form action="{{route('comics.store')}}"method="POST">

            @csrf

            <p>
                <label for="title">Titolo</label>
                <input type="text" name="title" value=" {{old('title')}}" id='title' placeholder="insert title" >
            @error('title')
                <div class="alert alert-danger" style="color: red">{{$message}}</div>
            @enderror
            </p>
            <p>
                <label for="description">Descrizione</label>
                <input type="text"name="description" value=" {{old('description')}}" id='description' placeholder="insert a description">
                @error('description')
                <div class="alert alert-danger" style="color: red">{{$message}}</div>
            @enderror
            </p>
            <p>
                <label for="thumb">Copertina</label>
                <input type="text" name="thumb" value=" {{old('thumb')}}" id='thumb' placeholder="Insert a link img">
                @error('thumb')
                <div class="alert alert-danger" style="color: red">{{$message}}</div>
            @enderror
            </p>
            <p>
                <label for="price">Prezzo</label>
                <input type="text" name="price" value=" {{old('price')}}" id='price' placeholder="Insert a price">
                @error('price')
                <div class="alert alert-danger" style="color: red">{{$message}}</div>
            @enderror
            </p>
            <p>
                <label for="series">Serie</label>
                <input type="text" name="series" value=" {{old('series')}}" id='series' placeholder="Insert series">
                @error('series')
                <div class="alert alert-danger" style="color: red">{{$message}}</div>
            @enderror
            </p>
            <p>
                <label for="sale_date">Data d'uscita</label>
                <input type="date" name="sale_date" value=" {{old('sale_date')}}" id='sale_date' placeholder="Insert a launch date">
                @error('sale_date')
                <div class="alert alert-danger" style="color: red">{{$message}}</div>
            @enderror
            </p>
            <p>
                <label for="type">Tipo</label>
                <input type="text"name="type" value=" {{old('type')}}" id='type' placeholder="Inserisci un genere">
                @error('type')
                <div class="alert alert-danger" style="color: red">{{$message}}</div>
            @enderror
            </p>
            <p>
                <input type="submit"value="Salva">
            </p>
        </form>
    </div>
    
</section>

@endsection