<!-- Menghubungkan dengan view template -->
@extends('template')

@section('title', 'Data Harddisk')
@section('konten')
    <center>

        <p>Cari Data Harddisk :</p>
        <form action="/harddisk_cari" method="GET">
            <input type="text" name="cari" placeholder="Cari Harddisk .." class="form-control">
            <input type="submit" value="CARI" class="btn btn-secondary">
        </form>

        <br />

        <table class="table table-striped table-hover">
            <tr>
                <th>Merk</th>
                <th>Stock</th>
                <th>Tersedia?</th>
                <th>Actions</th>
            </tr>
            @foreach ($harddisk as $h)
                <tr>
                    <td>{{ $h->merkharddisk }}</td>
                    <td>{{ $h->stockharddisk }}</td>
                    <td>{{ $h->tersedia }}</td>
                    <td>
                        <a href="/harddisk_edit/{{ $h->kodeharddisk }}" class="btn btn-warning">Edit</a>
                        |
                        <a href="/harddisk_hapus/{{ $h->kodeharddisk }}" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
            @endforeach
        </table>
        <ul class="pagination justify-content-center" style="margin:20px 0">
            {{ $harddisk->links() }}
        </ul>
        <a href="/harddisk_tambah" class="btn btn-primary">Tambah Harddisk Baru</a>

    </center>

@endsection
