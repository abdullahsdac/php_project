<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
<header>
      <!-- place navbar here -->
      <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
          <a class="navbar-brand" href="#"
            ><img
              src="http://www.sdacinfotech.com/logo.png"
              class="img-fluid rounded"
              alt=""
              height="100"
              width="100"
          /></a>
          <button
            class="navbar-toggler d-lg-none"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#collapsibleNavId"
            aria-controls="collapsibleNavId"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav me-auto mt-2 mt-lg-0">
              <li class="nav-item">
              <a class="nav-link" href="home.php" aria-current="page"
                  >Home <span class="visually-hidden">(current)</span></a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.html">Contact us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login.html">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="reg.html">Registration</a>
              </li>
            </ul>
            <form class="d-flex my-2 my-lg-0">
              <input
                class="form-control me-sm-2"
                type="text"
                placeholder="Search"
              />
              <button
                class="btn btn-outline-success my-2 my-sm-0"
                type="submit"
              >
                Search
              </button>
            </form>
          </div>
        </div>
      </nav>
    </header>
  <main>

  <?php 
  
  include "connection.php";

$id = $_GET["id"];

  $sql= "SELECT * FROM `products` WHERE `id` = $id";
  $result = mysqli_query($conn,$sql);
  $row = mysqli_fetch_assoc($result);



  echo "<div class='container my-5'>
  <div class='row justify-content-center align-items-center g-2'>
    <div class='col-sm-12 col-md-6 col-lg-8'>
      <img
        src='admin/products/{$row['image']}'
        class='img-fluid rounded-top'
        alt=''
      />
    </div>
    <div class='col-sm-12 col-md-6 col-lg-4 p-5'>
      <h1>{$row['name']}</h1>
      <p>{$row['description']}</p>
      <a name='' id='' class='btn btn-primary' href='#' role='button'>view</a>
    </div>
  </div>
</div>";
  ?>





  </main>
  <footer class="bg-dark text-light py-3">
      <!-- place footer here -->
      <div class="container">
        <center>
          <h6>Copyright &copy; 2023. All rights Reserved by SDAC infotech</h6>
        </center>
      </div>
    </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
  </script>
</body>

</html>