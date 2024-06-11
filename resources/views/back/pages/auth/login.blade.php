@extends('back.layouts.auth-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Inloggen')
@section('content')

<div class="page page-center">
    <div class="container container-tight py-4">
        <div class="text-center mb-4">
            <a href="." class="navbar-brand navbar-brand-autodark"><img src="https://i.postimg.cc/cJq47vHn/burak-high-resolution-logo-black-transparent.webp" height="36" alt=""></a>
        </div>
        @livewire('author-login-form')
    </div>
</div>
@endsection