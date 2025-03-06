@extends('layouts.app')

@section('main')
<div class="ui text container">

    <form action="{{ route('links.store')}}" method="POST" class="ui form">
        @csrf
        
        <div class="field">
            <label for="title_id">Título</label>
            <input type="text" name="title" id="title_id" value="{{ old('title')}}">
            @error('title')
                <span class="ui red text">{{ $message }}</span>
            @enderror
        </div>
        <div class="field">
            <label for="description_id">Descrição</label>
            <input type="text" name="description" id="description_id" value="{{ old('description')}}">
            @error('description')
                <span class="ui red text">{{ $message }}</span>
            @enderror
        </div>
        <div class="field">
            <label for="url_id">Url</label>
            <input type="url" name="url" id="url_id" value="{{ old('url')}}">
            @error('url')
                <span class="ui red text">{{ $message }}</span>
            @enderror
        </div>
        <button type="submit" class="ui primary button">
            Salvar  
        </button>
    </form>
</div>
@endsection