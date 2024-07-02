@extends('back.layouts.pages-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Alle tasks')
@section('content')
<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <h2 class="page-title">
                    Alle Taks
                </h2>
            </div>
        </div>
    </div>
</div>
@livewire('all-posts')
@endsection

@push('scripts')
<script>
    window.addEventListener('deletePost', function(event) {
        swal({
            title: event.detail.title,
            imageWidth: 48,
            imageHeigth: 48,
            html: event.detail.html,
            showCloseButton: true,
            showCancelButton: true,
            cancelButtonText: 'Annuleren',
            confirmButtonText: 'Ja, vewijder',
            cancelButtonColor: '#d33',
            confirmButtonColor: '#3085d6',
            width: 300,
            allowOutsideClick: false
        }).then(function(result) {
            if (result.value) {
                window.livewire.emit('deletePostAction', event.detail.id);
            }
        });
    });
</script>
@endpush