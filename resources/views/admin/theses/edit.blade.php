@extends('layouts.admin')

@section('content')
<h2>Edit Thesis</h2>


<form action="{{ route('admin.theses.update', $thesis->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <input type="text" name="title" value="{{ $thesis->title }}" required>
    <input type="text" name="author" value="{{ $thesis->author }}" required>
    <input type="number" name="year" value="{{ $thesis->year }}" required>
    <textarea name="abstract" required>{{ $thesis->abstract }}</textarea>
    <input type="file" name="file">
    <button type="submit">Update</button>
</form>

