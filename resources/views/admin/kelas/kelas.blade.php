@extends('templated.templated')

@section('sidebar')
  @include('templated.sidebar.sidebarkelas')
@endsection

@section('content')
    @include('templated.content.contentkelas')
@endsection

@section('modalcreate')
    @include('templated.modal.modalcreateKelas')
@endsection

@section('modalupdate')
    @include('templated.modal.modalupdateKelas')
@endsection
