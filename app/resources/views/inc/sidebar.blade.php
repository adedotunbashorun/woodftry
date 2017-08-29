@if(auth()->user()->access_level == '1' || auth()->user()->access_level == '2')
    <section>
    <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- Menu -->
            <div class="menu">
                <div class="side-head">
                    <center><h5>QUICK LINKS</h5></center>
                </div>
                <ul class="list">
                    @if (Auth::check())
                    <li  class="active">
                        <a  href="{{ url('/dashboard') }}">
                          <i class="material-icons">dashboard</i>
                            <span>Dashboard</span>
                        </a>
                     </li>
                     <li>
                        <a href="{{ url('/view-item') }}">
                            <i class="material-icons">local_mall</i>
                            <span>Manage Goods</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/view-design') }}">
                            <i class="material-icons">brush</i>
                            <span>Manage Designs</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">group</i>
                            <span>Manage Staffs</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{ url('/view-users')}}" class="">
                                    <i class="material-icons">person</i>
                                    <span>View Users</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/view-carpenter')}}" class="">
                                    <i class="material-icons">gavel</i>
                                    <span>View Workers</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">person</i>
                            <span>Manage Client</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{ url('/view-client')}}" class="">
                                    <i class="material-icons">group</i>
                                    <span>View Client</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/view-client-order') }}" class="">
                                    <i class="material-icons">checklist</i>
                                    <span>View Client Request</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">account_balance</i>
                            <span>Floor Productions</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{ url('/view-inhouse') }}" class="">
                                    <i class="material-icons">description</i>
                                    <span>Carpenter Production</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/view-inhouse-laminate') }}" class="">
                                    <i class="material-icons">description</i>
                                    <span>Laminate Production</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ url('/semi-finished-1') }}">
                            <i class="material-icons">account_balance</i>
                            <span>Semi-Finished Goods</span>
                        </a> 
                    </li>
                    <li>
                        <a href="{{ url('/semi-finished-2') }}">
                            <i class="material-icons">account_balance</i>
                            <span>Semi-Finished (Sprayer & Upholstery)</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/stock') }}">
                            <i class="material-icons">storage</i>
                            <span>Finished Warehouse</span>
                        </a> 
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">history</i>
                            <span>History</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{ url('/history') }}" class="">
                                    <i class="material-icons">checklist</i>
                                    <span>Client Request History</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/stock_history') }}" class="">
                                    <i class="material-icons">checklist</i>
                                    <span>Floor Production History</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/sales_history') }}" class="">
                                    <i class="material-icons">checklist</i>
                                    <span>Delivery History</span>
                                </a>
                            </li>
                            <!--li>
                                <a href="{{ url('/order-track') }}" class="">
                                    <i class="material-icons">checklist</i>
                                    <span>Order History</span>
                                </a>
                            </li-->                            
                        </ul>
                    </li>
                    <li>
                        <a href="{{ url('/search') }}" class="">
                            <i class="material-icons">search</i>
                            <span>Search</span>
                        </a>
                    </li>
                    
                    @endif
                    
                    
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2017 <a href="javascript:void(0);">The Wood Factory ltd</a>.
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
    </section>
@elseif(auth()->user()->access_level == '3')
    <section>
    <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar"> 
            <!-- Menu -->
            <div class="menu">
                <div class="side-head">
                    <center><h5>QUICK LINKS</h5></center>
                </div>
                <ul class="list">
                    <li class="header">MENU</li>
                    @if (Auth::check())
                    <li  class="active">
                        <a  href="{{ url('/dashboard') }}">
                          <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                     </li>
                     <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">local_mall</i>
                            <span>Manage Goods</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{ url('/view-item') }}" class="">
                                    <i class="material-icons">view_headline</i>
                                    <span>View Items</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">brush</i>
                            <span>Manage Designs</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{ url('/view-design') }}" class="">
                                    <i class="material-icons">view_list</i>
                                    <span>View Designs</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">group</i>
                            <span>Manage Staffs</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{ url('/view-carpenter')}}" class="">
                                    <i class="material-icons">people</i>
                                    <span>View Carpenter</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">group</i>
                            <span>Manage Clients</span>
                        </a>
                        <ul class="ml-menu">
                            
                            <li>
                                <a href="{{ url('/view-client')}}" class="">
                                    <i class="material-icons">people</i>
                                    <span>View Client</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/view-client-order') }}" class="">
                                    <i class="material-icons">people</i>
                                    <span>View Client Order</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">history</i>
                            <span>History</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{ url('/history') }}" class="">
                                    <i class="material-icons">checklist</i>
                                    <span>Production History</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/stock_history') }}" class="">
                                    <i class="material-icons">checklist</i>
                                    <span>Stock History</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/sales_history') }}" class="">
                                    <i class="material-icons">checklist</i>
                                    <span>Sales History</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    
                    @endif
                    
                    
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2017 <a href="#">The Wood Factory ltd</a>.
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
    </section>
@else
     <section>
    <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <div class="side-head">
                    <center><h5>QUICK LINKS</h5></center>
                </div>
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MENU</li>
                    @if (Auth::check())
                    <li  class="active">
                        <a  href="{{ url('/dashboard') }}">
                          <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                     </li>
                     <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">local_mall</i>
                            <span>Manage Goods</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{ url('/add-item') }}" class="">
                                    <i class="material-icons">add_to_queue</i>
                                    <span>Add Item</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/view-item') }}" class="">
                                    <i class="material-icons">view_headline</i>
                                    <span>View Items</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">brush</i>
                            <span>Manage Designs</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{ url('/add-design') }}" class="">
                                    <i class="material-icons">library_add</i>
                                    <span>Add Design</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/view-design') }}" class="">
                                    <i class="material-icons">view_list</i>
                                    <span>View Designs</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">group</i>
                            <span>Manage Users</span>
                        </a>
                        <ul class="ml-menu">
                            
                            <li>
                                <a href="{{ url('/Carpenter') }}" class="">
                                    <i class="material-icons">person_add</i>
                                    <span>Add Carpenter</span>
                                </a>
                            </li>
                            
                            <li>
                                <a href="{{ url('/view-carpenter')}}" class="">
                                    <i class="material-icons">people</i>
                                    <span>View Carpenter</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">group</i>
                            <span>Manage Client</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{ url('/client-registration') }}" class="">
                                    <i class="material-icons">person_add</i>
                                    <span>Add Client</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/client-order') }}" class="">
                                    <i class="material-icons">person_add</i>
                                    <span>Add Client Order</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/view-client')}}" class="">
                                    <i class="material-icons">people</i>
                                    <span>View Client</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/view-client-order') }}" class="">
                                    <i class="material-icons">people</i>
                                    <span>View Client Order</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">storage</i>
                            <span>Stock Inventory</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{ url('/stock') }}" class="">
                                    <i class="material-icons">checklist</i>
                                    <span>Stock</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">history</i>
                            <span>History</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{ url('/history') }}" class="">
                                    <i class="material-icons">checklist</i>
                                    <span>Production History</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/stock_history') }}" class="">
                                    <i class="material-icons">checklist</i>
                                    <span>Stock History</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/sales_history') }}" class="">
                                    <i class="material-icons">checklist</i>
                                    <span>Sales History</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    
                    @endif
                    
                    
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2017 <a href="#">The Wood Factory ltd</a>.
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
    </section>
@endif