@extends('layout.layout')
@section('page_title')
    <div class="row p-35">
        <div class="col-12">
            <div class="tabs">
                <div class="tabs-links">
                    <a href="#">
                        <h4 class='active'>Dashboard <span><i class="fa-solid fa-chevron-right"></i></span></h4>
                    </a>
                    <a href="#">
                        <h4>Add Post</h4>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="cms-edit">
        <div class="row">
            <div class="col-lg-9 col-sm-12">
                <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data"
                    class="page-edit-form">
                    @csrf
                    <div class="edit-inputs d-flex">
                        <div class="animated-input">
                            <input type="text" name="name" value="{{ old('name') }}" required>
                            <label>Page name:*</label>
                            @error('name')
                                {{ $message }}
                            @enderror
                        </div>

                        <div class="animated-input eye">
                            <input type="text" name="title" value="{{ old('title') }}" required>
                            <label>Section title:*</label>
                            <i class="fa-regular fa-eye"></i>
                            @error('title')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <textarea name="description" id="editor" value="{{ old('description') }}" id="" cols="30" rows="10"></textarea>
                    @error('description')
                        {{ $message }}
                    @enderror
                    <div class="image-upload">
                        {{-- <p>Image : *</p>
                    <img src="{{asset('assets/images/image.svg')}}" alt="">
                    <i class="fa-solid fa-arrow-up-from-bracket"></i> --}}
                        {{-- <div class="mb-3"> --}}
                        <label for="formFile" class="form-label">Image : *</label>
                        <input class="form-control" name="image" type="file" id="formFile">
                        {{-- </div> --}}
                    </div>
                    <div class="edit-btns d-flex">
                        <button class="edit-primary">Add FAQ</button>
                        <button class="edit-secondary">Remove Section</button>
                        <button class="edit-secondary">Add Section</button>
                    </div>
                    <button type="submit" class="primary-btn">Add</button>
                </form>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
<script src="https://cdn.ckeditor.com/4.8.0/full-all/ckeditor.js">
</script>
<script>
CKEDITOR.replace('editor', {
    skin: 'moono',
    enterMode: CKEDITOR.ENTER_BR,
    shiftEnterMode:CKEDITOR.ENTER_P,
    toolbar: [{ name: 'basicstyles', groups: [ 'basicstyles' ], items: [ 'Bold', 'Italic', 'Underline', "-", 'TextColor', 'BGColor' ] },
               { name: 'styles', items: [ 'Format', 'Font', 'FontSize' ] },
               { name: 'scripts', items: [ 'Subscript', 'Superscript' ] },
               { name: 'justify', groups: [ 'blocks', 'align' ], items: [ 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock' ] },
               { name: 'paragraph', groups: [ 'list', 'indent' ], items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent'] },
               { name: 'links', items: [ 'Link', 'Unlink' ] },
            //    { name: 'insert', items: [ 'Image'] },
               { name: 'spell', items: [ 'jQuerySpellChecker' ] },
            //    { name: 'table', items: [ 'Table' ] }
               ],
  });
</script>
@endpush
