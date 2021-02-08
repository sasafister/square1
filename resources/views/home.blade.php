@extends('layouts.app')

@section('content')
<div id="app">
    <home :loggedUser="{{ auth()->user() }}"/>
</div>
@endsection
