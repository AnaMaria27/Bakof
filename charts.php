<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>BAKOF TEC - TRANSPORTADORES</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">BAKOF TEC</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.html">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>INÍCIO</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

  

     
    
     
	       <li class="nav-item">
        <a class="nav-link" href="entregaedevolucao.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Procedimento de devolução</span></a>
      </li>

        <li class="nav-item">
        <a class="nav-link" href="verificacao.html">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Rota</span></a>
      </li>

           

          </ul>

        </nav>
        <!-- End of Topbar -->

         <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Informações</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
          </div>

          <!-- Content Row -->
          <div class="row">
			 
			 <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">CIDADE - ESTADO (ENTREGA)</div>
                      
                     <!-- PREENCHIMENTO -->
                      
                      
                      <div class="h5 mb-0 font-weight-bold text-gray-800">São Francisco do Guaporé - Rondônia</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            

	
			<!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">CIDADE - ESTADO (ATUAL)</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">Curitiba - Paraná</div>
                    </div>
                    <div class="col-auto">
						<i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
			
			<!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">DATA DE ENTREGA </div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">DD/MM/AAAA</div>
                    </div>
                    <div class="col-auto">
						<i class="fas fa-calendar fa-2x text-gray-300"></i> 
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
			
           <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Listagem dos produtos</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
               <?php
				$dbc = mysqli_connect('localhost', 'root', '', 'bakof');
				$query = "SELECT * FROM entregas";
				
				$result = mysqli_query($dbc,$query) or die ('erro no executar');
				
				echo"<table class='table table-striped'>";
				echo"<thead><tr><th scope='col'>Id</th><th scope='col'>produto</th><th scope='col'>quantidade</th><th scope='col'>endereco</th><th scope='col'>preco</th>";
				echo'<br>';
				while($row = mysqli_fetch_array($result)){
					
						echo'<body><tr><th . scope="row"' . $row['id'] . '</th>';
						echo'<td>' . $row['produto'] . '</td>';
						echo'<td>' . $row['quantidade'] . '</td>';
						echo'<td>' . $row['endereco'] . '</td>';
						echo'<td>' . $row['preco'] . '</td>';
						
				}
				echo '</tr></table>';
			   ?>
              </div>
            </div>
          </div>
            
              <!-- Illustrations -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">ROTA</h6>
                </div>
                <div class="card-body">
                  <div class="text-center">
                    <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="img/undraw_posting_photo.svg" alt="">
                  </div>
                  <p>...</p>
                  <a target="_blank" rel="nofollow" href="https://undraw.co/">...</a>
                </div>
              </div>

            
			<!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">ULTIMO LOCAL DE ENTREGA</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">Palmitos - SC</div>
                    </div>
                    <div class="col-auto">
						<i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
           
             <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">ULTIMA DATA DE ENTREGA</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">10/11/2019</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i> 
                    </div>
                  </div>
                </div>
              </div>
            </div>



        

             
           
            

<!-- CONTA-->
<div class="col-lg-6 mb-4">
                  <div class="card bg-success text-white shadow">
                    <div class="card-body">
                      CONTA
                      <div class="text-white-50 small">CPF: 01263548976 </div>
                    
					<div class="text-white-50 small">CONTA:205076 </div>
                    
                    <div class="text-white-50 small">AGÊNCIA: 150 </div>
                    
                    <div class="text-white-50 small">BANCO: BRASIL</div>
                    
                    <div class="text-white-50 small">FAVORECIDO: Fernando Dacroce </div>
                   
                    </div>
                  </div>
                </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>
  <script src="js/demo/chart-bar-demo.js"></script>

</body>

</html>
