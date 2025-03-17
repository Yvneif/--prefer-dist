@extends('layouts.admin')

@section('content')
<h2>Add Thesis</h2>

<form action="{{ route('admin.theses.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="text" name="title" placeholder="Title" required>
    <input type="text" name="author" placeholder="Author" required>
    <input type="number" name="year" placeholder="Year" required>
    <textarea name="abstract" placeholder="Abstract" required></textarea>
    <input type="file" name="file">
    <button type="submit">Save</button>
</form>
@endsection
