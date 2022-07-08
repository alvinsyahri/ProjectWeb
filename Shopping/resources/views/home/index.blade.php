@extends('home.layout.main')
@section('container')
    {{-- CONTENT POPULAR --}}
    <div class="container mt-4">
        <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
            <div class="row">
                <div class="col-md-6 px-0">
                    <h1 class="display-4 fst-italic">{{ $barang[0]->name }}</h1>
                    <p class="lead my-3">{{ $barang[0]->deskripsi }}</p>
                    <p class="lead mb-0"><a href="" class="btn btn-primary" style="padding: 15px 150px">Buy</a></p>
                </div>
                <div class="col-md-6 px-0">
                    <img src="img/{{ $barang[0]->image }}" style="margin-left: 100px" height="400" width="400" alt="">
                </div>
            </div>
        </div>

        <div class="row mb-2">
            <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary">World</strong>
                        <h3 class="mb-0">{{ $barang[1]->name }}</h3>
                        <p class="card-text mb-auto">{{ $barang[1]->deskripsi }}</p>
                        <p><a href="#" class="btn btn-primary">Buy</a></p>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img src="img/{{ $barang[1]->image }}" height="300" width="200" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary">World</strong>
                        <h3 class="mb-0">{{ $barang[2]->name }}</h3>
                        <p class="card-text mb-auto">{{ $barang[2]->deskripsi }}</p>
                        <p><a href="#" class="btn btn-primary">Buy</a></p>
                    </div>
                    <div class="col-auto d-none d-lg-block" >
                        <img src="img/{{ $barang[2]->image }}" height="300" width="200" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- END CONTENT POPULAR --}}

    {{-- LIST PRODUCT --}}
    <h3 class="text-center mb-4">List Product</h3>
    <div class="row row-cols-1 row-cols-md-4 g-4 justify-content-center">
        @foreach ($barang->skip(3) as $brg)
        <div class="col">
            <div class="card h-100">
                <img src="img/{{ $brg->image }}" class="card-img-top" alt="...">
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
    <div  class="my-2" style="text-align: center">
        <h5><a href="/barang/more" class="text-decoration-none">More List</a></h5>
    </div>


@endsection
