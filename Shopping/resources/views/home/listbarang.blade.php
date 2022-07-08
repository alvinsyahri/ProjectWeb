@extends('home.layout.main')
@section('container')

    {{-- LIST PRODUCT --}}
    <h3 class="text-center mb-4">All Product</h3>
    <div class="row row-cols-1 row-cols-md-4 g-4 justify-content-center">
        @foreach ($barang as $brg)
        <div class="col">
            <div class="card h-100">
                <img src="/img/{{ $brg->image }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $brg->name }}</h5>
                    <p class="card-text">{{ $brg->deskripsi }}</p>
                </div>
                <a href="" class="btn btn-primary mx-5 my-3 py-2">Buy</a>
            </div>
        </div>
        @endforeach
    </div>
    {{-- END LIST PRODUCT --}}

    {{-- <div class="d-flex justify-content-end">{{ $barang->links() }}</div> --}}

@endsection
