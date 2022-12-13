@extends('templated.templated')


@section('sidebar')
    @include('templated.sidebar.sidebarmurid')
@endsection

@section('content')
  @include('templated.content.contentmurid')
@endsection

@section('modalcreate')
    @include('templated.modal.modalcreatemurid')
@endsection

@section('modalupdate')
    @include('templated.modal.modalcreatemurid')
@endsection

{{-- modal create --}}
    
