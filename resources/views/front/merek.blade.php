@extends('layouts.kami')

@section('content')



	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="/"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Merek</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->

	<div class="products">
		<div class="container">
			@php
                        $merek = App\Merek::all();
                        @endphp



                        <center>
                            @foreach($merek as $data)
                            <a href="">{{$data->namamerek}}</a>
                            @endforeach

                        </center>
			<!-- <div class="col-md-4 products-left">
				<div class="categories">
					<h2>Merek Motor</h2>
					<ul class="cate">
						@foreach($merek as $data)
						<li><a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i>{{$data->namamerek}}</a></li>
						@endforeach
					</ul>
				</div>					
			</div> -->
			<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                    
                    
                        

                        @php
                        $ket = App\Keterrangan::all();
                        @endphp
                        @foreach($ket as $data)
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
                                                            <center><img title=" " data-toggle="modal" data-target="#{{$data->id}}" alt=" " src="{{ asset('/img/'.$data->motorrrs->foto.'') }}" width="150" height="150" /></center>        
                                                            <p>{{$data->motorrrs->nama}}</p>
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
          <h4 class="modal-title">{{$data->motorrrs->nama}},-</h4>
        </div>
        <div class="modal-body">

            <center><img title=" " data-toggle="modal" data-target="#{{$data->id}}" alt=" " src="{{ asset('/img/'.$data->motorrrs->foto.'') }}" width="150" height="150" />
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
                            </div>
                        </div>
            </div>
			<div class="clearfix"> </div>
		</div>
	</div>


@endsection