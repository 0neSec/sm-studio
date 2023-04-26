<h1>tambah data</h1>
<form action="/admin/studio" method="POST">
    @csrf
    <input type="text" name="tempat">
    <input type="text" name="image">
    <input type="text" name="alamat">
    <input type="text" name="hp">
    <input type="text" name="email">
    <input type="text" name="content">
    <input type="submit" name="submit" value="save">
</form>
