<?php 

include "connection.php";

$id = $_GET["id"];


$sql = "SELECT * FROM `users` WHERE `id` = $id";
$result = mysqli_query($conn,$sql);

$row = mysqli_fetch_assoc($result);









?>




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
          <a class="navbar-brand" href="dashboard.php"
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
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="dashboard.php"
                  id="dropdownId"
                  data-bs-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                  >Dashboard</a
                >
                <div class="dropdown-menu" aria-labelledby="dropdownId">
                  <a class="dropdown-item" href="usermanage.php"
                    >User Management</a
                  >
                  <a class="dropdown-item" href="contactmanage.php"
                    >Contact Management</a
                  >
                  <a class="dropdown-item" href="productmanage.php"
                    >Product Management</a
                  >
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="logout.php">Logout</a>
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

  <div class="container border-5 border border-dark my-5 p-5">
    <h1 class="text-center">Edit User form</h1>
    <form action="update_user.php" method="post">
        <div class="mb-3">
          
          <input type="hidden"
            class="form-control" name="id" id="" 
            value="<?php echo "{$row['id']}"; ?>"
            aria-describedby="helpId" placeholder="">
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Name</label>
          <input type="text"
            class="form-control"  value="<?php echo "{$row['name']}"; ?>"name="name" id="" aria-describedby="helpId" placeholder="">
          <small id="helpId" class="form-text text-muted">Help text</small>
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Email</label>
          <input type="email" class="form-control"  value="<?php echo "{$row['email']}"; ?>" name="email" id="" aria-describedby="emailHelpId" placeholder="abc@mail.com">
          <small id="emailHelpId" class="form-text text-muted">Help text</small>
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Username</label>
          <input type="text"
            class="form-control" name="uname" id=""  value="<?php echo "{$row['username']}"; ?>" aria-describedby="helpId" placeholder="">
          <small id="helpId" class="form-text text-muted">Help text</small>
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Password</label>
          <input type="text"
            class="form-control" name="pass" id=""  value="<?php echo "{$row['password']}"; ?>" aria-describedby="helpId" placeholder="">
          <small id="helpId" class="form-text text-muted">Help text</small>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
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