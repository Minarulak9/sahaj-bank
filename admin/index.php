

    <?php $page="dashboard"; include './components/head.php'; ?>
        <title>Dashboard - Admin</title>
    </head>
    <body class="sb-nav-fixed">
        <?php include './components/nav.php'; ?>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <?php include './components/sidebar.php';?>
            </div>
            <div id="layoutSidenav_content">
                <main>
                        <h4 class="page-header">Dashboard  <div class="h6 d-inline-block mt-3" id="clock"></div></h4>
                    <div class="container-fluid px-4">
                        <!-- <div class="row mt-3 gy-3">
                            <div class="col-md-6 col-lg-4 col-sm-12">
                                <div class="my-card p-3 color1">
                                    <div class="card-content d-flex align-items-center">
                                        <div class="icon"><span><i class="fa-solid fa-graduation-cap"></i></span></div>
                                        <div class="content">
                                            <h4 class="m-0">Total Student</h4>
                                            <p class="m-0"><i class="fa-solid fa-graduation-cap"></i> 200</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 col-sm-12">
                                <div class="my-card p-3 color2">
                                    <div class="card-content d-flex align-items-center">
                                        <div class="icon"><span><i class="fa-solid fa-sack-dollar"></i></span></div>
                                        <div class="content">
                                            <h4 class="m-0">Total paid in month</h4>
                                            <p class="m-0"><i class="fa-solid fa-indian-rupee-sign"></i> 500</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 col-sm-12">
                                <div class="my-card p-3 color3">
                                    <div class="card-content d-flex align-items-center">
                                        <div class="icon"><span><i class="fa-solid fa-sack-dollar"></i></span></div>
                                        <div class="content">
                                            <h4 class="m-0">Total Paid in Year</h4>
                                            <p class="m-0"><i class="fa-solid fa-indian-rupee-sign"></i> 500</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div> -->
                        
                    </div>
                </main>
                <!--<?php include './components/copy.php'; ?>-->
            </div>
        </div>
        <?php include './components/script.php'; ?>
        <script>
            function updateTime() {
    const monthNames = [
        "January", "February", "March", "April", "May", "June",
        "July", "August", "September", "October", "November", "December"
      ];
      var clock = document.getElementById("clock");
    var now = new Date();
    let month = monthNames[now.getMonth()];
    let date = now.getDate();
    clock.innerHTML = `${date} ${month}- ${now.toLocaleTimeString()}`
  }
  
  setInterval(updateTime, 1000);
  
        </script>
    </body>
</html>
