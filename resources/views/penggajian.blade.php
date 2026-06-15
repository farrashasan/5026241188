<!-- Menghubungkan dengan view template  -->
@extends('template')

@section('title', 'Data Penggajian')

@section('konten')

<h2>Kode Soal Penggajian</h2>

<center>


	<table class="table table-striped table-hover">
		<tr>
			<th>NIP</th>
			<th>Gaji Pokok</th>
			<th>Potongan</th>
			<th>Gaji Bersih</th>
			<th>Persentase Potongan</th>

		</tr>
		@foreach($penggajian as $p)
		<tr>
			<td>{{ $p->nip}}</td>
			<td>Rp {{ number_format($p->gajipokok, 0, ',', '.') }}</td>
			<td>Rp {{ number_format($p->potongan, 0, ',', '.') }}</td>
            <td>Rp {{ number_format($p->gajipokok - $p->potongan, 0, ',', '.') }}</td>
			<td>{{ ($p->potongan / $p->gajipokok) * 100 }}%</td>
		</tr>
        @endforeach

    <script>

    if ((($p->potongan / $p->gajipokok) * 100 )> 30) {
        alert("Persentase potongan gaji melebihi 30%!");
    }

    if ({{ $p->nip }}) {
        // Lakukan sesuatu jika NIP tidak unik
    }
    </script>

    </table>


    <a href="/eastambah" class="btn btn-primary">Tambah Data</a>


</center>
@endsection

