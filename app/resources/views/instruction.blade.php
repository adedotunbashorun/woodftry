<div class="row clearfix">
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header bg-blue">
                                <h2><form action="{{ url('/install') }}" method="POST">
                                            {{ csrf_field() }}
                                            <button class="btn btn-sm btn-primary pull-right" >Continue</button>
                                            </form>
                                </h2>
                            </div>