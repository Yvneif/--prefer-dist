@extends('layouts.admin')

@section('content')
<h2>Theses List</h2>
<a href="{{ route('theses.create') }}" class="btn btn-success">Add Thesis</a>

<table>
    <tr><th>Title</th><th>Author</th><th>Year</th><th>Actions</th></tr>
    @foreach($theses as $thesis)
    <tr>
        <td>{{ $thesis->title }}</td>
        <td>{{ $thesis->author }}</td>
        <td>{{ $thesis->year }}</td>
        <td>
            <a href="{{ route('theses.edit', $thesis->id) }}">Edit</a>
            <form action="{{ route('theses.destroy', $thesis->id) }}" method="POST" style="display:inline;">
                @csrf @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection
