@extends('admin.layouts.main')
@section('page-title','')
@section('document-title','Projets et réalisations')
@push('styles')
    @include('admin.layouts.partials.css.__datatable_css')
    <style>
        td:last-child {
            width: 1%;
            white-space: nowrap;
        }
    </style>
@endpush
@section('breadcrumb')
    <ul class="breadcrumb">
        <li class="breadcrumb-item" aria-current="page">Projets et réalisations</li>
    </ul>
@endsection
@section('main-content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                   <div class="d-flex align-items-center justify-content-between">
                       <h5 class="m-0">Liste des projets et réalisations</h5>
                       <a class="btn btn-light-success" href="{{route('admin.projects.create')}}">Ajouter +</a>
                   </div>
                    <hr class="border" >
                    <table id="dataTable" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Titre</th>
                            <th>Type</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    @include('admin.layouts.partials.js.__datatable_js')
   @vite(['resources/admin/js/projects/index.js'])
@endpush
