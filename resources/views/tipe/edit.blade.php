@extends('layouts.app')
@section('content')

<div class="container">
  <div class="row">
    <div class="col-xs-12">
      <div class="page-title-box">
              <h4 class="page-title">Edit </h4>
              <ol class="breadcrumb p-0 m-0">
                  
                  <li>
                      <a href="{{ route('Tipe.index') }}">Tipe </a>
                  </li>
                  <li class="active">
                     Edit Merk
                  </li>
              </ol>
              <div class="clearfix"></div>
          </div>
    </div>
  </div>
  <form method="post" action="{{route('Tipe.update',$tipe->id) }}" id="form-guru" enctype="multipart/form-data" files="true">
    <input type="hidden" name="_method" value="PATCH">
    {{ csrf_field() }}
    <div class="row">
      <div class="col-xs-9">
        <div class="card-box">
          <div class="row">

            <div class="col-md-12">
              <div class="form-group">
                <label class="control-label">Nama</label>
                <input type="text" name="namatipe" class="form-control" required="" value="{{$tipe->namatipe}}">
                <span class="help-block"></span>
              </div>
            </div>

            
          
          </div>
      </div>

      <div class="col-xs-12">
        <div class="card-box">
          <div class="row">
            <div class="col-md-12">
              <hr>
              <div class="pull-right">
                <button class="btn btn-default btn-bordered waves-effect waves-light" type="reset">Reset</button>
                <button class="btn btn-primary btn-bordered waves-effect waves-light" type="submit">Simpan</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>
</div>

@endsection