@extends('layouts.app')

@section('main')
    <div class="ui container">
        <a href="{{ route('links.create') }}" class="ui primary button">Novo</a>

        <table class="ui table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Título</th>
                    <th>Descrição</th>
                    <th>Url</th>
                    <th>Coleção</th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
                @foreach ($links as $link)
                    <tr>
                        <td>{{ $link->id }}</td>
                        <td>{{ $link->title }}</td>
                        <td>{{ $link->description }}</td>
                        <td>
                            <a href="{{ $link->url }}" target="_blank">
                                {{ $link->url }}
                            </a>
                        </td>

                        <td>

                            <span class="ui label">{{ $link->collection?->name }}</span>
                        </td>

                        <td class="right aligned">
                            <div class="ui compact small icon buttons">
                                <a href="{{ route('links.edit', $link)}}" class="ui blue button">
                                    <i class="pencil icon"></i>
                                </a>
                                <button onclick="document.getElementById('delete-{{ $link->id }}').submit()" class="ui red button">
                                    <i class="trash icon"></i>
                                </button>
                                <form action="{{ route('links.destroy', $link )}}" id="delete-{{ $link->id }}" method="post" style="display: none">
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