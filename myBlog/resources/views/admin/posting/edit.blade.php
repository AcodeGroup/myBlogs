@extends('Layouts.admin')

@section('title','Admin | Posting')

@section('content')
  <div class="container-fluid">
  			<header class="section-header">
  				<div class="tbl">
  					<div class="tbl-row">
  						<div class="tbl-cell">
  							<h2>Show Posting</h2>
  							<div class="subtitle">add your post</div>
  						</div>
  					</div>
  				</div>
  			</header>
        <div class="box-typical box-typical-padding">
          @foreach ($posting as $data)
          <form action="{{route('posting.update',$data->id)}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
          <div class="form-group row">
						<label class="col-sm-2 form-control-label">Judul</label>
						<div class="col-sm-10">
							<p class="form-control-static"><input type="text" class="form-control" name="judul" value="{{$data->judul_post}}" placeholder="Judul Posting"></p>
						</div>
					</div>
          <div class="form-group row">
						<label for="exampleSelect" class="col-sm-2 form-control-label">Kategori</label>
						<div class="col-sm-10">
							<select id="exampleSelect" name="kategori" class="form-control">
                <option value="{{$data->nama_kategori}}">{{$data->nama_kategori}}</option>
							</select>
						</div>
					</div>
          <div class="form-group row">
            <label class="col-sm-2 form-control-label">Gambar</label>
            <div class="col-sm-10">
              <input type="file" name="gambar" class="form-control btn btn-rounded btn-inline btn-primary-outline">
            </div>
          </div>
          <div class="form-group row">
						<label for="exampleSelect" class="col-sm-2 form-control-label">isi Posting</label>
						<div class="col-sm-10">
							<textarea rows="4" class="form-control" name="isi" placeholder="isi Posting">{{$data->isi_post}}</textarea>
						</div>
					</div>
          @endforeach
          <input type="submit" class="btn btn-primary" value="Update Post">
        </form>
        </div>
@endsection
