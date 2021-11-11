@extends('dashboard.master')
@section('content')
    <h6>Editar publicación</h6>
    <form action="{{ route("category.update" , $category -> id) }}" method="POST">
        @method('PUT')
        @include('dashboard.categories._form')
    </form>
@endsection
