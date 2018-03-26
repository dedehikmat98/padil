@extends('layouts.kami')

@section('content')

@php
                        $ket = App\Keterrangan::all();
                        @endphp
                        @foreach($filter as $data)
                            <div class="agile_top_brands_grids">
                                <div class="col-md-4 top_brand_left">
                                    <div class="hover14 column">
                                        <div class="agile_top_brand_left_grid">
                                            <div class="agile_top_brand_left_grid_pos">
                                                <img src="images/offer.png" alt=" " class="img-responsive" />
                                            </div>
                                            <div class="agile_top_brand_left_grid1">
                                                <figure>
                                                    <div class="snipcart-item block" >
                                                        <div class="snipcart-thumb">
                                                            <center><img title=" " data-toggle="modal" data-target="#{{$data->id}}" alt=" " src="{{ asset('/img/'.$data->foto.'') }}" width="150" height="150" /></center>        
                                                            <p>{{$data->nama}}</p>
                                                            <h4>{{$data->harga}}</h4>
                                                        </div>
                                                        
                                                        </div>
                                                    </div>
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade" id="{{$data->id}}" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">{{$data->nama}},-</h4>
        </div>
        <div class="modal-body">

            <center><img title=" " data-toggle="modal" data-target="#{{$data->id}}" alt=" " src="{{ asset('/img/'.$data->foto.'') }}" width="150" height="150" />
                <p><h4>Rp.{{$data->harga}}</h4></p>
                <p>{!! $data->desk !!}</p>
            </center>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
                                 @endforeach
@endsection