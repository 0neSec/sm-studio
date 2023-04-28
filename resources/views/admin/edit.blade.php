@extends('admin.app')


@section('isi')

<h1>Edit data</h1>
<form action="/admin/{{ $edit->id }}" method="POST">
    @method('put')
    @csrf
    <div class="form-group">
        <label class="form-control-placeholder" for="tempat">Name</label>
      <input type="text" name="tempat" class="form-control" value="{{ $edit->tempat }}" required>
    </div>

<div class="form-group mt-2">
    <label class="form-control-placeholder" for="image"> Image </label>
    <input type="file" class="form-control" name="image" value="{{ $edit->image }}">
  </div>
    <div class="form-group mt-2">
        <label class="form-control-placeholder" for="alamat">Alamat</label>
      <input type="text" name="alamat" class="form-control" required value="{{ $edit->alamat }}">
    </div>
    <div class="form-group mt-2">
        <label class="form-control-placeholder" for="hp">Nomer Hp</label>
      <input type="text" name="hp" class="form-control" required value="{{ $edit->hp }}">
    </div>
    <div class="form-group mt-2">
        <label class="form-control-placeholder" for="email">Email</label>
      <input type="text" name="email" class="form-control" required value="{{ $edit->email }}">
    </div>
    <div class="form-group mt-2">
        <label class="form-control-placeholder" for="content">Deskripsi</label>
      <input type="text" name="content" class="form-control" required value="{{ $edit->content }}">
    </div>
    <div class="form-group">
        <button type="submit" name="submit" class="btn btn-primary mt-3" value="save">Edit</button>
    </div>
</form>
</div>
</div>
</div>
@endsection
