<div class="col py-3">
<table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama Tempat</th>
        <th scope="col">Image</th>
        <th scope="col">Alamat</th>
        <th scope="col">Hp</th>
        <th scope="col">Email </th>
        <th scope="col">Descripsi</th>

      </tr>
    </thead>
    <tbody>
        @php

        $no = 1;
         @endphp

        @foreach  ($view as $item)
        <tr>
            <th scope="row">{{ $no }}</th>
            <td>{{ $item->tempat }}</td>
            <td>{{ $item->image }}</td>
            <td>{{ $item->alamat }}</td>
            <td>{{ $item->hp }}</td>
            <td>{{ $item->email }}</td>
            <td>{{ $item->content }}</td>
            <td>
               <a href="/admin/edit/{{ $item->id }}"><button type="button" class="btn btn-success">Edit</button></a>
            </td>
            <td>
                <button type="button" class="btn btn-danger">Hapus</button>
            </td>

          </tr>
          {{ $no++ }}
        @endforeach

    </tbody>
  </table>

</div>
