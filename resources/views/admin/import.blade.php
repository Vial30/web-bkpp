@extends('layouts.app')

@section('title', 'BKPP Kota Semarang - Admin')

@section('content')
@include('partials.adminheader')
@include('partials.adminnavbar')

<div class="container mt-5">
    <h2 class="text-center">Import Excel File to Database</h2>
    @if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="{{ route('import.excel') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="excelFile" class="form-label">Upload Excel File</label>
            <input type="file" name="excelFile" id="excelFile" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Upload and Import</button>
    </form>
</div>
@endsection