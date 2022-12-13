@extends('templated.templated')

@section('content')
  @include('templated.content.contentdashboard')
@endsection
  
@section('sidebar')
    @include('templated.sidebar.sidebardashboard')
@endsection

@section('modalcreate')
    @include('templated.modal.modalcreatedatakasus')
@endsection

@section('modalupdate')
    @include('templated.modal.modalupdatedatakasus')
@endsection