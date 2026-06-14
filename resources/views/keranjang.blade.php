<!-- Menghubungkan dengan view template  -->
@extends('template')

@section('title', 'Data Pegawai')

@section('konten')
<center>


	<table class="table table-striped table-hover">
		<tr>
			<th>Kode Pembelian</th>
			<th>Kode Barang</th>
			<th>Jumlah Pembelian</th>
			<th>Harga per Item</th>
			<th>Total</th>
            <th>Action</th>

		</tr>
		@foreach($keranjang as $k)
		<tr>
			<td>{{ $k->ID}}</td>
			<td>{{ $k->KodeBarang }}</td>
			<td>{{ $k->Jumlah}}</td>
			<td>Rp {{ number_format($k->Harga, 0, ',', '.') }}</td>
            <td>Rp {{ number_format($k->Harga * $k->Jumlah, 0, ',', '.') }}</td>
            
            <td>
				<a href="/keranjangbeli/{{ $k->ID }}" class="btn btn-warning">Beli</a>

				<a href="/keranjangbatal/{{ $k->ID }}" class="btn btn-danger">Batal</a>
			</td>
		</tr>
		@endforeach
	</table>

</center>
@endsection

