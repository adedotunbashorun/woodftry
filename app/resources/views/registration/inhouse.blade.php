{{ $title = "View All In-house Order" }}
@extends('inc.layout')
@section('title','In House Order')
@section('content')
    <section class="content">
        <div class="row">
            <div class="col-lg-6 col-md-6" style="margin-top: -10px;">
                <div class="pull-left" style="color:#16a085;">
                    <h4><i class="fa fa-home"></i> FLOOR ORDER (Carpenter)</h4>
                </div>
            </div>
            <div class="col-lg-6 col-md-6" align="">
                <div class="pull-right">
                    <span class="text-primary glyphicon glyphicon-calendar">
                    <?php
                        $Today = date('y:m:d');
                        $new = date('l, F d, Y', strtotime($Today));
                        echo $new;
                    ?>
                    </span>
                </div>
            </div>
            <hr>
            <div class="col-lg-12">
                @include('inc.errors')
                @include('inc.success')
            </div>
        </div>
        <div class="card">
            <div class="header">
                <p>This page allows you to add inhouse orders that are of wood material, and requires the expertise of the carpenter, upholsterer / sprayer</p>
                <p><a href="{{ url('/view-inhouse') }}"><button class="btn btn-warning">Return To Previous Page <i class="material-icons">arrow_back</i></button></a></p>
            </div>
        </div>
            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">
                            <form method="POST" action="" target="">
                            {{ csrf_field() }}               
                                <div class="row clearfix">
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="form-group form-float">
                                            <label>Client Name</label>
                                            <div class="form-line">
                                                <select class="form-control show-tick" name="client_id" required>
                                                    <option value=""> - - select - - </option>
                                                @foreach($clients as $client)
                                                    <option value="{{ $client->id }}">{{ $client->client_name }}</option>
                                                @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="form-group form-float">
                                            <label>Carpenter Name</label>
                                            <div class="form-line">
                                                <select class="form-control show-tick" name="carpenter_id" required>
                                                    <option value=""> - - select - - </option>
                                                @foreach($carps as $carp)
                                                    <option value="{{ $carp->id }}">{{ $carp->name }}</option>
                                                @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="form-group form-float">
                                            <label>Item Type</label>
                                            <div class="form-line">
                                                <select class="form-control show-tick" id="item-type" name="item_type" required>
                                                    <option value=""> - - select - - </option>
                                                    @foreach($items as $item)
                                                        <option value="{{ $item->item_code_name }}">{{ $item->item_code_name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="form-group form-float">
                                            <label>Item Size / Description</label>
                                            <div class="form-line">
                                                <select class="form-control show-tick description" name="item_size" required>
                                                    <option value=""> - - select - - </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="form-group form-float">
                                            <label>Item Ref</label>
                                            <div class="form-line">
                                                <select class="form-control show-tick" disabled="disabled">
                                                    <option value=""> Auto-selected </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="form-group form-float">
                                            <label>Design Name</label>
                                            <div class="form-line">
                                                <select class="form-control show-tick" name="design_ref" required>
                                                    <option value=""> - - select - - </option>
                                                    @foreach($designs as $design)
                                                        <option value="{{ $design->design_ref }}">{{ $design->design_name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="form-group form-float">
                                            <label>Quantity</label>
                                            <div class="form-line">
                                                <input type="text" class="form-control" id="value1" class="value" name="quantity" onkeyup="myFunction()" required>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="form-group form-float">
                                            <label>Special Specification</label>
                                            <div class="form-line">
                                                <input type="text" class="form-control"  name="specification" >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix row">
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <button type="submit" class="btn btn-primary" >Add New Carpenter Floor Order <i class="material-icons">fiber_new</i></button>
                                    </div>
                                </div>
                            </form>             
                        </div>
                    </div>
                </div>
            </div>
            <!-- end of widgets -->
        </div>
    </section>
    @endsection