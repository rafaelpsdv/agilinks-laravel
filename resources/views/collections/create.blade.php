@extends('layouts.app')

@section('main')
<div class="ui text container">

    <form action="{{ route('collections.store')}}" method="POST" class="ui form">
        @csrf
        
        <div class="field">
            <label for="name_id">Nome</label>
            <input type="text" name="name" id="name_id" value="{{ old('name')}}">
            @error('name')
                <span class="ui red text">{{ $message }}</span>
            @enderror
        </div>
        <button type="submit" class="ui primary button">
            Salvar  
        </button>
    </form>
</div>
@endsection