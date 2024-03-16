<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="<?=base_url('home/dashboard')?>">Mental Health</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">

        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <?php if(session()->get('level')==1|| session()->get('level')==3) { ?>
                    <li><a class="dropdown-item" href="<?=base_url('home/signup')?>">Need New Account?</a></li>
                    <?php } ?>
                    
                        <?php if(session()->get('level')==3) { ?>
                    <li><a class="dropdown-item" href="<?=base_url('home/edit_profile/1')?>">Edit Your Profile Info</a></li>
                    <?php } ?>
                    <?php if(session()->get('level')==1|| session()->get('level')==2 || session()->get('level')==3) { ?>
                    <li><a class="dropdown-item" href="<?=base_url('home/logout')?>">Logout</a></li>
                    <?php } ?>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Main</div>
                        <a class="nav-link" href="<?=base_url('home/dashboard')?>">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-paperclip"></i></div>
                            ‧₊˚✧[Dashboard]✧˚₊‧
                        </a>
                        <?php if(session()->get('level')==1 || session()->get('level')==2) { ?>
                            <div class="sb-sidenav-menu-heading">Here!!!</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-book"></i></div>
                                [Data]✧˚₊‧
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            <?php } ?>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <?php if(session()->get('level')==1 || session()->get('level')==2) { ?>
                                    <a class="nav-link" href="<?=base_url('home/petugas')?>">⌗Petugas</a>
                                <?php } ?>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-list-check"></i></div>
                            [Dropdown]✧
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                    Required
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <?php if(session()->get('level')==1 || session()->get('level')==2 || session()->get('level')==3) { ?>
                                            <a class="nav-link" href="<?=base_url('home/login')?>">Login</a>
                                            <?php } ?>
                                            <?php if(session()->get('level')==1 || session()->get('level')==2 ) { ?>
                                            <a class="nav-link" href="<?=base_url('home/fpw')?>">Forgot Password?</a>
                                        <?php } ?>
                                    </nav>
                                </div>
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                    List
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                    <nav class="sb-sidenav-menu-nested nav">
                                  <?php if(session()->get('level')==1 || session()->get('level')==2 || session()->get('level')==3) { ?>
                                      <a class="nav-link" href="<?=base_url('home/dokter')?>">Dokter</a>
                                  <?php } ?>

                              </nav>
                          </div>
                      </nav>
                  </div>
                  <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    <?= session()->get('username')?>
                </div>
            </nav>
        </div>