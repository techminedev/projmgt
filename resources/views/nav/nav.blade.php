

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item"><a class="nav-link dropdown-toggle" href="{{url('/users')}}" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-newspaper"></i>
            <span>File Maintenance</span></a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="{{url('/users')}}">Users</a>
            <a class="dropdown-item" href="{{url('/business-partner')}}">Business Partner</a>
            <a class="dropdown-item" href="#">License</a>
            <a class="dropdown-item" href="{{ url('/account') }}">Chart of Accounts</a>
            <h6 class="dropdown-header"><b>Program of Work:</b></h6>
            <a class="dropdown-item" href="#">Work Group</a>
            <a class="dropdown-item" href="#">Work/Service Specs</a>
            <a class="dropdown-item" href="{{ url('/material-detail')}}">Mat'l/Eq't/Labor Specs</a>
            <a class="dropdown-item" href="{{ url('/measurement') }}">Unit Measurement</a>
            <h6 class="dropdown-header"><b>Location:</b></h6>
            <a class="dropdown-item" href="{{ url('/province')}}">Province</a>
            <a class="dropdown-item" href="{{ url('/municipality')}}">Municipality</a>
            <a class="dropdown-item" href="{{ url('/barangay')}}">Barangay</a>
          </div>
        </li>
        <li class="nav-item active">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa fa-calendar"></i>
            <span>Project Management</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="#">Cluster Listing</a>
            <a class="dropdown-item" href="{{url('/project-listing')}}">Project Listing</a>
            <a class="dropdown-item" href="">Project Program of Work Listing</a>
            <a class="dropdown-item" href="">Project Bill of Materials</a>
            <a class="dropdown-item" href="">Project Inspection Update</a>
          </div>
        </li>
        <li class="nav-item active">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa fa-book"></i>
            <span>Stock Monitoring</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="#">Purchase Order Processing</a>
            <h6 class="dropdown-header"><b>Stock Transfer:</b></h6>
            <a class="dropdown-item" href="#">To Site Warehouse Processing</a>
            <a class="dropdown-item" href="#">Stock Returns Processing</a>
            <a class="dropdown-item" href="#">Stock Disposal Processing</a>
          </div>
        </li>
        <li class="nav-item active">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa fa-calculator"></i>
            <span>Cash Flow Tracker</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="#">Billing Processing</a>
            <a class="dropdown-item" href="#">Collection Processing</a>
            <a class="dropdown-item" href="#">Expense Processing</a>
          </div>
        </li>
        <li class="nav-item active">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa fa-file"></i>
            <span>Reports</span>
          </a>
        </li>
      </ul>
