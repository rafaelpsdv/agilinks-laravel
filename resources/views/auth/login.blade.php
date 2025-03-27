@extends('layouts.app')


@section('main')
    <div class="ui text container">
        <form action="{{ route('login')  }}" method="post" class="ui form">
                @csrf

                <x-text-input name="password" label="Senha" />

        </form>
    </div>

@endsection