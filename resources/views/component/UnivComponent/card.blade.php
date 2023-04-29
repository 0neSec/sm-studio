{{-- <div class="page-content page-container mt-5 p-5" id="page-content">
    <div class="padding mt-5 ">
        <div class="row container d-flex justify-content-center">
            <h1 class="text-center">Tempat Studio</h1>
            @foreach ($post as $item)
            <div class="col-md-5">
                <div class="card">
                    <div class="card-body text-center">
                        <div>
                            <img src="{{ asset('storage/image/'.$item->image) }}"
                                class=" mb-4" style="width: 100%;" alt="profile image">
                            <h4>Sam Disanjo</h4>
                            <p class="text-muted mb-0">{{ $item->tempat }}</p>
                        </div>
                        <p class="mt-2 card-text">
                           {{ $item->content }}
                        </p>
                        <a href="/studio/show/{{ $item->id }}"></a><button class="btn btn-info btn-sm mt-3 mb-4">Detail</button>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div> --}}

<div class="container mt-4">
    @foreach ($post as $item)
    <div class="card p-3">
        <div class="row">
            <div class="col-md-4">
                <div class="position-relative snipimage">
                    <img src="{{ asset('storage/image/'.$item->image) }}" class="rounded img-fluid w-100 img-responsive">
                </div>
            </div>
            <div class="col-md-8">
                <div class="mt-2">
                  <div class="justify-content-between align-items-center text-dark">
                    <h5 class="mb-1">{{ $item->tempat }} </h5>
                    <br>
                    <p>{{ $item->alamat }}</p>
                    <br>
                    <p>{{ $item->email }}</p>
                    <br>
                    <p>{{ $item->hp }}</p>
                    <p>{{ $item->content }}</p>
                    {{-- <a href="/studio/show/{id}"><button type="button" class="btn btn-warning">Selengkapnya....</button></a> --}}
                  </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach

</div>
