 <div id="left-sidebar" class="sidebar">
        <div class="navbar-brand">
            <a href="{{ url('dashboard')}}"><img src="http://www.wrraptheme.com/templates/hexabit/html/assets/images/icon-dark.svg" alt="HexaBit Logo" class="img-fluid logo"><span>GDL GLOBAL</span></a>
            <button type="button" class="btn-toggle-offcanvas btn btn-sm btn-default float-right"><i class="lnr lnr-menu fa fa-chevron-circle-left"></i></button>
        </div>
        <div class="sidebar-scroll">
            <div class="user-account">
                <!-- <div class="user_div">
                    <img src="http://www.wrraptheme.com/templates/hexabit/html/assets/images/user.png" class="user-photo" alt="User Profile Picture">
                </div> -->
                <div class="dropdown">
                    <span>Welcome,</span>
                    <a href="javascript:void(0);" class="dropdown-toggle user-name" data-toggle="dropdown"><strong>{{ Auth::user()->name }}</strong></a>
                    <ul class="dropdown-menu dropdown-menu-right account">
                        <li><a href="{{ url('profile')}}"><i class="icon-user"></i>My Profile</a></li>
                        <li><a href="{{ url('change-password')}}"><i class="icon-envelope-open"></i>Change Password</a></li>
                        <!-- <li><a href="javascript:void(0);"><i class="icon-settings"></i>Settings</a></li> -->
                        <li class="divider"></li>
                        <li><a href="{{ url('logout')}}"><i class="icon-power"></i>Logout</a></li>
                    </ul>
                </div>
            </div>  
            <nav id="left-sidebar-nav" class="sidebar-nav">
                <ul id="main-menu" class="metismenu">


                    <li class="{{ isset($page_title) && $page_title=='Dashboard' ? 'active':''}}"><a href="{{ url('dashboard')}}"><i class="icon-home"></i><span>Dashboard</span></a></li>

                 <!--    <li class="{{ isset($page_title) && $page_title=='Products' || $page_title=='Product create' 
                    || $page_title=='Product edit' || $page_title=='Product details' ? 'active':''}}"><a href="{{ url('product')}}"><i class="icon-envelope"></i><span>Product</span></a></li>

                    <li class="{{ isset($page_title) && $page_title=='Client' || $page_title=='Create client' 
                    || $page_title=='Client edit' || $page_title=='Client details' ? 'active':''}}"><a href="{{ url('client')}}"><i class="icon-envelope"></i><span>Client</span></a></li>
 -->
                    <li class="{{ isset($page_title) && $page_title=='Stocks' || $page_title=='Create clientg' 
                    || $page_title=='Client editg' || $page_title=='Client detailsg' ? 'active':''}}"><a href="{{ url('stock')}}"><i class="icon-envelope"></i><span>Stocks</span></a></li>


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