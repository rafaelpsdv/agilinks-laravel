@extends('layouts.app')


@section('main')
    <div class="ui text container" style="padding-top: 5rem">
        <div class="ui center aligned grid">
            <div class="ui eight wide column">
                <div class="ui left aligned segment">
                    <h2 class="ui header">Login</h2>

                    <form action="{{ route('login')  }}" method="post" class="ui form">
                            @csrf
                            <x-text-input type="email" name="email" label="Email" />
                            <x-text-input type="password" name="password" label="Senha" />
                            <button type="submit" class="ui primary fluid button">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection