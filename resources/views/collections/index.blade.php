@extends('layouts.app')

@section('main')
    <div class="ui container">
        <a href="{{ route('collections.create') }}" class="ui primary button">Nova Coleção</a>

        <table class="ui table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>No. Links</th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
                @foreach ($collections as $collection)
                    <tr>
                        <td>{{ $collection->id }}</td>
                        <td>{{ $collection->name }}</td>
                        <td>{{ $collection->links->count() }} </td>
                        <td class="right aligned">
                            <div class="ui compact small icon buttons">
                                <a href="{{ route('collections.edit', $collection)}}" class="ui blue button">
                                    <i class="pencil icon"></i>
                                </a>
                                <button onclick="document.getElementById('delete-{{ $collection->id }}').submit()" class="ui red button">
                                    <i class="trash icon"></i>
                                </button>
                                <form action="{{ route('collections.destroy', $collection )}}" id="delete-{{ $collection->id }}" method="post" style="display: none">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </div>
                        </td>
                    </tr>                
                @endforeach
            </tbody>

        </div>
    </div>

@endsection