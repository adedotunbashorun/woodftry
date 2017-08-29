{{ $title = "Generate Report" }}
@extends('inc.layout')
@section('title','User Registration')
@section('content')
    <section class="content">  
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6" style="margin-top: -10px;">
                    <div class="pull-left" style="color:#16a085;">
                        <h4><i class="fa fa-home"></i> SEARCH (REPORT GENERATION)</h4>
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
            </div><hr>
            <div class="card">
                <div class="header">
                    <p>This page allows you to query your database for either the occurence of a single parameter or list of parameters.</p>
                </div>
            </div>
            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-xs-12 ol-sm-12 col-md-12 col-lg-12">
                                    <div class="panel-group full-body" id="accordion_19" role="tablist" aria-multiselectable="true">
                                        
                                        <div class="panel">
                                            <form method="POST" action="{{ url('/search_result') }}">
                                            {{ csrf_field() }}
                                            @include('inc/errors')
                                             @include('inc/success')
                                                <div class="panel-heading" role="tab" id="headingTwo_19">
                                                    <h4 class="panel-title bg-blue">
                                                        <a class="collapsed" role="button" data-toggle="collapse" href="#collapseTwo_19" aria-expanded="false" aria-controls="collapseTwo_19">
                                                            <i class="material-icons">search</i> Generate Report
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapseOne_19" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne_19">
                                                <div class="panel-body">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="card">
                                                            <div class="body">
                                                                <div class="row clearfix">
                                                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                                                        <div class="form-group form-float">
                                                                            <div class="form-line">
                                                                                <label>Carpenter Name</label>
                                                                                <select class="form-control show-tick" name="carps_name" >
                                                                                    <option value=""> - - Select - -</option>
                                                                                    @foreach($carps as $carp)
                                                                                        <option value="{{ $carp->id }}">{{ $carp->name }}</option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                                                        <div class="form-group form-float">
                                                                            <div class="form-line">
                                                                                <label>Item Name</label>
                                                                                <select class="form-control show-tick" name="item_type" >
                                                                                    <option value=""> - - Select - -</option>
                                                                                    @foreach($items as $item)
                                                                                        <option value="{{ $item->item_code_name }}">{{ $item->item_code_name }}</option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                                                        <div class="form-group form-float">
                                                                            <div class="form-line">
                                                                                <label>Design Name</label>
                                                                                <select class="form-control show-tick" name="design_name" >
                                                                                    <option value=""> - - Select - -</option>
                                                                                    @foreach($designs as $design)
                                                                                        <option value="{{ $design->design_ref }}">{{ $design->design_name }}</option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                                                        <div class="form-group form-float">
                                                                            <div class="form-line">
                                                                                <label>Dated From</label>
                                                                                <select class="form-control show-tick" name="from" >
                                                                                    <option value=""> - - Select - -</option>
                                                                                    @foreach($orders as $in)
                                                                                        <option value="{{ $in->created_at }}">{{ $in->created_at }}</option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                                                        <div class="form-group form-float">
                                                                            <div class="form-line">
                                                                                <label>Dated To</label>
                                                                                <select class="form-control show-tick" name="to" >
                                                                                    <option value=""> - - Select - -</option>
                                                                                    @foreach($orders as $in)
                                                                                        <option value="{{ $in->created_at }}">{{ $in->created_at }}</option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <button type="submit" class="btn btn-primary pull-right"><i class="material-icons">search</i> Search </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end of widgets -->
        </div>
    </section>
    @endsection
    <!-- Jquery Core Js -->
    