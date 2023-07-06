

    <?php $page="about"; include './components/head.php'; ?>
        <title>About - Content</title>
    </head>
    <body class="sb-nav-fixed">
        <?php include './components/nav.php'; ?>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <?php include './components/sidebar.php';?>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <h4 class="page-header">Top Links</h4>
                    <div class="container-fluid px-4">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Business</h6>
                            <a href="./about.php" class="btn btn-primary"> Back</a>
                        </div>
                        <div class="card-body pd-sm">
                            <form action="">

                                <textarea name="business_about" class="form-control" cols="30" rows="9">Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore repellat inventore consectetur omnis numquam natus nam cupiditate sapiente, exercitationem cumque harum iusto veritatis? Iure in voluptates molestiae beatae eaque cupiditate et amet nulla impedit provident vero ea voluptas accusamus, quia incidunt similique vitae consectetur adipisci earum praesentium quaerat omnis harum? Reiciendis, mollitia. Quasi libero et quas, repellendus, nobis quam, voluptates non esse ratione corporis est autem earum a dolor deserunt vero reiciendis ipsam amet exercitationem rerum nulla architecto. Provident ipsum quasi quidem magnam tempora in ex accusamus fuga omnis nihil totam, expedita fugit officiis adipisci qui magni a. Dolores, porro.</textarea>
                                <input type="submit" value="Update" class="btn btn-primary mt-3" >
                            </form>
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
