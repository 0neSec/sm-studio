@extends('admin.app')

@section('isi')
<div class="container my-5">
    <div class="row">
      <div class="col-md-6 mx-auto">
        <form action="/admin/studio" method="POST">
            @csrf
        <div class="form-group">
            <label class="form-control-placeholder" for="tempat">Name</label>
          <input type="text" name="tempat" class="form-control" required>
        </div>
        <div class="form-group">
            <label class="form-control-placeholder" for="image">Image</label>
          <input type="text" name="image" class="form-control" required>
        </div>
        <div class="form-group">
            <label class="form-control-placeholder" for="alamat">Alamat</label>
          <input type="text" name="alamat" class="form-control" required>
        </div>
        <div class="form-group">
            <label class="form-control-placeholder" for="hp">Nomer Hp</label>
          <input type="text" name="hp" class="form-control" required>
        </div>
        <div class="form-group">
            <label class="form-control-placeholder" for="email">Email</label>
          <input type="text" name="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label class="form-control-placeholder" for="content">Deskripsi</label>
          <input type="text" name="content" class="form-control" required>
        </div>
        <div class="form-group">
            <button type="submit" name="submit" class="btn btn-primary mt-3" value="save">Tambah</button>
        </div>
    </form>
      </div>
    </div>
  </div>

@endsection

