<!-- Menghubungkan dengan view template master -->
@extends('template')

@section('title', 'Tambah Harddisk')
<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')
    <center>


        <br />
        <br />

        <div class="card">
            <div class="card-header">
                Form Tambah Data Harddisk
            </div>

            <div class="card-body">
                <form action="/harddisk_store" method="post">
                    {{ csrf_field() }}

                    <div class="row mb-3">
                        <label for="merk" class="col-sm-2 col-form-label">Merk</label>
                        <div class="col-sm-10">
                            <input type="text" name="merk" id="merk" class="form-control" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="stock" class="col-sm-2 col-form-label">Stock</label>
                        <div class="col-sm-10">
                            <input type="number" name="stock" id="stock" class="form-control" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="tersedia" class="col-sm-2 col-form-label">Tersedia?</label>
                        <div class="col-sm-10">
                            <input type="text" name="tersedia" id="tersedia" class="form-control" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="offset-sm-2 col-sm-10">
                            <input type="submit" value="Simpan Data" class="btn btn-primary">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <br />
        <br />
        <a href="/harddisk" class="btn btn-info"> Kembali</a>
    </center>
@endsection
