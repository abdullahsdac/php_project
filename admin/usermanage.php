<?php 
session_start();

if (!isset($_SESSION["uname"])) {
  header("location:index.html");
}

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

  <div class='container my-5'>
<h1 class='text-center my-5'>User Management</h1>
  <?php 

include "connection.php";



$sql = "SELECT * FROM `users`";
$result = mysqli_query($conn,$sql);

if (mysqli_num_rows($result)>0) {

echo "
<div class='table-responsive'>
    <table class='table table-primary'>
        <thead>
            <tr>
                <th scope='col'>Id</th>
                <th scope='col'>Name</th>
                <th scope='col'>Email</th>
                <th scope='col'>Username</th>
                <th scope='col'>Password</th>
                <th scope='col'>Action</th>
            </tr>
        </thead>
        <tbody>
";

while ($rows = mysqli_fetch_assoc($result)) {
    echo "  <tr class=''>
    <td scope='row'>{$rows['id']}</td>
    <td>{$rows['name']}</td>
    <td>{$rows['email']}</td>
    <td>{$rows['username']}</td>
    <td>{$rows['password']}</td>
    <td>
        <a name='' id='' class='btn btn-warning' href='edit_user.php?id={$rows['id']}' role='button'>Edit</a>
        <a name='' id='' class='btn btn-danger' href='delete_user.php?id={$rows['id']}' role='button'>Delete</a>
    </td>
</tr>";
}

   echo "
   </tbody>
</table>
</div>

";
    




} else {
   echo "<h6 class='text-center text-danger'>0 Record Found</h6>";
}



mysqli_close($conn);
?>




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



