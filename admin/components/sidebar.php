<nav class="sb-sidenav accordion sb-sidenav-light" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav mt-2" style="gap: 6px;">
                            <a class="nav-link <?php if($page=='dashboard')echo 'active'?>" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <a class="nav-link <?php if($page=='about')echo 'active'?>" href="./about.php">
                                <div class="sb-nav-link-icon">
                                <i class="fa-regular fa-square-minus"></i>
                                </div>
                                About
                            </a>
                            <a class="nav-link <?php if($page=='notice')echo 'active'?>" href="./notice.php">
                                <div class="sb-nav-link-icon">
                                <i class="fa-solid fa-file"></i>
                                </div>
                                Notice
                            </a>
                            <a class="nav-link <?php if($page=='query')echo 'active'?>" href="./query.php">
                                <div class="sb-nav-link-icon">
                                <i class="fa-solid fa-clipboard-question"></i>
                                </div>
                                Query
                            </a>
                            
                            <a class="nav-link <?php if($page=='pass_change')echo 'active'?>" href="./change_pass.php">
                                <div class="sb-nav-link-icon">
                                    <i class="fa-solid fa-unlock-keyhole"></i>
                                </div>
                                Change Password
                            </a>
                            <a class="nav-link <?php if($page=='log_out')echo 'active'?>" href="./logout.php">
                                <div class="sb-nav-link-icon">
                                    <i class="fa-solid fa-arrow-right-from-bracket"></i>
                                </div>
                                Logout
                            </a>
                            
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Welcome, Mr. Rahul Kumar</div>
                    </div>
                </nav>