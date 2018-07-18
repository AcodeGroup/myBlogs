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
  			</header>
        <div class="box-typical box-typical-padding">
          <form action="{{route('posting.store')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
					<div class="form-group row">
						<label class="col-sm-2 form-control-label">Judul</label>
						<div class="col-sm-10">
							<p class="form-control-static"><input type="text" class="form-control" name="judul" placeholder="Judul Posting"></p>
						</div>
					</div>
          <div class="form-group row">
						<label for="exampleSelect" class="col-sm-2 form-control-label">Kategori</label>
						<div class="col-sm-10">
							<select id="exampleSelect" name="kategori" class="form-control">
                @foreach ($kategori as $data)
                <option value="{{$data->nama_kategori}}">{{$data->nama_kategori}}</option>
                @endforeach
							</select>
						</div>
					</div>
          <div class="form-group row">
            <label class="col-sm-2 form-control-label">Gambar</label>
            <div class="col-sm-10">
              <p class="form-control-static"><input type="file" class="form-control btn btn-rounded btn-inline btn-primary-outline" name="gambar"></p>
            </div>
          </div>
          <div class="form-group row">
						<label for="exampleSelect" class="col-sm-2 form-control-label">isi Posting</label>
						<div class="col-sm-10">
							<textarea rows="4" class="form-control" name="isi" placeholder="isi Posting"></textarea>
						</div>
					</div>
          <input type="submit" class="btn btn-primary" value="Add New Post">
        </form>
        </div>
@endsection
