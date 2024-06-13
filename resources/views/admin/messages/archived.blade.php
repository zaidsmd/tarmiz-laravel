@extends('admin.layouts.main')
@section('page-title','')
@section('document-title','Messages archivés')
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
        <li class="breadcrumb-item" aria-current="page">Messages archivés</li>
    </ul>
@endsection
@section('main-content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                   <div class="d-flex align-items-center justify-content-between">
                       <h5 class="m-0">Liste des messages archivés</h5>
                   </div>
                    <hr class="border" >
                    <table id="dataTable" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Email</th>
                            <th>Sujet</th>
                            <th>Message</th>
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
   @vite(['resources/admin/js/messages/archived.js'])
@endpush
