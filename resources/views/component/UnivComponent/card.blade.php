<div class="page-content page-container mt-5 p-5" id="page-content">
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
                        <button class="btn btn-info btn-sm mt-3 mb-4">Detail</button>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
