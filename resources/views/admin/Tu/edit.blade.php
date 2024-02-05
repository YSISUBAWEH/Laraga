<div class="container">
        <h2>Edit User</h2>

        <form action="{{ route('displays-the-user-table.store') }}" method="POST">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="name">username:</label>
                <input type="text" class="form-control" id="username" name="username" value="{{$user->username}}" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" value="{{$user->email}}" required>
            </div>
            <div class="form-group">
                <label for="email">password:</label>
                <input type="password" class="form-control" id="email" name="password" value="{{$user->password}}" required>
            </div>
            <div class="form-group">
                <label for="email">nama lengkap:</label>
                <input type="text" class="form-control" id="namaLengkap" name="namaLengkap" value="{{$user->namaLengkap}}" required>
            </div>
            <div class="form-group">
                <label for="email">alamat:</label>
                <input type="text" class="form-control" id="alamat" name="alamat" value="{{$user->alamat}}" required>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>