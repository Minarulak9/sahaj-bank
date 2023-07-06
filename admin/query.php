

    <?php $page="query"; include './components/head.php'; ?>
        <title>Queries</title>
    </head>
    <body class="sb-nav-fixed">
        <?php include './components/nav.php'; ?>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <?php include './components/sidebar.php';?>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <h4 class="page-header">Queries</h4>
                    <div class="container-fluid px-4">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Queries form course</h6>
                            <!-- <a href="./business_about.php" class="btn btn-primary"><i class="fa-solid fa-pen"></i> Edit</a> -->
                        </div>
                        <div class="card-body pd-sm">
                        <div class="table-responsive">
                                <table class="table table-bordered mt-2" id="myTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th style="width:5%;">#</th>
                                            <th style="width:15%;">Title</th>
                                            <th style="width:40%;">Query</th>
                                            <th style="width:15%;">Date</th>
                                            <th style="width:15%;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Event Sem Exam from 24 april</td>
                                            <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</td>
                                            <td>10 April 2023</td>
                                            <td class="d-flex" style="gap:2px;">
                                                <!-- <a href="notice_edit.php" class="btn btn-sm btn-success">Edit</a> -->
                                                <a href="delete_notice.php" class="btn btn-sm btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                        
                                        
                                        
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>  
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">CONTACT FORM</h6>
                            <!-- <a href="institute_about.php" class="btn btn-primary"><i class="fa-solid fa-pen"></i> Edit</a> -->
                        </div>
                        <div class="card-body pd-sm">
                        <div class="table-responsive">
                                <table class="table table-bordered mt-2" id="myTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th style="width:5%;">#</th>
                                            <th style="width:15%;">Title</th>
                                            <th style="width:40%;">Query</th>
                                            <th style="width:15%;">Date</th>
                                            <th style="width:15%;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Event Sem Exam from 24 april</td>
                                            <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</td>
                                            <td>10 April 2023</td>
                                            <td class="d-flex" style="gap:2px;">
                                                <!-- <a href="notice_edit.php" class="btn btn-sm btn-success">Edit</a> -->
                                                <a href="delete_notice.php" class="btn btn-sm btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                        
                                        
                                        
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>  
                        
                    </div>
                </main>
                <!--<?php include './components/copy.php'; ?>-->
            </div>
        </div>
        <?php include './components/script.php'; ?>
        <script>
           
        </script>
    </body>
</html>
