<div class="container">
        <h2>Edit Kategori</h2>

        <form action="{{ route('displays-the-kategori-table.store') }}" method="POST">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="name">name:</label>
                <input type="text" class="form-control" id="namaKategori" name="namaKategori" value="{{$kategori->namaKategori}}" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>