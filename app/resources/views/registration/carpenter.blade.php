{{ $title = "Add New Worker" }}
@extends('inc.layout')
@section('title','User Registration')
@section('content')
    <section class="content">
        <div class="row">
            <div class="col-lg-6 col-md-6" style="margin-top: -10px;">
                <div class="pull-left" style="color:#16a085;">
                    <h4><i class="fa fa-home"></i> ADD NEW WORKERS</h4>
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
            </div><hr>
            <div class="col-lg-12">
                @include('inc.errors')
                @include('inc.success')
            </div>
        </div>
        <div class="card">
            <div class="header">
                <p>This page allows to add the workers from the carpentry, upholstery, sprayer, and laminate department of the company.</p>
                <p><a href="{{ url('/view-carpenter')}}"><button class="btn btn-warning"> <i class="material-icons">arrow_back</i> Back to Workers</button></a></p>
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
                                            <form method="POST" action="" target="">
                                            {{ csrf_field() }}
                                                <div class="panel-heading" role="tab" id="headingTwo_19">
                                                    <h4 class="panel-title">
                                                        <a class="collapsed" role="button" data-toggle="collapse" href="#collapseTwo_19" aria-expanded="false" aria-controls="collapseTwo_19">
                                                            <i class="material-icons">person_add</i> Add Worker
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapseOne_19" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne_19">
                                                <div class="panel-body">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="card">
                                                            <div class="body">
                                                                <div class="row clearfix">
                                                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                                                        <div class="form-group form-float">
                                                                            <label>Name</label>
                                                                            <div class="form-line">
                                                                                <input type="text" class="form-control" name="name" required>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                                                        <div class="form-group form-float">
                                                                            <label>Phone Number</label>
                                                                            <div class="form-line">
                                                                                <input type="text" class="form-control" name="phone">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                                                        <div class="form-group form-float">
                                                                            <label>Email</label>
                                                                            <div class="form-line">
                                                                                <input type="email" class="form-control" name="email">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                                                        <div class="form-group form-float">
                                                                            <label>Sex</label>
                                                                                <input name="sex" type="radio" id="radio_1" value="Male" checked />
                                                                                <label for="radio_1"> Male</label>
                                                                                <input name="sex" type="radio" value="Female" id="radio_2" />
                                                                                <label for="radio_2"> Female</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                                                        <div class="form-group form-float">
                                                                            <label>State</label>
                                                                            <div class="form-line">
                                                                                <input type="text" class="form-control" name="state">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                                                        <div class="form-group form-float">
                                                                            <label>Department</label>
                                                                            <div class="form-line">
                                                                                <select class="form-control show-tick" name="department" required>
                                                                                    <option value=""> - - select - - </option>
                                                                                    <option value="carpentry">Carpentry</option>
                                                                                    <option value="spray">Spray</option>
                                                                                    <option value="upholstery">Upholstery</option>
                                                                                    <option value="laminate">Laminate</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                                                        <div class="form-group form-float">
                                                                            <label>Date Of Employment</label>
                                                                            <div class="form-line">
                                                                                <input type="date" class="form-control" name="employment_date" value="" placeholder="dd/mm/yyy">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <button type="submit" class="btn btn-primary"><i class="material-icons">gavel</i> Add Worker </button>
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
    