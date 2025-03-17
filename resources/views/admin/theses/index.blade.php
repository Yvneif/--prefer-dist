@extends('layouts.admin')

@section('content')
<h2>Thesis Archive</h2>
<a href="{{ route('admin.theses.create') }}">Add New Thesis</a>

@if (session('success'))
    <p>{{ session('success') }}</p>
@endif

<table border="1">
    <tr>
        <th>Title</th>
        <th>Author</th>
        <th>Year</th>
        <th>Actions</th>
    </tr>
    @foreach ($theses as $thesis)
    <tr>
        <td>{{ $thesis->title }}</td>
        <td>{{ $thesis->author }}</td>
        <td>{{ $thesis->year }}</td>
        <td>
            <a href="{{ route('admin.theses.show', $thesis->id) }}">View</a>
            <a href="{{ route('admin.theses.edit', $thesis->id) }}">Edit</a>
            <form action="{{ route('admin.theses.destroy', $thesis->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection
