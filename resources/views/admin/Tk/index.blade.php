@extends('admin.layout.index')
@push('css')
	<title>Table V02</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
<link rel="icon" type="image/png" href="images/icons/favicon.ico">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="css/util.css">
<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="stylesheet" type="text/css" href="{{asset ('archives/css/admin/table.css')}}">
<!--===============================================================================================-->
@endpush
@section('content')
	
<div class="limiter">
	<div class="container-table100">
		<div class="wrap-table100">
			<a href="{{ route('displays-the-kategori-table.create') }}" class="btn btn-primary">Tambah Kategori</a>
			<div class="table">
				<div class="row header">
					<div class="cell">
					nama
					</div>
					<div class="cell">
					aksi
					</div>
				</div>
				@foreach($kategori as $u)
					<div class="row">
						<div class="cell" data-title="nama">
						{{$u->namaKategori}}
						</div>
						<div class="cell" data-title="aksi">
                            <a href="{{ route('displays-the-kategori-table.edit', $u->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('displays-the-kategori-table.destroy', $u->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </div>
					</div>
				@endforeach
			</div>
		</div>
	</div>
</div>

@endsection

@push('js')
<!--===============================================================================================-->
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/bootstrap/js/popper.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="js/main.js"></script>

 <script type="text/javascript"></script>
@endpush