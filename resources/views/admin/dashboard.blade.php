@extends('layouts.admin')

@section('content')
<h2>Welcome, Admin!</h2>
<a href="{{ route('theses.index') }}" class="btn btn-primary">Manage Theses</a>
@endsection
