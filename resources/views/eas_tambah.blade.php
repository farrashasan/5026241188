<!-- Menghubungkan dengan view template master -->
@extends('template')

@section('title', 'Beli Barang')
<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')

<h2>Kode Soal Penggajian</h2>

    <center>
        <br />
        <br />

        <div class="card">
            <div class="card-header">
                Tambah Data Penggajian
            </div>

            <div class="card-body">
                <form action="/eastambahdata" method="post">
                    {{ csrf_field() }}

                    <div class="row mb-3">
                        <label for="nip" class="col-sm-2 col-form-label">NIP</label>
                        <div class="col-sm-10">
                            <input type="text" name="nip" id="nip" class="form-control" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="gajipokok" class="col-sm-2 col-form-label">Gaji Pokok</label>
                        <div class="col-sm-10">
                            <input type="text" name="gajipokok" id="gajipokok" class="form-control" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="potongan" class="col-sm-2 col-form-label">Potongan</label>
                        <div class="col-sm-10">
                            <input type="number" name="potongan" id="potongan" class="form-control" required>
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
        <a href="/eas" class="btn btn-info"> Kembali</a>
    </center>
@endsection
