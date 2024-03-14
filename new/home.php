<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS v5.2.1 -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
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
      <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
          <li
            data-bs-target="#carouselId"
            data-bs-slide-to="0"
            class="active"
            aria-current="true"
            aria-label="First slide"
          ></li>
          <li
            data-bs-target="#carouselId"
            data-bs-slide-to="1"
            aria-label="Second slide"
          ></li>
          <li
            data-bs-target="#carouselId"
            data-bs-slide-to="2"
            aria-label="Third slide"
          ></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active">
            <img
              src="https://images.pexels.com/photos/3075993/pexels-photo-3075993.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
              class="w-100 d-block"
              alt="First slide"
            />
            <div class="carousel-caption d-none d-md-block">
              <h3>Image 1</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum
                nulla eligendi exercitationem obcaecati, asperiores adipisci
                modi harum, ab veniam est ex, quas incidunt! Quia iure
                dignissimos dolore expedita, ducimus autem!
              </p>
            </div>
          </div>
          <div class="carousel-item">
            <img
              src="https://images.pexels.com/photos/313782/pexels-photo-313782.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
              class="w-100 d-block"
              alt="Second slide"
            />
            <div class="carousel-caption d-none d-md-block">
              <h3>Image 2</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum
                nulla eligendi exercitationem obcaecati, asperiores adipisci
                modi harum, ab veniam est ex, quas incidunt! Quia iure
                dignissimos dolore expedita, ducimus autem!
              </p>
            </div>
          </div>
          <div class="carousel-item">
            <img
              src="https://images.pexels.com/photos/2362882/pexels-photo-2362882.png?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
              class="w-100 d-block"
              alt="Third slide"
            />
            <div class="carousel-caption d-none d-md-block">
              <h3>Image 3</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum
                nulla eligendi exercitationem obcaecati, asperiores adipisci
                modi harum, ab veniam est ex, quas incidunt! Quia iure
                dignissimos dolore expedita, ducimus autem!
              </p>
            </div>
          </div>
        </div>
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#carouselId"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#carouselId"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      <?php 

        include "connection.php";



        $sql = "SELECT * FROM `products`";
        $result = mysqli_query($conn,$sql);

        if (mysqli_num_rows($result)>0) {

        echo "<div class='container my-5'>
        <h1 class='text-center my-3'>Services</h1>
        <p class='text-center my-3'>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, debitis!
        </p>
        <div class='row justify-content-center align-items-center g-2'>
        ";

        while ($rows = mysqli_fetch_assoc($result)) {
            echo "     <div class='col-sm-12 col-md-6 col-lg-4'>
            <div class='card'>
              <img
                class='card-img-top'
                src='admin/products/{$rows['image']}'
                alt='Title'
              />
              <div class='card-body'>
                <h4 class='card-title'>{$rows['name']}</h4>
                <p class='card-text'>{$rows['description']}</p>
                <center>
                  <a
                    name=''
                    id=''
                    class='btn btn-success'
                    href='view.php?id={$rows['id']}'
                    role='button'
                    >View</a
                  >
                </center>
              </div>
            </div>
          </div>";
        }

          echo "
          </div>
          </div>";
            




        } else {
          echo "0 Record Found";
        }



        mysqli_close($conn);
        ?>



      <div class="container my-5">
        <h2 class="text-center text-muted my-4">Propery Video</h2>
        <center>
          <iframe
            width="900"
            height="400"
            src="https://www.youtube.com/embed/pHM_se2SPYs?si=IVb7LQFw0td36b0h"
            title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen
          ></iframe>
        </center>
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
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"
    ></script>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
      integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
