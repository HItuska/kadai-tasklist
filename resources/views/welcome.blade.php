@extends('layouts.app')

@section('content')
    @if (Auth::check())
        {{ Auth::user()->name }}
        <div class="row">
            <div class="col-sm-8">

                @include('tasks.index')
            </div>
        </div>
    @else
        <div class="center jumbotron">
            <div class="text-center">
                <h1>to nobles wlcome to the task</h1>
                {{-- ユーザ登録ページへのリンク --}}
                {!! link_to_route('signup.get', 'Sign up now!', [], ['class' => 'btn btn-lg btn-primary']) !!}
            </div>
        </div>
    @endif
@endsection