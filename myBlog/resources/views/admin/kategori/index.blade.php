@extends('Layouts.admin')

@section('title','Admin | Kategori')

@section('content')
<div class="container-fluid">
			<header class="section-header">
				<div class="tbl">
					<div class="tbl-row">
						<div class="tbl-cell">
							<h2>Kategori</h2>
							<div class="subtitle">add category your post</div>
						</div>
					</div>
				</div>
				<form class="" action="{{route('kategori.store')}}" method="post">
					{{ csrf_field() }}
				<div class="form-group row">
						<label class="col-sm-2 form-control-label">Kategori</label>
						<div class="col-sm-10">
							<p class="form-control-static"><input type="text" class="form-control" name="kategori"  placeholder="tambah kategori"></p>
							<input type="submit" name="submit" class="btn btn-primary" value="tambah Kategori">
						</div>
					</div>
						</form>
			</header>
			<section class="card">
				<div class="card-block">
					<table id="example" class="display table table-striped table-bordered" cellspacing="0" width="100%">
						<thead>
						<tr>
							<th>No</th>
							<th>Nama Kategori</th>
							<th>Action</th>
						</tr>
						</thead>
						<tbody>
							@foreach ($kategori as $data)
						<tr>
							<td>{{$no++}}</td>
							<td>{{$data->nama_kategori}}</td>
							<td>
								<form action="{{route('kategori.destroy',$data->id)}}" method="post">
									{{ csrf_field() }}
									{{ method_field('DELETE') }}
									<input type="submit" name="hapus" value="hapus" onclick="return confirm('Apa Anda Yakin?');" class="btn btn-danger">
								</form>
							</td>
						</tr>
					@endforeach
						</tbody>
					</table>
				</div>
			</section>
		</div><!--.container-fluid-->
@endsection
