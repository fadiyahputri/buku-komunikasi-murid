@extends('templated.templated')

{{-- @section('navbar')
    @include('templated.navbar.navbarpelanggaran')
@endsection --}}

@section('sidebar')
    @include('templated.sidebar.sidebarpelanggaran')
@endsection

@section('content')
    @include('templated.content.contentpelanggaran')
@endsection


@section('modalcreate')
    @include('templated.modal.modalcreatepelanggaran')
@endsection

@section('modalupdate')
    @include('templated.modal.modalupdatepelanggaran')
@endsection

