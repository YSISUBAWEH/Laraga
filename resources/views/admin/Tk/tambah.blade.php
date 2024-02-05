<div class="container">
        <h2>Tambah User</h2>

        <form action="{{ route('displays-the-kategori-table.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nama kategori:</label>
                <input type="text" class="form-control" id="namaKategori" name="namaKategori" required>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>