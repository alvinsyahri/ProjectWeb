@extends('home.layout.main')
@section('container')
    <div>
        <table class="table caption-top text-center">
            <caption>List Barang Belanjaan</caption>
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">jenis Barang</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>Otto</td>
                    <td>Otto</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>Thornton</td>
                    <td>Thornton</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>the Bird</td>
                    <td>the Bird</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="row">
        <div class="col-4 mt-4">
            <table class="table table-light">
                <thead>
                    <td>Id Transaksi</td>
                    <td>#AF14500</td>
                </thead>
                <tbody>
                    <tr>
                        <td>Jumlah Barang</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>nama Penerima</td>
                        <td>Otto Suherman</td>
                    </tr>
                    <tr>
                        <td>Total Harga</td>
                        <td>1.800.000</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-4 mx-5 my-4">
            <h4 class="mb-3">Informasi Pembeli</h4>
            <label for="">Nama Pembeli</label>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Nama">
            </div>
            <label for="">Email</label>
            <div class="input-group mb-3">
                <input type="email" class="form-control" placeholder="username@gmail.com">
            </div>
            <label for="">No Telephone</label>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="081234567890">
            </div>
            <label for="">Alamat</label>
            <div class="input-group">
                <textarea class="form-control"></textarea>
            </div>
            <a href="" class="btn btn-success mt-2 px-5">CheckOut</a>
        </div>
    </div>
@endsection
