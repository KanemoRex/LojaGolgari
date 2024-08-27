@if (Auth::check())
    
@else
    <script type="text/javascript">
        window.location = "{ url('/login') }";//here double curly bracket
    </script>
@endif

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Loja Golgari - Loja</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../../plugins/NiceAdmin/assets/img/favicon.png" rel="icon">
  <link href="../../plugins/NiceAdmin/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../../plugins/NiceAdmin/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../plugins/NiceAdmin/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../../plugins/NiceAdmin/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../../plugins/NiceAdmin/assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="../../plugins/NiceAdmin/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="../../plugins/NiceAdmin/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../../plugins/NiceAdmin/assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../../plugins/NiceAdmin/assets/css/style.css" rel="stylesheet">

  <link href="../../plugins/DataTables/datatables.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Jan 09 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <span class="d-none d-lg-block">Loja Golgari</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <span class="d-none d-md-block dropdown-toggle ps-2">{{ Auth::user()->name }}</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>{{Auth::user()->email}}</h6>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit">Sair</button>
                  </form>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="{{route('dashboard')}}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link " href="{{route('produto.index')}}">
          <i class="bi bi-grid"></i>
          <span>Produto</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link " href="{{route('transportadora.index')}}">
          <i class="bi bi-grid"></i>
          <span>Transportadora</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link " href="{{route('pedido.index')}}">
          <i class="bi bi-grid"></i>
          <span>Pedido</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link " href="{{route('preset.index')}}">
          <i class="bi bi-grid"></i>
          <span>Preset</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link " href="{{route('loja.index')}}">
          <i class="bi bi-grid"></i>
          <span>Loja</span>
        </a>
      </li>

      

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1 style="margin-bottom: 20px">Loja - Cadastro</h1>
     
    </div><!-- End Page Title -->

    <section class="section dashboard" style="margin-top: 40px">
      <div class="row">

        <form action="{{route('loja.update', $loja['id'])}}" method="POST">
            @csrf
        
            <input name="_method" type="hidden" value="PUT">
            
            <div>
                <label for="nomeloja" >Nome</label>
                <input type="text" name="nomeloja" id="nomeloja" style="width: 500px"
                    maxlength="50"
                    value="{{$loja['nomeloja']}}"
                    required>
            </div>
        
            <div>
                <label for="cnpj" >CNPJ</label>
                <input type="text" name="cnpj" id="cnpj" style="width: 500px"
                    maxlength="50"
                    value="{{$loja['cnpj']}}"
                    required>
            </div>
        
            <div>
                <label for="imagem" >Imagem</label>
                <input type="file" name="imagem" id="imagem"
                
                required>
            </div>
        
        
            <input type="submit" value="Gravar"/>
        </form>
        
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../../plugins/jquery/jquery.js"></script>
  <script src="../../plugins/NiceAdmin/assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="../../plugins/NiceAdmin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../../plugins/NiceAdmin/assets/vendor/chart.js/chart.umd.js"></script>
  <script src="../../plugins/NiceAdmin/assets/vendor/echarts/echarts.min.js"></script>
  <script src="../../plugins/NiceAdmin/assets/vendor/quill/quill.min.js"></script>
  <script src="../../plugins/NiceAdmin/assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="../../plugins/NiceAdmin/assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="../../plugins/NiceAdmin/assets/vendor/php-email-form/validate.js"></script>
  <script src="../../plugins/DataTables/datatables.js"></script>

  <!-- Template Main JS File -->
  <script src="../../plugins/NiceAdmin/assets/js/main.js"></script>

</body>

</html>
