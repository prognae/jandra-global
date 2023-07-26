        <!---Sidebar-->
        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="index.html" class="app-brand-link">
                <img src="{{ asset('assets/img/favicon/jandra.png') }}" class="image-size" alt="">


            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Dashboard -->
            <li class="menu-item active">
              <a href="/admin/dashboard" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
              </a>
            </li>
            <!-- Products -->
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-calendar-event"></i>
                <div data-i18n="Products">Products</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="/admin/dashboard/item/view" class="menu-link">
                    <div data-i18n="Basic Inputs">Item List</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="/admin/dashboard/item/add" class="menu-link">
                    <div data-i18n="Input groups">New Item</div>
                  </a>
                </li>
              </ul>
            </li>
            <!-- End Products -->
            <!-- Events -->
            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                  <i class="menu-icon tf-icons bx bx-calendar-event"></i>
                  <div data-i18n="Products">Events</div>
                </a>
                <ul class="menu-sub">
                  <li class="menu-item">
                    <a href="/admin/dashboard/event/view" class="menu-link">
                      <div data-i18n="Basic Inputs">View Event</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="/admin/dashboard/event/add" class="menu-link">
                      <div data-i18n="Basic Inputs">Add Event</div>
                    </a>
                  </li>
                </ul>
              </li>
              <!-- End Events -->
          </ul>
        </aside>
        <!--- End of SidebarSidebar-->
        <!-- / Menu -->