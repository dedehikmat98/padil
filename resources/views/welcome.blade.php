@extends('layouts.kami')

@section('content')

<!-- //navigation -->
    <!-- main-slider -->
    <div>
    <center>
        <img src="img/bgo.jpg" alt="" class="col-md-12" />
    </center>
    <!-- //main-slider -->
    <!-- //top-header and slider -->
    <!-- top-brands -->
    <div class="top-brands">
        <div class="container">
        <h2>Top selling offers</h2>
            
                <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                    
                    
                        

                        @php
                        $ket = App\Keterrangan::paginate(3);
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
                                                            <p><h4>{{$data->motorrrs->nama}}</h4></p>
                                                            
                                                            <p>Rp.{{$data->harga}},-<p/>
                                                        </div>
                                                        
                                                        </div>
                                                    </div>
                                                </figure>
                                            </div>
<!-- <Modal> -->
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
  <!-- <Modal> -->
                                        </div>
                                    </div>
                                </div>
                                 @endforeach
                            </div>
                        </div>
                            
                        
                    

            </div>
        </div>
    </div>
<!-- //top-brands -->
 <!-- Carousel
    ================================================== -->
    <!-- /.carousel -->   
<!--banner-bottom-->
                
<!--banner-bottom-->
<!--brands-->
   <!--  <div class="brands">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
        <li data-target="#myCarousel" data-slide-to="4"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
        <p><center><img src="images/brand/rb1.png" alt=" " class="img-responsive" width="500" height="250" /></center></p>
       
        </div>
        <div class="item">
        <p><center><img src="images/brand/rb2.png" alt=" " class="img-responsive" width="500" height="250" /></center></p>
         
        </div>
        <div class="item">
        <p><center><img src="images/brand/rb3.png" alt=" " class="img-responsive" width="500" height="250" /></center></p>
          
        </div>

        <div class="item">
        <p><center><img src="images/brand/rb4.jpg" alt=" " class="img-responsive" width="500" height="250" /></center></p>
         
        </div>

        <div class="item">
        <p><center><img src="images/brand/rb5.jpg" alt=" " class="img-responsive" width="500" height="250" /></center></p>
         
        </div>
      </div>
    
    </div>
    </div> -->
<!--//brands-->
<!-- new -->
    
<!-- //new -->

@endsection