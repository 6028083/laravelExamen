@extends('back.layouts.pages-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Instellingen')
@section('content')

<div class="row-align-item-center">
    <div class="col">
        <h2 class="page-title">
            Instellingen
        </h2>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <ul class="nav nav-tabs card-header-tabs" data-bs-toggle="tabs" role="tablist">
            <li class="nav-item" role="presentation">
                <div style="position: absolute; top: 0; bottom: 0; left: 0; width: 2px; background-color: #000;"></div>
                <a href="#tabs-home-8" class="nav-link active" data-bs-toggle="tab" aria-selected="true" role="tab">Algemene instellingen</a>
            </li>
            <li class="nav-item" role="presentation">
                <a href="#tabs-profile-8" class="nav-link" data-bs-toggle="tab" aria-selected="false" tabindex="-1" role="tab">Logo & Favicon</a>
            </li>
        </ul>
    </div>

    <div class="card-body">
        <div class="tab-content">
            <div class="tab-pane fade active show" id="tabs-home-8" role="tabpanel">
                <div>
                    @livewire('author-general-settings')
                </div>
            </div>

            <div class="tab-pane fade" id="tabs-profile-8" role="tabpanel">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Blog logo instellen</h3>
                        <div class="mb-2 img-thumbnail" id="logo-image-preview" data-ijabo-default-img="{{ \App\Models\Setting::find(1)->blog_logo }}">
                        </div>
                    </div>
                    <form action="{{ route('auth.change-blog-logo') }}" method="post" id="changeBlogLogoForm">
                        @csrf
                        <div class="mb-2">
                            <input type="file" name="blog_logo" class="form-control">
                        </div>
                        <button class="btn btn-primary">Wijzig logo</button>
                    </form>
                </div>
            </div>

            <div class="tab-pane fade" id="tabs-activity-8" role="tabpanel">

            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script>
    $('input[name="blog_logo"]').ijaboViewer({
        preview: '#logo-image-preview',
        imageShape: 'rectangular',
        allowedExtensions: ['jpg', 'jpeg', 'png'],
        onErrorShape: function(message, element) {
            alert(message);
        },
        oninvalidType: function(message, element) {
            alert(message);
        },
        onSuccess: function(message, element) {

        }
    });

    $('#changeBlogLogoForm').submit(function(e) {
        e.preventDefault();
        var form = this;
        $.ajax({
            url: $(form).attr('action'),
            method: $(form).attr('method'),
            data: new FormData(form),
            processData: false,
            dataType: 'json',
            beforeSend: function() {},
            success: function(data) {
                if (data.status == 1) {
                    toastr.success(data.msg);
                    $(form)[0].reset();
                } else {
                    toastr.error(data.msg);
                }
            }
        })
    })
</script>
@endpush