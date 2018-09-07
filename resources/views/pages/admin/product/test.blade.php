@extends('admin.master')

@section('content')
    {{ serialize($items) }}
@endsection