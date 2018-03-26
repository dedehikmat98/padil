@extends('layouts.app')
@section('content')

<div class="container">
  <div class="row">
    <div class="col-xs-12">
      <div class="page-title-box">
              <h4 class="page-title">Tambah Merek </h4>
              <ol class="breadcrumb p-0 m-0">
                  
                  <li>
                      <a href="{{ route('Motor.index') }}">Merek </a>
                  </li>
                  <li class="active">
                      Tambah Merek
                  </li>
              </ol>
              <div class="clearfix"></div>
          </div>
    </div>
  </div>
  <form method="post" action="{{route('Motor.store') }}" id="form-guru" enctype="multipart/form-data" files="true">
    {{ csrf_field() }}
    <div class="row">
      <div class="col-xs-9">
        <div class="card-box">
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label class="control-label">Nama</label>
                <input type="text" name="nama" class="form-control" placeholder="" required="">
                <span class="help-block"></span>
              </div>
            </div>

            <div class="col-md-12">
              <div class="form-group">
                <label class="control-label">Merek</label>
                <select name="mereks_id" class="form-control" required="">
                      @foreach($merek as $data)
                      <option value="{{$data->id}}">
                        {{$data->namamerek}}
                      </option>
                      @endforeach
                    </select>
                <span class="help-block"></span>
              </div>
            </div>

           <div class="col-md-12">
              <div class="form-group">
                <label class="control-label">Tipe</label>
                <select name="tipes_id" class="form-control" required="">
                      @foreach($tipe as $data)
                      <option value="{{$data->id}}">
                        {{$data->namatipe}}
                      </option>
                      @endforeach
                    </select>
                <span class="help-block"></span>
              </div>
            </div>

            <div class="col-md-12">
              <div class="form-group">
                <label class="control-label">Foto<span class="">*</span></label>
                <input type="file" name="foto" class="form-control" >
                <span class="help-block"></span>
              </div>
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
                <button class="btn btn-primary btn-bordered waves-effect waves-light" type="submit"><i class="fa fa-save"> Simpan</i></button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>
</div>

@endsection