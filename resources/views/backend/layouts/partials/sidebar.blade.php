<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar"> 
    <div class="image" style="text-align:center; padding:5px;">

    </div>
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <ul class="sidebar-menu" id="sildermenu_id">
           <li class="header">MAIN NAVIGATION</li>
                    <li @if(Request::segment('2')=='home') class="active" @endif>
                        <a href="{{ url('admin/home') }}">
                            <i class="fa fa-dashboard"></i>
                            <span>Home</span>
                        </a>
                    </li>
                    <!-- <li @if(Request::segment('2')=='setting') class="active" @endif>
                        <a href="{{ url('admin/setting') }}">
                            <i class="fa fa-cog"></i>
                            <span>Setting</span>
                        </a>
                    </li> -->
                    <li @if(Request::segment('2')=='customer') class="active" @endif>
                        <a href="{{ url('admin/customer') }}">
                            <i class="fa fa-user"></i>
                            <span>Create Customer</span>
                        </a>
                    </li>
                    <li @if(Request::segment('2')=='keycustomer') class="active" @endif>
                        <a href="{{ url('admin/keycustomer') }}">
                            <i class="fa fa-users"></i>
                            <span>Create Key</span>
                        </a>
                    </li>

                    <li @if(Request::segment('2')=='school') class="active" @endif>
                        <a href="{{ url('admin/school') }}">
                            <i class="fa fa-university"></i>
                            <span>Create School</span>
                        </a>
                    </li>
                    

                       <!-- <li @if(Request::segment('2')=='user') class="active" @endif>
                        <a href="{{ url('admin/user') }}">
                            <i class="fa fa-users"></i>
                            <span>User</span>
                        </a>
                    </li> -->
                   <!--  <li @if(Request::segment('2')=='category' || Request::segment('2')=='sub_category') class="active" @endif>
                       <a href="{{ url('admin/category') }}">
                            <i class="fa fa-tags"></i>
                            <span>Category</span>
                        </a>
                    </li> -->
                   <!--  <li @if(Request::segment('2')=='cms') class="active" @endif>
                       <a href="{{ url('admin/cms') }}">
                            <i class="fa fa-book"></i>
                            <span>CMS</span>
                        </a>
                    </li> -->
                    <!-- <li @if(Request::segment('2')=='testimonials') class="active" @endif>
                       <a href="{{ url('admin/testimonials') }}">
                            <i class="fa fa-list"></i>
                            <span>Testimonials</span>
                        </a>
                    </li> -->
                   <!-- 
                    <li @if(Request::segment('2')=='banner') class="active" @endif>
                       <a href="{{ url('admin/banner') }}">
                            <i class="fa fa-picture-o"></i>
                            <span>Banners</span>
                        </a>
                    </li> -->
                    <!-- <li>
                        <a href="javascript:">
                            <i class="fa fa-envelope"></i>
                            <span>Email Template</span>
                        </a>
                    </li> 
                    <li>
                        <a href="javascript:">
                            <i class="fa fa-bars"></i>
                            <span>Report</span>
                        </a>
                    </li>-->
                    <!-- <li @if(Request::segment('2')=='change_password') class="active" @endif>
                        <a href="{{ url('admin/change_password') }}">
                            <i class="fa fa-key"></i>
                            <span>Change Password</span>
                        </a>
                    </li> -->
                    <li>
                        <a href="{{ url('admin/logout') }}">
                            <i class="fa fa-sign-out"></i>
                            <span>Logout</span>
                        </a>
                    </li>
        </ul>
        <div style="height:70px;">&nbsp;</div>
    </section>
    <!-- /.sidebar -->
</aside>
