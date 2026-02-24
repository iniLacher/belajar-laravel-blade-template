@extends('parent')

@section('title', "Halaman Utama")

@section('headerr')
    <p>ini isi header</p>
@endsection

@section('content')
    <p>ini isi content</p>
@endsection

@section('childDefault')
  @parent
    <p>ini isi child default</p>
    
@endsection