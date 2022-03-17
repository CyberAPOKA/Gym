@extends('common.master')
@section('content')
<div style="margin-top: 20%">
    <form action="{{ route('login.action') }}" method="POST">
    @csrf
    <input type="text" name="email">
    <input type="password" name="password">
    <button type="submit">Entrar</button>
    </form>
</div>
@endsection
