 <div id="left-sidebar" class="sidebar">
        <div class="navbar-brand">
            <a href="{{ url('admin/dashboard')}}">
                <!-- <img src="http://www.wrraptheme.com/templates/hexabit/html/assets/images/icon-dark.svg" alt="HexaBit Logo" class="img-fluid logo"> -->
                <span>GDL GLOBAL</span></a>
            <button type="button" class="btn-toggle-offcanvas btn btn-sm btn-default float-right"><i class="lnr lnr-menu fa fa-chevron-circle-left"></i></button>
        </div>
        <div class="sidebar-scroll">
            <div class="user-account">
                <!-- <div class="user_div">
                    <img src="http://www.wrraptheme.com/templates/hexabit/html/assets/images/user.png" class="user-photo" alt="User Profile Picture">
                </div> -->
                <div class="dropdown">
                    <span>Welcome,</span>
                    <a href="javascript:void(0);" class="dropdown-toggle user-name" data-toggle="dropdown"><strong>{{ Auth::guard('admin')->user()->name }}</strong></a>
                    <ul class="dropdown-menu dropdown-menu-right account">
                        <li><a href="{{ url('admin/profile')}}"><i class="icon-user"></i>My Profile</a></li>
                        <li><a href="{{ url('admin/change-password')}}"><i class="icon-envelope-open"></i>Change Password</a></li>
                        <!-- <li><a href="javascript:void(0);"><i class="icon-settings"></i>Settings</a></li> -->
                        <li class="divider"></li>
                        <li><a href="{{ url('admin/logout')}}"><i class="icon-power"></i>Logout</a></li>
                    </ul>
                </div>
            </div>  
            <nav id="left-sidebar-nav" class="sidebar-nav">
                <ul id="main-menu" class="metismenu">


                    <li class="{{ isset($page_title) && $page_title=='Dashboard' ? 'active':''}}"><a href="{{ url('admin/dashboard')}}"><i class="icon-home"></i><span>Dashboard</span></a></li>



                    <li class="{{ isset($page_title) && $page_title=='Callback' || $page_title=='Callback create' 
                    || $page_title=='Callback edit' || $page_title=='Callback details' ? 'active':''}}"><a href="{{ url('admin/callback')}}"><i class="icon-list"></i><span>Callback</span></a></li>


                      <li class="{{ isset($page_title) && $page_title=='Category' || $page_title=='Category create' 
                    || $page_title=='Category edit' || $page_title=='Category details' ? 'active':''}}"><a href="{{ url('admin/category')}}"><i class="icon-list"></i><span>Category</span></a></li>


                    <li class="{{ isset($page_title) && $page_title=='Services' || $page_title=='Service create' 
                    || $page_title=='Service edit' || $page_title=='Services details' ? 'active':''}}"><a href="{{ url('admin/services')}}"><i class="icon-list"></i><span>Services</span></a></li>


                    <li class="{{ isset($page_title) && $page_title=='Projects' || $page_title=='Project create' 
                    || $page_title=='Project edit' || $page_title=='Services details' ? 'active':''}}"><a href="{{ url('admin/projects')}}"><i class="icon-list"></i><span>Projects</span></a></li>



                      <li class="{{ isset($page_title) && $page_title=='Brands' || $page_title=='Brand create' 
                    || $page_title=='Brand edit' || $page_title=='Brand details' ? 'active':''}}"><a href="{{ url('admin/brands')}}"><i class="icon-list"></i><span>Brands</span></a></li>

                    <li class="{{ isset($page_title) && $page_title=='News' || $page_title=='News create' 
                    || $page_title=='News edit' || $page_title=='News details' ? 'active':''}}"><a href="{{ url('admin/news')}}"><i class="icon-list"></i><span>News</span></a></li>



                    <li class="{{ isset($page_title) && $page_title=='Testimonials' || $page_title=='Testimonial create' 
                    || $page_title=='Testimonial edit' || $page_title=='Testimonial details' ? 'active':''}}"><a href="{{ url('admin/testimonials')}}"><i class="icon-list"></i><span>Testimonials</span></a></li>



                     <li class="{{ isset($page_title) && $page_title=='Contact' || $page_title=='Contact create' 
                    || $page_title=='Contact edit' || $page_title=='Contact details' ? 'active':''}}"><a href="{{ url('admin/contacts')}}"><i class="icon-list"></i><span>Contact</span></a></li>


                      <li class="{{ isset($page_title) && $page_title=='Setting' || $page_title=='Setting create' 
                    || $page_title=='Setting edit' || $page_title=='Setting details' ? 'active':''}}"><a href="{{ url('admin/setting')}}"><i class="icon-list"></i><span>Setting</span></a></li>


                   <!--  <li class="{{ isset($page_title) && $page_title=='Client' || $page_title=='Create client' 
                    || $page_title=='Client edit' || $page_title=='Client details' ? 'active':''}}"><a href="{{ url('admin/client')}}"><i class="icon-user"></i><span>Client</span></a></li> -->

                   


                   <!--  <li><a href="app-chat.html"><i class="icon-bubbles"></i><span>Chat</span></a></li>
                    <li>
                        <a href="#Maps" class="has-arrow"><i class="icon-map"></i><span>Maps</span></a>
                        <ul>
                            <li><a href="map-google.html">Google Map</a></li>
                            <li><a href="map-jvectormap.html">jVector Map</a></li>
                            <li><a href="map-yandex.html">Yandex Map</a></li>                            
                        </ul>
                    </li> -->
                </ul>
            </nav>     
        </div>
    </div>