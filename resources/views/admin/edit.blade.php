<h1>Edit data</h1>
<form action="/admin/{{ $edit->id }}" method="POST">
    @method('put')
    @csrf
    <input type="text" name="tempat" value="{{ $edit->tempat }}">
    <input type="text" name="image" value="{{ $edit->image }}">
    <input type="text" name="alamat" value="{{ $edit->alamat }}">
    <input type="text" name="hp"value="{{ $edit->hp }}">
    <input type="text" name="email"value="{{ $edit->email }}">
    <input type="text" name="content"value="{{ $edit->content }}">
    <input type="submit" name="submit" value="save">
</form>
