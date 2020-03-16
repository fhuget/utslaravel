<!DOCTYPE html>
<html>
	<head>
		<title>UPDATE DATA JADWAL MANGGUNG</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	</head>
<body>
	<div class="container">			
		<div class="row">
		<div class="col-lg-12">	
		<h1>UPDATE DATA JADWAL MANGGUNG</h1>

		 <form action="/gigguide/{{$gigguide->id}}/update" method="POST">
			{{csrf_field()}}

			<div class="form-group">
				<label for="exampleFormControlInput1">PENYANYI/BAND</label>
				<input type="nama" name="gig_artis" class="form-control" id="exampleFormControlInput1"required="required" value="{{$gigguide->gig_artis}}">
			</div>

			<div class="form-group">
				<label for="exampleInputEmail1">LOKASI ACARA</label>
				<textarea name="gig_lokasi" type="text" class="form-control" id="exampleControlTextArea1" rows="3" required="required" value="{{$gigguide->gig_lokasi}}"></textarea>
			</div>

			<div class="form-group">
				<label for="exampleInputEmail1">WAKTU ACARA</label>
				<textarea name="gig_waktu" type="text" class="form-control" id="exampleControlTextArea1" rows="3" required="required" value="{{$gigguide->gig_waktu}}"></textarea>
			</div>

			<div class="form-group">
				<label for="exampleFormControlSelect1">KETERANGAN</label>
				<select name="gig_keterangan" class="form-control" id="exampleFormControlSelect1" required="required" value="{{$gigguide->gig_keterangan}}">
				<option value="Dilaksanakan">Dilaksanakan</option>
				<option value="Ditunda">Ditunda</option>
				<option value="Dibatalkan">Dibatalkan</option>
				</select>
			</div>

					</div>
						<div class="modal-footer">
						<a href="/gigguide"><button type="button" class="btn btn-secondary">Kembali</button></a>
							<button type="submit" class="btn btn-warning">Update</button>
							</form>
					</div>
		</div>
</div>
								
</body>
</html>

