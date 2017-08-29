@extends('inc.layout')
@section('title','Add Goods')
@section('content')
    <section class="content">
        <div class="row">
            <div class="col-lg-6 col-md-6" style="margin-top: -10px;">
                <div class="pull-left" style="color:#16a085;">
                    <h4><i class="fa fa-home"></i> GOODS ITEMS</h4>
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
                <p>This page allows you to add new goods item the company produces.</p>
                <p><a href="{{ url('/view-item') }}"><button class="btn btn-warning"> <i class="material-icons">arrow_back</i> Back To Goods</button></a></p>
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
                                        <div class="panel panel-col-default">
                                            <div class="panel-heading" role="tab" id="headingOne_19">
                                                <h4 class="panel-title">
                                                    <a role="button" data-toggle="collapse" href="#collapseOne_19" aria-expanded="true" aria-controls="collapseOne_19">
                                                        <i class="material-icons">add_to_queue</i> Add a Single Item
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseOne_19" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne_19">
                                                <div class="panel-body">
                                                    <form method="POST" action="" target="">
                                                    {{ csrf_field() }}
                                                         @include('inc.errors')
                                                         @include('inc.success')
                                                        <div class="row clearfix">
                                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                                <div class="form-group form-float">
                                                                    <label>Name</label>
                                                                    <div class="form-line">
                                                                        <input type="text" class="form-control" name="item_name">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                                <div class="form-group form-float">
                                                                    <label>Type</label>
                                                                    <div class="form-line">
                                                                        <input type="text" class="form-control" name="item_code_name">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                                <div class="form-group form-float">
                                                                    <label>Reference</label>
                                                                    <div class="form-line">
                                                                        <input type="text" class="form-control" name="item_ref">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <button type="submit" class="btn btn-primary pull-right" name="add_goods">Add <i class="material-icons">add</i></button>
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
                </div>
            </div>
            <!-- end of widgets -->
        </div>
    </section>
@endsection