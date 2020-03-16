<!DOCTYPE html>
<html>
	<head>
		<title>GIG GUIDE</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
		<style>
					body {font-family: 'Segoe UI', sans-serif;
							background-color: #F0FFFF;}

					h1 {font-family: 'Futura', sans-serif;}
				</style>
	</head>
<body>
				<nav class="navbar navbar-light bg-secondary">
			  <a class="navbar-brand"><h1>Gig Guide</h1></a>
			  <form class="form-inline my-2 my-lg-0">
			    <input name="cari" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" method="GET" action="/gigguide">
			    <button class="btn btn-warning" type="submit">Search</button>
			  </form>
			</nav>
				
				<div class="main">
				  <div class="container">
		<div class="row">
			<div class="col-6">
				<button type="button" class="btn btn-primary float right" data-toggle="modal" data-target="#exampleModal"> Tambah Data Jadwal</button>
				<a href="/gigguide"><button type="button" class="btn btn-success float right">Refresh</button></a>
				<a href="/gigguide/export_excel" class="btn btn-success my-3" target="_blank">Export Excel</a>
				<a href="/"><button type="button" class="btn btn-danger float right">Kembali</button></a>
			</div>
			<div class="col-6">
				
			</div>

					<table class="table">
					<tr>
						<th>PENYANYI/BAND</th>
						<th>LOKASI ACARA</th>
						<th>WAKTU ACARA</th>
						<th>KETERANGAN</th>
					</tr>
					@foreach($data_gigguide as $data_gig)
					<tr>
						<td>{{$data_gig->gig_artis}}</td>
						<td>{{$data_gig->gig_lokasi}}</td>
						<td>{{$data_gig->gig_waktu}}</td>
						<td>{{$data_gig->gig_keterangan}}</td>
						<td><a href="/gigguide/{{$data_gig->id}}/edit"  class="btn btn-warning btn-sm">Edit</a></td>
						<td><a href="/gigguide/{{$data_gig->id}}/delete" class="btn btn-danger btn-sm">Hapus</a></td>

					</tr>
					@endforeach
				</table>

				{{ $data_gigguide->links() }}
			</div>
		</div>

								<!-- Modal -->
								<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								  <div class="modal-dialog" role="document">
								    <div class="modal-content">
								      <div class="modal-header">
								        <h5 class="modal-title" id="exampleModalLabel">TAMBAH DATA JADWAL</h5>
								      </div>
								      <div class="modal-body">
								       <form action="/gigguide/create" method="POST">
								       {{csrf_field()}}

											 <div class="form-group">
											    <label for="exampleFormControlInput1">PENYANYI/BAND</label>
											    <input type="nama" name="gig_artis" class="form-control" id="exampleFormControlInput1" placeholder="Penyanyi/Band" required="required">
											  </div>

											    <div class="form-group">
											   <label for="exampleInputEmail1">LOKASI ACARA</label>
											    <textarea name="gig_lokasi" type="text" class="form-control" id="exampleControlTextArea1" rows="3" required="required"></textarea>
											  </div>

											   <div class="form-group">
											   <label for="exampleInputEmail1">WAKTU ACARA</label>
											    <textarea name="gig_waktu" type="text" class="form-control" id="exampleControlTextArea1" rows="3" required="required"></textarea>
											  </div>

											  <div class="form-group">
											   <label for="exampleFormControlSelect1">KETERANGAN</label>
											   <select name="gig_keterangan" class="form-control" id="exampleFormControlSelect1" required="required">
											   	<option value="Dilaksanakan">Dilaksanakan</option>
											   	<option value="Ditunda">Ditunda</option>
											   	<option value="Dibatalkan">Dibatalkan</option>
											   </select>
											  </div>

										     	 </div>
												      <div class="modal-footer">
												        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
												         <button type="submit" class="btn btn-primary">Tambahkan</button>
												     </form>
												 </div>
										     </div>
								      </div>
								    </div>
								  </div>
								</div>
				</div>
								
</body>
</html>

