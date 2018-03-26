@extends('layouts.kami')

@section('content')



	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="/"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Tipeee</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->

	
			@php
                        $tipe = App\Tipe::all();
                        @endphp
	<div class="products">
		<div class="container">
			<div class="col-md-4 products-left">
				<div class="categories">
					<h2>Tipe Motor</h2>
					<ul class="cate">
						@foreach($tipe as $data)
						<li><a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i>{{$data->namatipe}}</a></li>
						@endforeach
						

					</ul>
				</div>																																												
			</div>
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
                                                            <a href="#"><img title=" " alt=" " src="{{ asset('/img/'.$data->motorrrs->foto.'') }}" width="150" height="150" /></a>        
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
                                 @endforeach
                            </div>
			<div class="clearfix"> </div>
		</div>
	</div>


@endsection