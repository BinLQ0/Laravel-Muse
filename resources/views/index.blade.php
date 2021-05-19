@extends('adminlte::layouts.base')
@section('title', 'Users Management')

@section('css')
<!-- Datatables -->
<link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.css') }}">
<!-- Bootstrap 4 -->
<link rel="stylesheet" href="{{ asset('plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}	">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('content')
<div class="row d-flex justify-content-center">
    <div class="col-9">

        <h2> USER MANAGEMENT </h2>

        <div class="row pl-2 mb-3">
            <x-adminlte-button id='btn_create' :url='url("users/create")' class='bg-success btn-sm' icon='far fa-plus-square'
                label='Create' />
        </div>

        <x-card component='tables.user-table' has-padding='true' />
    </div>
</div>

@endsection

@section('js')
<!-- Datatables -->
<script src="{{ asset('plugins/datatables/jquery.dataTables.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>
<!-- SweetAlert 2 -->
<script src="{{ asset('plugins/sweetalert2/sweetalert2.min.js') }}"></script>
@endsection
