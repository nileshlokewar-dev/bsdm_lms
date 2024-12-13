    <!-- header Start -->
    <header>
    <nav class="navbar navbar-expand-md navbar-custom">
      <div class="container-fluid flex-nowrap">
        <div class="d-flex align-items-center w-50">
          <a class="navbar-brand border-right me-3 pe-3" href="#">
            <img height="55px" class="" src="<?php echo base_url();?>assets/images/Nishnat-Final-Logo.webp" />
          </a>
          <button class="navbar-toggler btn-toggle" type="button" data-bs-toggle="collapse" data-bs-target="#sidenav"
            aria-controls="sidenav" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fi fi-rr-menu-burger"></i>
          </button>

         

          <div class="client-info border-right me-3 pe-3">
            <img height="60px" src="<?php echo base_url();?>assets/images/bihar-gov-logo.webp" />
          </div>

          <div class="client-info">
            <img height="60px" src="<?php echo base_url();?>assets/images/BSDM-logo.webp" />
          </div>

        </div>
        <div class="w-50">
          <ul class="navbar-nav d-flex align-items-center mr-0 justify-content-end">
            <li class="nav-item Theme-menu ">
              <a class="action-control action-menu3" href="#" id="mode-toggle">
                <img id="mode-icon" src="<?php echo base_url();?>assets/images/sun-icon.png" alt="Day Mode Icon">
              </a>
            </li>
            <li class="nav-item ">
              <a class="action-control action-menu2" href="#">
                <i class="fi fi-rr-info"></i>
              </a>
            </li>
            <li class="nav-item ">
              <a class="action-control action-menu1" href="#">
                <i class="fi fi-rr-settings"></i>
              </a>
            </li>
            <li class="nav-item dropdown profile-dropdown d-none    ">
              <a class="nav-link dropdown-toggle d-flex align-items-center" aria-current="page" href="#" role="button"
                id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                <div class="user-text clearfix">
                  <div class="user-image float-end">
                    <img width="100%" src="images/user-img.webp" title="Profile" alt="Profile">
                  </div>
                  <div class="h-100 me-3 overflow-hidden text-end">
                    <span class="user-title mb-0">Rahul dube</span>
                    <span class="role-title mb-0">Login : <span>10:01:30 am</span></span>
                  </div>
                </div>
              </a>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <li><a class="dropdown-item" href="login.html"><i class="fi fi-rr-power"></i> Logout</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <!-- header End -->

