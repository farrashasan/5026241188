<!DOCTYPE html>
<html>
<head>
    <title>5026241188 - Harddisk</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="container mt-5">

    <div class="mb-4">

        <h3>Edit Harddisk</h3>
    </div>

    <a href="/harddisk" class="btn btn-secondary mb-4">Kembali</a>

    @foreach($harddisk as $h)

    <div class="card">
        <div class="card-header">
            Form Edit Data Harddisk
        </div>

        <div class="card-body">
            <form action="/harddisk_update" method="post">
                {{ csrf_field() }}

                <input type="hidden" name="id" value="{{ $h->kodeharddisk }}">

                <div class="row mb-3">
                    <label for="merk" class="col-sm-2 col-form-label">Merk</label>
                    <div class="col-sm-10">
                        <input
                            type="text"
                            name="merk"
                            id="merk"
                            class="form-control"
                            required
                            value="{{ $h->merkharddisk }}"
                        >
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="stock" class="col-sm-2 col-form-label">Stock</label>
                    <div class="col-sm-10">
                        <input
                            type="number"
                            name="stock"
                            id="stock"
                            class="form-control"
                            required
                            value="{{ $h->stockharddisk }}"
                        >
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="tersedia" class="col-sm-2 col-form-label">Tersedia</label>
                    <div class="col-sm-10">
                        <input
                            type="text"
                            name="tersedia"
                            id="tersedia"
                            class="form-control"
                            required
                            value="{{ $h->tersedia }}"
                        >
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

    @endforeach

</div>

<!-- Bootstrap JS Optional -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
