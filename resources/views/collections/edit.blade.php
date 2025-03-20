@extends('layouts.app')

@section('main')   
    <div class="ui text container">

        <form action="{{ route('collections.update', $collection )}}" method="POST" class="ui form">
            @csrf
            @method('PATCH')

            <div class="field">
                <label for="name_id">Nome</label>
                <input type="text" name="name" id="name_id" value="{{ $collection->name }}">
                @error('name')
                    <span class="ui red text">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit" class="ui primary button">
                Atualizar 
            </button>
        </form>
    </div>

@endsection