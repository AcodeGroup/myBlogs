@extends('Layouts.admin')

@section('title','Admin | Posting')

@section('content')
<div class="container-fluid">
			<header class="section-header">
				<div class="tbl">
					<div class="tbl-row">
						<div class="tbl-cell">
							<h2>Posting</h2>
							<div class="subtitle">add your post</div>
						</div>
					</div>
				</div>
				<a href="{{route('posting.create')}}" class="btn btn-primary">Tambah Posting</a>
			</header>
			<section class="card">
				<div class="card-block">
					<table id="example" class="display table table-striped table-bordered" cellspacing="0" width="100%">
						<thead>
						<tr>
							<th>No</th>
							<th>Nama Kategori</th>
              <th>Judul</th>
							<th>Action</th>
						</tr>
						</thead>
						<tbody>
							@foreach ($posting as $data)
						<tr>
							<td>{{$no++}}</td>
							<td>{{$data->nama_kategori}}</td>
              <td><a href="{{route('posting.show',$data->id)}}">{{$data->judul_post}}</a></td>
							<td>
                <a href="{{route('posting.edit',$data->id)}}" class="btn btn-succes">EDIT</a>
								<form action="{{route('posting.destroy',$data->id)}}" method="post">
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
