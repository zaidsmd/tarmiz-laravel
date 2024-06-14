@extends('admin.layouts.main')
@section('page-title','')
@section('document-title','Articles')
@push('styles')
    <link rel="stylesheet" href="{{asset('libs/dropify/css/dropify.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/datepicker-bs5.min.css')}}">
@endpush
@section('breadcrumb')
    <ul class="breadcrumb">
        <li class="breadcrumb-item" aria-current="page">Articles</li>
    </ul>
@endsection
@section('main-content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <form action="{{route('admin.articles.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between ">
                            <h5 class="m-0" >Ajouter une Article</h5>
                            <button class="btn-light-info btn" >Sauvegarder</button>
                        </div>
                        <hr class="border" >
                        <div class="row align-items-center">
                            <div class="col-md-4 col-sm-6 mt-3">
                                <label for="title" class="form-label" >Titre</label>
                                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title">
                                @error('title')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-4 col-sm-6 mt-3">
                                <label for="date" class="form-label" >Date</label>
                                <input id="date" type="text" autocomplete="off" class="form-control @error('date') is-invalid @enderror" name="date">
                                @error('date')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-4 col-sm-6 form-check form-switch pt-4 mt-3">
                                <input type="checkbox" name="show_in_home" class="form-check-input input-primary" id="show_in_home" checked="checked">
                                <label class="form-check-label" for="show_in_home">Afficher sur la page d'accueil</label>
                            </div>
                            <div class="col-md-4 col-sm-6 mt-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea name="description" id="description" class="form-control" cols="30" rows="5"></textarea>
                                @error('description')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-4 col-sm-6 mt-3">
                                <label for="thumbnail" class="form-label">Image</label>
                                <input type="file" id="thumbnail" name="thumbnail">
                                @error('thumbnail')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                           <div class="col-12">
                               <h5 class="mt-4">Article</h5>
                               <hr class="border">
                           </div>
                            <textarea name="article" id="article" cols="30" rows="10"></textarea>
                            @error('article')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script src="{{asset('js/plugins/tinymce/tinymce.js')}}"></script>
    <script src="{{asset('js/plugins/tinymce/langs/fr_FR.js')}}"></script>
    <script src="{{asset('libs/dropify/js/dropify.min.js')}}"></script>
    <script src="{{asset('js/plugins/datepicker-full.min.js')}}" ></script>
    <script>
        $('#thumbnail').dropify({
            height:'109px',
            messages: {
                default: "Glissez-déposez un fichier ici ou cliquez",
                replace: "Glissez-déposez un fichier ou cliquez pour remplacer",
                remove: "Supprimer",
                error: "Désolé, le fichier trop volumineux",
            },
        });
        tinymce.init({
            height: '400',
            selector: '#article',
            content_style: 'body { font-family: "Inter", sans-serif; }',
            menubar: false,
            language:'fr_FR',
            toolbar: [
                'styleselect fontselect fontsizeselect',
                'undo redo | cut copy paste | bold italic | link image | alignleft aligncenter alignright alignjustify',
                'bullist numlist | outdent indent | blockquote subscript superscript | advlist | autolink | lists charmap | print preview |  code'
            ],
            plugins: 'advlist autolink link image lists charmap  preview code'
        });
        const datepicker = new Datepicker(document.querySelector('#date'),{
            buttonClass: 'btn'
        })
    </script>
@endpush
