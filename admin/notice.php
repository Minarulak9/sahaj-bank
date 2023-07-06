

    <?php $page="notice"; include './components/head.php'; ?>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
        <title>Notices</title>
        <style>
            th,td{
                text-align: center !important;
            }
            #popup.active {
                top: 50%;
                opacity: 1;
            }
            #popup {
                position: fixed;
                top: -50%;
                left: 50%;
                transform: translate(-50%,-50%);
                width: 60%;
                max-width: 600px;
                min-width: 300px;
                height: 400px;
                background-color: rgb(255, 255, 255);
                z-index: 10001;
                box-shadow: 5px 5px 20px -15px;
                border-radius: 10px;
                transition: .4s;
                opacity: 0;
                display: flex;
                overflow: hidden;
            }
            #overlay.active {
                display: block;
            }
            #overlay {
                width: 100%;
                height: 100%;
                position: fixed;
                left: 0;
                top: 0;
                background-color: rgba(0, 0, 0, 0.541);
                z-index: 10000;
                display: none;
            }
        </style>
    </head>
    <body class="sb-nav-fixed">
            <div id="popup" class="d-flex justify-content-center align-items-center">
                <div class="content text-center">
                    <img src="./assets/img/upload.png" width="100px" alt="">
                    <form action="">
                        <label for="upload">Upload PDF</label>
                        <input type="file" name="pdf" id="upload" class="form-control"> 
                        <input type="submit" value="Submit" class="btn btn-primary mt-3">
                    </form>
                </div>
            </div>
            <div id="overlay" class=""></div>
        <?php include './components/nav.php'; ?>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <?php include './components/sidebar.php';?>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <h4 class="page-header">Notice</h4>
                    <div class="container-fluid px-4">
                    <div class="card shadow mb-4">
                    <div class="card-header py-3 d-flex justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Institute</h6>
                            <button id="popup-btn" class="btn btn-primary">New Notice</button>
                        </div>
                        <div class="card-body pd-sm">
                            <div class="table-responsive">
                                <table class="table table-bordered mt-2" id="myTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th style="width:5%;">#</th>
                                            <th style="width:15%;">Title</th>
                                            <th style="width:40%;">Description</th>
                                            <th style="width:15%;">Date</th>
                                            <th style="width:10%;">Pdf</th>
                                            <th style="width:15%;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Event Sem Exam from 24 april</td>
                                            <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</td>
                                            <td>10 April 2023</td>
                                            <td><a href="./assets/img/notice.pdf"><img src="./assets/img/pdf.png" width="50px" alt=""></a></td>
                                            <td class="d-flex" style="gap:2px;">
                                                <a href="notice_edit.php" class="btn btn-sm btn-success">Edit</a>
                                                <a href="delete_notice.php" class="btn btn-sm btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Odd final Exam from 24 april</td>
                                            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam, maiores!.</td>
                                            <td>25 April 2023</td>
                                            <td><a href="./assets/img/notice.pdf"><img src="./assets/img/pdf.png" width="50px" alt=""></a></td>
                                            <td class="d-flex" style="gap:2px;">
                                                <a href="notice_edit.php" class="btn btn-sm btn-success">Edit</a>
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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>

        <script>
           let table = new DataTable('#myTable', {
    // options
});



let popupBtn = document.querySelector('#popup-btn');
let overlay = document.querySelector('#overlay');
let popup = document.querySelector('#popup');
popupBtn.addEventListener('click',()=>{
    popup.classList.toggle('active');
    overlay.classList.toggle('active');
})
overlay.addEventListener('click',()=>{
  document.querySelector('#popup.active').classList.toggle('active');
  overlay.classList.toggle('active');
})
        </script>
    </body>
</html>
