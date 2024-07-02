@extends('back.layouts.pages-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Nieuwe task toevoegen')
@section('content')

<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <h2 class="page-title">
                    Voeg nieuwe blogs toe
                </h2>
            </div>
        </div>
    </div>
</div>

<form action="{{ route('posts.create-post') }}" method="post" id="addPostForm" enctype="multipart/form-data">
    @csrf
    <div class="card">
        <div style="position: absolute; top: 0; bottom: 0; left: 0; width: 2px; background-color: #000;"></div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-9">
                    <div class="mb-3">
                        <label class="form-label">Berichttitel</label>
                        <input type="text" class="form-control" name="post_title" placeholder="Voer de berichttitel in">
                        <span class="text-danger error-text post_title_error"></span>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Plaats inhoud</label>
                        <textarea class="ckeditor form-control" name="post_content" rows="6" placeholder="inhoud" id="post_content"></textarea>
                        <span class="text-danger error-text post_content_error"></span>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="mb-3">
                        <label class="form-label">Deadline</label>
                        <input type="date" class="form-control" name="post_deadline">
                        <span class="text-danger error-text post_deadline_error"></span>
                    </div>

                    <div class="mb-3">
                        <div class="form-label">Uitgelichte afbeelding</div>
                        <input type="file" class="form-control" name="featured_image">
                        <span class="text-danger error-text featured_image_error"></span>
                    </div>
                    <div class="image_holder mb-2" style="max-width: 250px">
                        <img src="" alt="" class="img-thumbnail" id="image-previewer" data-ijabo-default-img="">
                    </div>
                    <button type="submit" class="btn btn-primary">Bericht opslaan</button>
                </div>
            </div>
        </div>
    </div>
</form>


@endsection
@push('scripts')
<!-- Include CKEditor script -->
<script src="/ckeditor/ckeditor.js"></script>
<script>
    $(function() {
        $('input[type="file"][name="featured_image"]').ijaboViewer({
            preview: '#image-previewer',
            imageShape: 'rectangular',
            allowedExtensions: ['jpg', 'jpeg', 'png'],
            onErrorShape: function(message, element) {
                alert(message);
            },
            onInvalidType: function(message, element) {
                alert(message);
            }
        });

        $('form#addPostForm').on('submit', function(e) {
            e.preventDefault();
            toastr.remove();
            var form = this;
            var fromdata = new FormData(form);

            $.ajax({
                url: $(form).attr('action'),
                method: $(form).attr('method'),
                data: fromdata,
                processData: false,
                dataType: 'json',
                contentType: false,
                beforeSend: function() {
                    $(form).find('span.error-text').text('');
                },
                success: function(response) {
                    toastr.remove();
                    if (response.code == 1) {
                        $(form)[0].reset();
                        $('div.image_holder').html('');
                        toastr.success(response.msg);
                    } else {
                        toastr.error(response.msg);
                    }
                },
                error: function(response) {
                    toastr.remove();
                    $.each(response.responseJSON.errors, function(prefix, val) {
                        $(form).find('span.' + prefix + '_error').text(val[0]);
                    });
                }
            });
        });
    });
</script>
@endpush