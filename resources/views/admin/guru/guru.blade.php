@extends('templated.templated')

@section('sidebar')
    @include('templated.sidebar.sidebarguru')
@endsection

@section('content')
  @include('templated.content.contentguru')
@endsection

@section('modalcreate')
    @include('templated.modal.modalcreateguru')
@endsection

@section('modalupdate')
    @include('templated.modal.modalupdateguru')
@endsection

