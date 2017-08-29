@extends('inc.layout')
@section('title','User Registration')
@section('content')
    <section class="content">
        <div class="row">
            <div class="col-lg-6 col-md-6" style="margin-top: -10px;">
                <div class="pull-left" style="color:#16a085;">
                    <h4><i class="fa fa-home"></i> PERSONNEL</h4>
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
            <hr/>
            <div class="col-lg-12">
                @include('inc.errors')
                @include('inc.success')
            </div>
        </div>
        <div class="card">
            <div class="header">
                <p>This page allows you to add personnels with some managerial and administrative access to this application in the company.</p>
                <p><a href="{{ url('/view-users') }}"><button class="btn btn-warning"><i class="material-icons">arrow_back</i> Back To Users </button></a></p>
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
                                            <div class="panel-heading" role="tab" id="headingOne_19">
                                                <h4 class="panel-title">
                                                    <a role="button" data-toggle="collapse" href="#collapseOne_19" aria-expanded="true" aria-controls="collapseOne_19">
                                                        <i class="material-icons">person_add</i> Add Administrators
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseOne_19" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne_19">
                                                <div class="panel-body">
                                                    <form method="POST" action="" target="">
                                                    {{ csrf_field() }}
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
                                                                        <input type="text" class="form-control" name="phone" minlength="11" maxlength="21" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                                <div class="form-group form-float">
                                                                    <label>Email</label>
                                                                    <div class="form-line">
                                                                        <input type="email" class="form-control" name="email" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                                <div class="form-group form-float">
                                                                    <label>Department</label>
                                                                    <div class="form-line">
                                                                        <select class="form-control show-tick" name="department" required>
                                                                            <option value=""> - - select - - </option>
                                                                            <option value="management">Management</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                                <div class="form-group form-float">
                                                                    <label>Level</label>
                                                                    <div class="form-line">
                                                                        <select class="form-control show-tick" name="access_level" required>
                                                                            <option value=""> - - select - - </option>
                                                                            <option value="1">CEO / MD</option>
                                                                            <option value="2">Manager</option>
                                                                            <option value="3">Inspector</option>
                                                                            <option value="4">Salesperson</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                                <div class="form-group form-float">
                                                                <label>Password</label>
                                                                    <div class="form-line">
                                                                        <input type="password" class="form-control" name="password" minlength="6" maxlength="15" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                                <div class="form-group form-float">
                                                                    <label>Confirm Password</label>
                                                                    <div class="form-line">
                                                                        <input type="password" class="form-control" name="password_confirmation" minlength="6" maxlength="15" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <button type="submit" class="btn btn-primary" name="add_user">Add Presonnel<i class="material-icons">person</i></button>
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
    <!-- Jquery Core Js -->
    