@extends('back.layouts.auth-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Wachtwoord vergeten')
@section('content')

<div class="page page-center">
    <div class="container container-tight py-4">
        <div class="text-center mb-4">
            <a href="." class="navbar-brand navbar-brand-autodark"><img src="./back/static/logo.svg" height="36" alt=""></a>
        </div>
        @livewire('author-forgot-form')
        <div class="text-center text-muted mt-3">
            Vergeet het, <a href="{{ route('auth.login')}}">stuur mij terug</a> naar het inlogscherm.
        </div>
    </div>
</div>

@endsection