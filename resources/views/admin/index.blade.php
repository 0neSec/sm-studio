@extends('layout.app')

@section('content-1')
@foreach ($view as $item)
<p>{{ $item->tempat }}</p>
<p>{{ $item->image }}</p>
<p>{{ $item->alamat }}</p>
<p>{{ $item->hp }}</p>
<p>{{ $item->email }}</p>
<p>{{ $item->content }}</p>
<a href="/admin/edit/{{ $item->id }}">edit</a>

<a href="/admin/delete/{{ $item->id }}">delete</a>
@endforeach
<a href="/admin/create">tambah</a>

@endsection
