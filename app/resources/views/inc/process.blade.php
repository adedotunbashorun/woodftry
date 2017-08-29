<div class="row clearfix"   id="upstake" style=" display: none;">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <form method="POST" action="" target="">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
             @include('inc.errors')
             @include('inc.success')
                <div class="row clearfix">
                    <center><h4>Send Upholstery Request</h4><hr/></center>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <select class="form-control show-tick" name="upholstery_id" required>
                                    <option value=""> Upholserer Name </option>
                                    @foreach($ups as $up)
                                        <option value="{{ $up->id }}">{{ $up->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="number" class="form-control" name="quantity" required>
                                <label class="form-label">Quantity to be taken</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" value="{{ $orders->current_quantity }}" class="form-control">
                                <label class="form-label">Current Quantity</label>
                            </div>
                        </div>
                    </div>
                </div>
                <button name="Upholstery" type="submit" class="btn btn-warning"><i class="material-icons">add_circle</i>
                    Proceed To Upholstery
                </button>
                <input type="hidden" value="{{ $orders->finished_quantity - $orders->upholstery_quantity }}" name="total" >
            </form>        
        </div>
    </div>


    <div class="row clearfix"   id="spraytake" style="display: none;">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <form method="POST" action="" target="">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
             @include('inc.errors')
             @include('inc.success')
                <div class="row clearfix">
                    <center><h4>Send Sprayer Request</h4><hr/></center>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <select class="form-control show-tick" name="sprayer_id" required>
                                    <option value=""> Sprayer Name </option>
                                    @foreach($sprays as $spray)
                                        <option value="{{ $spray->id }}">{{ $spray->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="number" class="form-control" name="quantity" required>
                                <label class="form-label">Quantity taken</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" value="{{ $orders->current_quantity }}" class="form-control">
                                <label class="form-label">Quantity taken</label>
                            </div>
                        </div>
                    </div>
                </div>
                <button name="Upholstery" type="submit" class="btn btn-warning"><i class="material-icons">add_circle</i>
                    Proceed To Sprayer
                </button>
            </form>             
        </div>
    </div>

    <div class="row clearfix" id="proctrack" style="display: none;">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <table class="table table-bordered table-striped table-hover dataTable js-exportable ">
                <thead class="bg-blue">
                    <tr>
                        <th>S/N</th>
                        <th>Product Key</th>
                        <th>Sales Rep Name</th>
                        <th>Quantity</th>
                        <th>Quantity Taken By upholstery</th>
                        <th>Quantity Taken By Sprayer</th>
                        <th>Stock Quantity</th>
                        <th>Completed Production</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <input type="hidden" name="" value="{{ $counter=1 }}">
                <tbody>

                    <tr>
                        <td>{{ $counter++ }}</td>
                        <td>{{ $orders->product_key}}</td>
                        <td>{{ $users->name }}</td>
                        <td>{{ $orders->finished_quantity }}</td>
                        <td>{{ $orders->upholstery_quantity }}</td>
                        <td>{{ $orders->sprayer_quantity }}</td>
                        <td>{{ $orders->total }}</td>
                        <td>
                             <form action="" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('PATCH') }}
                            <input type="text" class="form-control" name="completed" required>
                        </td>
                        <td>
                            
                            <input type="hidden" name="name_id" value="{{ $orders->id }}">
                            <button type="submit" class="btn btn-sm btn-primary pull-right " onclick="return confirm('Are you sure this goods are ready to be taken to the where house?')">Confirmed </button>
                            </form>
                        </td>
                    </tr>
                </tbody>
            </table>  
        </div>
    </div>
</div>