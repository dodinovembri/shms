<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{ asset('tmp/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>Alexander Pierce</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
      </div>
    </form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MAIN NAVIGATION</li>
      <li class="active">
        <a href="{{route('home')}}">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>          
        </a>
      </li>
      <li>
        <a href="{{ route('main_departement') }}">
          <i class="fa fa-share"></i> <span>Departement</span>
        </a>
      </li>
      <li>
        <a href="{{route('doctor')}}">
          <i class="fa fa-share"></i> <span>Doctor</span>
        </a>       
      </li>
      <li>
        <a href="#">
          <i class="fa fa-share"></i> <span>Patient</span>
        </a>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-share"></i> <span>Schedule</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="treeview">
            <a href="#"><i class="fa fa-circle-o"></i> Master
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="#"><i class="fa fa-circle-o"></i> Time Slot</a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="#"><i class="fa fa-circle-o"></i> Transactions
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="#"><i class="fa fa-circle-o"></i> Schedule List</a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="#"><i class="fa fa-circle-o"></i> Reports
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="#"><i class="fa fa-circle-o"></i> Schedule Reports</a></li>
            </ul>
          </li>
        </ul>
      </li>  
      <li class="treeview">
        <a href="#">
          <i class="fa fa-share"></i> <span>Appointment</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="treeview">
            <a href="#"><i class="fa fa-circle-o"></i> Transactions
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="#"><i class="fa fa-circle-o"></i> Appointment List</a></li>
              <li><a href="#"><i class="fa fa-circle-o"></i> Assign to Me</a></li>              
              <li><a href="#"><i class="fa fa-circle-o"></i> Assign by Me</a></li>              
              <li><a href="#"><i class="fa fa-circle-o"></i> Assign by Me</a></li>              
              <li><a href="#"><i class="fa fa-circle-o"></i> Assign by All</a></li>              
              <li><a href="#"><i class="fa fa-circle-o"></i> Assign by Doctor</a></li>              
              <li><a href="#"><i class="fa fa-circle-o"></i> Assign to Doctor</a></li>              
              <li><a href="#"><i class="fa fa-circle-o"></i> Assign by Representative</a></li>                                      
            </ul>
          </li>
        </ul>
      </li>  
      <li class="treeview">
        <a href="#">
          <i class="fa fa-share"></i> <span>Pharmacy</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="treeview">
            <a href="#"><i class="fa fa-circle-o"></i> Master
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="#"><i class="fa fa-circle-o"></i> Medicine Category</a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="#"><i class="fa fa-circle-o"></i> Transactions
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="#"><i class="fa fa-circle-o"></i> Medicine List</a></li>
            </ul>
          </li>
        </ul>
      </li> 
      <li class="treeview">
        <a href="#">
          <i class="fa fa-share"></i> <span>Schedule</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="treeview">
            <a href="#"><i class="fa fa-circle-o"></i> Transactions
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="#"><i class="fa fa-circle-o"></i> Patient Case Study List</a></li>
              <li><a href="#"><i class="fa fa-circle-o"></i> Prescription List</a></li>
            </ul>
          </li>
        </ul>
      </li>   
      <li class="treeview">
        <a href="#">
          <i class="fa fa-share"></i> <span>Insurance</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="treeview">
            <a href="#"><i class="fa fa-circle-o"></i> Transactions
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="#"><i class="fa fa-circle-o"></i> Insurance List</a></li>
              <li><a href="#"><i class="fa fa-circle-o"></i> Limit Approval List</a></li>
            </ul>
          </li>
        </ul>
      </li>   
      <li class="treeview">
        <a href="#">
          <i class="fa fa-share"></i> <span>Billing</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="treeview">
            <a href="#"><i class="fa fa-circle-o"></i> Transactions
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="#"><i class="fa fa-circle-o"></i> Service List</a></li>
              <li><a href="#"><i class="fa fa-circle-o"></i> Package List</a></li>
              <li><a href="#"><i class="fa fa-circle-o"></i> Patient Admission List</a></li>
              <li><a href="#"><i class="fa fa-circle-o"></i> Advance Payment List</a></li>
              <li><a href="#"><i class="fa fa-circle-o"></i> Bill List</a></li>
            </ul>
          </li>
        </ul>
      </li> 
      <li class="treeview">
        <a href="#">
          <i class="fa fa-share"></i> <span>Human Resources</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="treeview">
            <a href="#"><i class="fa fa-circle-o"></i> Transactions
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="#"><i class="fa fa-circle-o"></i> Employee List</a></li>              
            </ul>
          </li>
        </ul>
      </li> 
      <li class="treeview">
        <a href="#">
          <i class="fa fa-share"></i> <span>Bed Manager</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="treeview">
            <a href="#"><i class="fa fa-circle-o"></i> Transactions
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="#"><i class="fa fa-circle-o"></i> Room List</a></li>
              <li><a href="#"><i class="fa fa-circle-o"></i> Bed List</a></li>
              <li><a href="#"><i class="fa fa-circle-o"></i> Bed Assign List</a></li>
              <li><a href="#"><i class="fa fa-circle-o"></i> Bed Transfer List</a></li>              
            </ul>
          </li>
          <li class="treeview">
            <a href="#"><i class="fa fa-circle-o"></i> Reports
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="#"><i class="fa fa-circle-o"></i> Bed Manager Reports</a></li>
            </ul>
          </li>          
        </ul>
      </li> 
      <li class="treeview">
        <a href="#">
          <i class="fa fa-share"></i> <span>Medications and Visits</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="treeview">
            <a href="#"><i class="fa fa-circle-o"></i> Transactions
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="#"><i class="fa fa-circle-o"></i> Patient Medication List</a></li>
              <li><a href="#"><i class="fa fa-circle-o"></i> Patient Visit List</a></li>
              <li><a href="#"><i class="fa fa-circle-o"></i> Bed Assign List</a></li>
              <li><a href="#"><i class="fa fa-circle-o"></i> Bed Transfer List</a></li>              
            </ul>
          </li>
          <li class="treeview">
            <a href="#"><i class="fa fa-circle-o"></i> Reports
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="#"><i class="fa fa-circle-o"></i> Visiting Reports</a></li>
            </ul>
          </li>          
        </ul>
      </li>      
      <li class="treeview">
        <a href="#">
          <i class="fa fa-share"></i> <span>Noticeboard</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="treeview">
            <a href="#"><i class="fa fa-circle-o"></i> Transactions
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="#"><i class="fa fa-circle-o"></i> Notice List</a></li>              
            </ul>
          </li>         
        </ul>
      </li>    
      <li class="treeview">
        <a href="#">
          <i class="fa fa-share"></i> <span>Case Manager</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="treeview">
            <a href="#"><i class="fa fa-circle-o"></i> Transactions
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="#"><i class="fa fa-circle-o"></i> Patient List</a></li>            
            </ul>
          </li>         
        </ul>
      </li> 
      <li class="treeview">
        <a href="#">
          <i class="fa fa-share"></i> <span>Hospital Activities</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="treeview">
            <a href="#"><i class="fa fa-circle-o"></i> Transactions
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="#"><i class="fa fa-circle-o"></i> Add Birth Report</a></li>
              <li><a href="#"><i class="fa fa-circle-o"></i> Add Death Report</a></li>
              <li><a href="#"><i class="fa fa-circle-o"></i> Add Operation Report</a></li>
              <li><a href="#"><i class="fa fa-circle-o"></i> Add Investigation Report</a></li>              
            </ul>
          </li>
          <li class="treeview">
            <a href="#"><i class="fa fa-circle-o"></i> Reports
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="#"><i class="fa fa-circle-o"></i> Birth Reports</a></li>
              <li><a href="#"><i class="fa fa-circle-o"></i> Death Reports</a></li>
              <li><a href="#"><i class="fa fa-circle-o"></i> Operation Reports</a></li>
              <li><a href="#"><i class="fa fa-circle-o"></i> Investigation Reports</a></li>
            </ul>
          </li>          
        </ul>
      </li>         
      <li class="treeview">
        <a href="#">
          <i class="fa fa-share"></i> <span>Setting</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> App Setting</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Languange Setting</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Auto Update</a></li>            
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-share"></i> <span>Setting</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Gateway Setting</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> SMS Template</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> SMS Schedule</a></li>            
            <li><a href="#"><i class="fa fa-circle-o"></i> Send Custom SMS</a></li>            
            <li><a href="#"><i class="fa fa-circle-o"></i> Custom SMS List</a></li>            
            <li><a href="#"><i class="fa fa-circle-o"></i> Auto SMS Report</a></li>            
            <li><a href="#"><i class="fa fa-circle-o"></i> User SMS List</a></li>            
        </ul>
      </li>   
      <li class="treeview">
        <a href="#">
          <i class="fa fa-share"></i> <span>Messages</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> New Messages</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Inbox</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Sent</a></li>                        
        </ul>
      </li>                                                                   
      <li class="treeview">
        <a href="#">
          <i class="fa fa-share"></i> <span>Mail</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Send Mail</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Mail Setting</a></li>            
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-share"></i> <span>Websites</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Setting</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Menu</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Template Assign</a></li>                        
            <li><a href="#"><i class="fa fa-circle-o"></i> About</a></li>                        
            <li><a href="#"><i class="fa fa-circle-o"></i> Slider</a></li>                        
            <li><a href="#"><i class="fa fa-circle-o"></i> Add Banner Slider</a></li>                        
            <li><a href="#"><i class="fa fa-circle-o"></i> Testimonial</a></li>                        
            <li><a href="#"><i class="fa fa-circle-o"></i> Appointment Instruction</a></li>                        
            <li><a href="#"><i class="fa fa-circle-o"></i> Add Partner</a></li>                        
            <li><a href="#"><i class="fa fa-circle-o"></i> Add News</a></li>                        
            <li><a href="#"><i class="fa fa-circle-o"></i> Section</a></li>                        
            <li><a href="#"><i class="fa fa-circle-o"></i> Add Service</a></li>                        
            <li><a href="#"><i class="fa fa-circle-o"></i> Suport</a></li>                        
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-share"></i> <span>Permission</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Add Role</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Role Permission</a></li>            
            <li><a href="#"><i class="fa fa-circle-o"></i> Assign Role To User</a></li>            
        </ul>
      </li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>