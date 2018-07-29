<div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="{{asset('public/admin/asset')}}//images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>{{ Auth::user()->name }}</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      
                      <li><a href="{{url('/calender')}}">Calendar</a></li>
                    </ul>
                  </li>
                  
                  <li>
                      <a><i class="fa fa-edit"></i> Catagory <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{url('/catagory/add')}}">Add Catagory</a></li>
                      <li><a  href="{{url('/catagory/manage')}}">Manage Catagory</a></li>
                    </ul>
                  </li>
                  <li>
                      <a><i class="fa fa-edit"></i> Product <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{url('/product/save')}}">Add Product</a></li>
                      <li><a href="{{url('/product/manage')}}">Manage Product</a></li>
                    </ul>
                  </li>
                  <li>
                      <a><i class="fa fa-inbox"></i> Mail <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{url('/mail')}}">View Mail</a></li>
                      <li><a href="{{url('/table-mail')}}">Table Mail</a></li>
                    </ul>
                  </li>
                  
                  
                  <li>
                      <a><i class="fa fa-edit"></i> Employee <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{url('/employee/add')}}">Add Employee</a></li>
                      <li><a href="{{url('employee/manage')}}">Manage Employee</a></li>
                    </ul>
                  </li>
                  
                  
                  <li><a><i class="fa fa-desktop"></i> UI Elements <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                     
                      <li><a href="">Customer Gallery</a></li>
                      <li><a href="{{url('/employee/contact')}}">Employee Contact</a></li>
               
                    </ul>
                  </li>
                  <li><a><i class="fa fa-table"></i> Profit <span class="fa fa-chevron-down"></span></a>
                       <ul class="nav child_menu">
                      <li><a href="#"></a></li>
                      <li><a href="#"></a></li>
                      <li><a href="#"></a></li>
                    </ul>
                      
                  </li>
                  <li><a><i class="fa fa-industry"></i> Page Elements <span class="fa fa-chevron-down"></span></a>
                       <ul class="nav child_menu">
                      <li><a href="{{url('/icon')}}">Icon</a></li>
                      <li><a href="{{url('/slider')}}">Slider</a></li>
                    </ul>
                      
                  </li>
            
                  <li><a><i class="fa fa-paper-plane-o"></i> Pages <span class="fa fa-chevron-down"></span></a>
                       <ul class="nav child_menu">
                      <li><a href="{{url('admin/index')}}">Index</a></li>
                      <li><a href="">Menu List</a></li>
                      <li><a href="{{url('admin/about-content')}}">About</a></li>
                      <li><a href="">Contact Us</a></li>
                      <li><a href="">Offers</a></li>
                    </ul>
                      
                  </li>
          
             
                </ul>
              </div>
           

            </div>
            <!-- /sidebar menu -->

          
          </div>
        </div>