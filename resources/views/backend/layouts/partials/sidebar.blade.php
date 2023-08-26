<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="index.html">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Vendor_Details</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('vendor_details_index')}}">
              <i class="bi bi-circle"></i><span>Index_Page_List</span>
            </a>
          </li>
          <li>
            <a href="{{route('vendor_details_create')}}">
              <i class="bi bi-circle"></i><span>Create_Table_Page</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->


      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Category_Details</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('category_details_index')}}">
              <i class="bi bi-circle"></i><span>Index_Page_List</span>
            </a>
          </li>
          <li>
            <a href="{{route('category_details_create')}}">
              <i class="bi bi-circle"></i><span>Create_Table_Page</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Slider Images</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('slider_details_index')}}">
              <i class="bi bi-circle"></i><span>Slider Index</span>
            </a>
          </li>
          <li>
            <a href="{{route('slider_details_create')}}">
              <i class="bi bi-circle"></i><span>Slider Create</span>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Medicine_Details</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('medicine_details_index')}}">
              <i class="bi bi-circle"></i><span>Index_Page_List</span>
            </a>
          </li>
          <li>
            <a href="{{route('medicine_details_create')}}">
              <i class="bi bi-circle"></i><span>Create_Table_Page</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->


      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Order_Details</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('order_index')}}">
              <i class="bi bi-circle"></i><span>Index_Page_List</span>
            </a>
          </li>
          <li>
            <a href="{{route('order_create')}}">
              <i class="bi bi-circle"></i><span>Create_Table_Page</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Cart_Details</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('cart_index')}}">
              <i class="bi bi-circle"></i><span>Index_Page_List</span>
            </a>
          </li>
          <li>
            <a href="{{route('cart_create')}}">
              <i class="bi bi-circle"></i><span>Create_Table_Page</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->



      <!-- End Components Nav -->


    </ul>

  </aside>
