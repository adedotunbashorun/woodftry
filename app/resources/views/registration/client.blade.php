@extends('inc.layout')
@section('title','Client Registration')
@section('content')
    <section class="content">
        <div class="row">
            <div class="col-lg-6 col-md-6" style="margin-top: -10px;">
                <div class="pull-left" style="color:#16a085;">
                    <h4><i class="fa fa-home"></i> CLIENT</h4>
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
                <p>This page allows you to add clients to the company's register of clients.</p>
                <p>
                    <a href="{{ url('/view-client')}}"><button type="button" class="btn btn-warning" name="add_design"><i class="material-icons">arrow_back</i> Back To Clients </button></a>
                </p> 
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
                                                        <i class="material-icons">person_add</i> Add Client
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseOne_19" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne_19">
                                                <div class="panel-body">
                                                    <form method="POST" action="" target="">
                                                    {{ csrf_field() }}
                                                        <div class="row clearfix">
                                                            <div class="col-lg-12 col-md-6 col-sm-12">
                                                                <div class="form-group form-float">
                                                                    <label>Name</label>
                                                                    <div class="form-line">
                                                                        <input type="text" class="form-control" name="client_name" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                                <div class="form-group form-float">
                                                                    <label>Phone Number</label>
                                                                    <div class="form-line">
                                                                        <input type="tel" class="form-control" name="client_phone" minlength="11" maxlength="11">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                                <div class="form-group form-float">
                                                                    <label>Email</label>
                                                                    <div class="form-line">
                                                                        <input type="email" class="form-control" name="client_email">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                           
                                                            <div class="col-lg-12 col-md-6 col-sm-12">
                                                                <div class="form-group form-float">
                                                                    <label>Client Address</label>
                                                                    <div class="form-line">
                                                                        <input type="text" class="form-control" name="client_delivery_address" minlength="5" maxlength="255" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <button type="submit" class="btn btn-primary">Add Personnel<i class="material-icons">person</i></button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel">
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
    <script>
    function myFunction()
    {
     value1 = parseInt(document.getElementById("value1").value);
     value2 = parseInt(document.getElementById("value2").value);
        if(!value1==""&&!value2=="")
        {
         sum = value1 * value2;
         document.getElementById("amount").value = sum;
        }
    }
    function myFunction1()
    {
     amount = parseInt(document.getElementById("amount").value);
     deposit = parseInt(document.getElementById("deposit").value);
        if(!amount==""&&!deposit=="")
        {
         sub = amount - deposit;
         document.getElementById("balance").value = sub;
        }
    }
    </script>
    <!-- Jquery Core Js -->
    