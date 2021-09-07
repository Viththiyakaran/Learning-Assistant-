<?php  
 session_start();  
 if(!isset($_SESSION["username"]))  
 {  
      header("Location:../index.php");  
 }  
 
 include('../model/db.php');
 

 

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Simple</title>
 
  
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../public/plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../public/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../public/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../public/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../public/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="../public/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
     </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../public/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $_SESSION['username']; ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->


           <?php  
           if($_SESSION['type'] == "Admin") 
           {
             echo '<li class="nav-item">
             <a href="dashboard.php" class="nav-link">
               <i class="nav-icon fas fa-tachometer-alt"></i>
               <p>
                 Dashboard
               </p>
             </a>
           </li>
           <li class="nav-item">
             <a href="students.php" class="nav-link  ">
               <i class="nav-icon fas fa-th"></i>
               <p>
                Students
                 <span class="right badge badge-danger">New</span>
               </p>
             </a>
           </li>
           <li class="nav-item  menu-open">
             <a href="#" class="nav-link">
               <i class="nav-icon fas fa-copy"></i>
               <p>
                Classes
                 <i class="fas fa-angle-left right"></i>
                 <span class="badge badge-info right">2</span>
               </p>
             </a>
             <ul class="nav nav-treeview">
              <li class="nav-item">
                    <a href="addSubjectCat.php" class="nav-link ">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Categories</p>
                    </a>
              </li>
              <li class="nav-item">
                 <a href="addQuestions.php" class="nav-link">
                   <i class="far fa-circle nav-icon"></i>
                   <p>MCQ Questions</p>
                 </a>
               </li>
              <li class="nav-item">
                    <a href="videoAdd.php" class="nav-link  active">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Video Tutorials</p>
                    </a>
              </li>
             </ul>
           </li>
           <li class="nav-item">
             <a href="#" class="nav-link">
               <i class="nav-icon fas fa-chart-pie"></i>
               <p>
                 Activities
                 <i class="right fas fa-angle-left"></i>
               </p>
             </a>
             <ul class="nav nav-treeview">
               <li class="nav-item">
                 <a href="mcqAdd.php" class="nav-link ">
                   <i class="far fa-circle nav-icon"></i>
                   <p>Multiple-choice question</p>
                 </a>
               </li>
               <li class="nav-item">
                 <a href="videoGame.php" class="nav-link">
                   <i class="far fa-circle nav-icon"></i>
                   <p>Video Tutorials</p>
                 </a>
               </li>
               <li class="nav-item">
                 <a href="pages/charts/inline.html" class="nav-link">
                   <i class="far fa-circle nav-icon"></i>
                   <p>One to one</p>
                 </a>
               </li>
             </ul>
           </li>
           <li class="nav-item">
             <a href="#" class="nav-link">
               <i class="nav-icon fas fa-tree"></i>
               <p>
                 Analysis 
                 <i class="fas fa-angle-left right"></i>
               </p>
             </a>
             <ul class="nav nav-treeview">
               <li class="nav-item">
                 <a href="pages/UI/general.html" class="nav-link">
                   <i class="far fa-circle nav-icon"></i>
                   <p>Logins</p>
                 </a>
               </li>
               <li class="nav-item">
                 <a href="pages/UI/icons.html" class="nav-link">
                   <i class="far fa-circle nav-icon"></i>
                   <p>Marks</p>
                 </a>
               </li>
               <li class="nav-item">
                 <a href="pages/UI/buttons.html" class="nav-link">
                   <i class="far fa-circle nav-icon"></i>
                   <p>Subjects</p>
                 </a>
               </li>
             </ul>
           </li>
           <li class="nav-item">
             <a href="#" class="nav-link">
               <i class="nav-icon fas fa-edit"></i>
               <p>
                Certifications
               </p>
             </a>
           </li>
           <li class="nav-header">EXAMPLES</li>
          
           <li class="nav-item">
             <a href="../controller/sessionDistoryController.php?q=logout" class="nav-link">
               <i class="nav-icon fas fa-sign-out-alt"></i>
               <p>
                Logout
               </p>
             </a>
           </li>';
           }
           else{
               echo '
               <li class="nav-item">
               <a href="profile.php" class="nav-link">
                 <i class="nav-icon fas fa-edit"></i>
                 <p>
                  Profile
                 </p>
               </a>
             </li>
            <li class="nav-header">EXAMPLES</li>
             <li class="nav-item">
               <a href="../controller/sessionDistoryController.php?q=logout" class="nav-link">
                 <i class="nav-icon fas fa-sign-out-alt"></i>
                 <p>
                  Logout
                 </p>
               </a>
             </li>';
           }
          ?>

       
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Video</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Video v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
           


             
            <div class="card card-primary card-outline card-tabs">
              <div class="card-header p-0 pt-1 border-bottom-0">
                <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="custom-tabs-three-home-tab" data-toggle="pill" href="#custom-tabs-three-home" role="tab" aria-controls="custom-tabs-three-home" aria-selected="true">All Videos</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-three-profile-tab" data-toggle="pill" href="#custom-tabs-three-profile" role="tab" aria-controls="custom-tabs-three-profile" aria-selected="false">Add Videos</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-three-messages-tab" data-toggle="pill" href="#custom-tabs-three-messages" role="tab" aria-controls="custom-tabs-three-messages" aria-selected="false">Messages</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-three-settings-tab" data-toggle="pill" href="#custom-tabs-three-settings" role="tab" aria-controls="custom-tabs-three-settings" aria-selected="false">Settings</a>
                  </li>
                </ul>
              </div>
              <div class="card-body">
                <div class="tab-content" id="custom-tabs-three-tabContent">
                  <div class="tab-pane fade show active" id="custom-tabs-three-home" role="tabpanel" aria-labelledby="custom-tabs-three-home-tab">
                  <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                            <th>VideoId</th>
                                <th>Name</th>
                                <th> Path</th>
                                <th>Image </th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            
                            <?php 

                            $sql = "select * from tblvideos";
                            $result = mysqli_query($con, $sql);
                            if (mysqli_num_rows($result) > 0) {
                                // output data of each row
                                while($row = mysqli_fetch_assoc($result)) {

                                if($row['isActive'] == true)
                                {
                                    $isActive = "<button type='button' class='btn btn-success'>Active</button>";
                                }
                                else{
                                    $isActive = "<button type='button' class='btn btn-danger'>InActive</button>";
                                }
                                echo " <tr>
                                <td>".$row['vid']."</td>
                                <td>".$row['videoName']."</td>
                                <td>".$row['videoPath']."</td>
                                <td><img src=../controller/uploads/".$row['videoImage']." width=100px></td>
                                <td><a class='btn btn-danger' href=../controller/categoryController.php?catID=".$row['vid']."> Delete </a></td>
                                </tr>";
                                }
                            } else {
                                echo "0 results";
                            }
                            ?>     
                        </tbody>
                        <tfoot>
                        
                                <th>VideoId</th>
                                <th>Name</th>
                                <th> Path</th>
                                <th>Image </th>
                                <th>Delete</th>
                        </tfoot>
                        </table>
                  </div>
                  <div class="tab-pane fade" id="custom-tabs-three-profile" role="tabpanel" aria-labelledby="custom-tabs-three-profile-tab">
                    
                    <form action="../controller/cateVidController.php" method="post" enctype="multipart/form-data">
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Video Name</label>
                        <input type="text" name="videoName" class="form-control" id="exampleFormControlInput1" required>
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Video Path</label>
                        <input type="text" name="videoPath" class="form-control" id="exampleFormControlInput1" required>
                      </div>

                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Video Category</label>
                            <?php 
                                $sql = "select * from tblcategory";
                                $result = mysqli_query($con, $sql);
                                if (mysqli_num_rows($result) > 0) {
                                    // output data of each row
                                    echo "<select name='videoCategoryId' id='videoCategoryId' class='form-select form-control' aria-label='Default select example'>
                                            <option >Select the Category </option>";
                                    while($row = mysqli_fetch_assoc($result)) {
                                    echo "<option value=".$row['catid'].">".$row['categoryName']."</option>";
                                    }
                                } else {
                                    echo "0 results";
                                }
                            ?>     
                            </select>
                      </div>

                      <div class="mb-3">
                        <label for="formFileMultiple" class="form-label">Multiple files input example</label>
                        <input type="file" class="form-control"   name="image" required id="exampleInputPassword1" >
                     </div>
                     <input  type="submit" name="videoAdd" class="btn btn-primary mt-3" value="Add New Video">
                    </form>


                  </div>
                  <div class="tab-pane fade" id="custom-tabs-three-messages" role="tabpanel" aria-labelledby="custom-tabs-three-messages-tab">
                     Morbi turpis dolor, vulputate vitae felis non, tincidunt congue mauris. Phasellus volutpat augue id mi placerat mollis. Vivamus faucibus eu massa eget condimentum. Fusce nec hendrerit sem, ac tristique nulla. Integer vestibulum orci odio. Cras nec augue ipsum. Suspendisse ut velit condimentum, mattis urna a, malesuada nunc. Curabitur eleifend facilisis velit finibus tristique. Nam vulputate, eros non luctus efficitur, ipsum odio volutpat massa, sit amet sollicitudin est libero sed ipsum. Nulla lacinia, ex vitae gravida fermentum, lectus ipsum gravida arcu, id fermentum metus arcu vel metus. Curabitur eget sem eu risus tincidunt eleifend ac ornare magna.
                  </div>
                  <div class="tab-pane fade" id="custom-tabs-three-settings" role="tabpanel" aria-labelledby="custom-tabs-three-settings-tab">
                     Pellentesque vestibulum commodo nibh nec blandit. Maecenas neque magna, iaculis tempus turpis ac, ornare sodales tellus. Mauris eget blandit dolor. Quisque tincidunt venenatis vulputate. Morbi euismod molestie tristique. Vestibulum consectetur dolor a vestibulum pharetra. Donec interdum placerat urna nec pharetra. Etiam eget dapibus orci, eget aliquet urna. Nunc at consequat diam. Nunc et felis ut nisl commodo dignissim. In hac habitasse platea dictumst. Praesent imperdiet accumsan ex sit amet facilisis.
                  </div>
                </div>
              </div>
           











              
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; <?php echo date('Y'); ?> <a href="https://simple.codeengine.xyz/">  Simple</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.1.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
<!-- jQuery -->
<script src="../public/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="../public/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../public/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../public/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../public/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../public/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../public/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../public/plugins/jszip/jszip.min.js"></script>
<script src="../public/plugins/pdfmake/pdfmake.min.js"></script>
<script src="../public/plugins/pdfmake/vfs_fonts.js"></script>
<script src="../public/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../public/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../public/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="../public/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../public/dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
    $("#ans").hide();

  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

<script>
    $("document").ready( function () {
      $('#cat').change(function(){  
           var catID = $(this).val(); 
          //alert(catID); 
           $.ajax({  
                url:"../controller/cateQueController.php",  
                method:"POST",  
                data:{catID:catID},  
                success:function(data){  
                     $('#mcq').html(data);
                     $("#ans").show();   
                }  
           }); 
      }); 
    }); 
</script>  


<script>
    $("document").ready( function () {
      $('#ans').change(function(){  
           var catID = $(this).val(); 
          alert(catID); 
          //  $.ajax({  
          //       url:"../controller/cateQueController.php",  
          //       method:"POST",  
          //       data:{catID:catID},  
          //       success:function(data){  
          //            $('#mcq').html(data);
          //            $("#ans").show();   
          //       }  
          //  }); 
      }); 
    }); 
</script>  



</body>
</html>