<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
      integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
      crossorigin="anonymous"
    />
    <!-- fonts awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <title>DiaryCoffee</title>
  </head>
  <body>
    <header>
      <!-- nav 1 -->
      <nav>
        <ul class="nav justify-content-end container-fluid bg-warning">
          <li class="nav-item">
            <a class="nav-link text-dark" href="/register">Sing up</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="#">Log in</a>
          </li>
        </ul>
      </nav>
      <!-- nav 2 -->
      <nav class="navbar navbar-light bg-warning">
        <div>
          <a class="navbar-brand d-flex">
            <img
              width="50"
              height="50"
              class="rounded-circle"
              src="{{ asset('images/logo.jpg')}}"
              alt=""
            />
            <h3>DiaryCoffee</h3>
          </a>
        </div>
        <form class="form-inline">
          <input
            class="form-control mr-sm-2"
            type="search"
            placeholder="Search"
            aria-label="Search"
          />
          <button class="btn btn-secondary my-2 my-sm-0" type="submit">
            <i class="fa fa-search" aria-hidden="true"></i>
          </button>
        </form>
      </nav>
      <!-- nav 3 -->
      <nav class="container-fluid">
        <ul class="nav justify-content-center bg-secondary my-3 rounded">
          <li class="nav-item">
            <a class="nav-link text-warning" href="#">Hidden Jam</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-warning" href="#">Aestethic</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-warning" href="#">Live Music</a>
          </li>
        </ul>
      </nav>
    </header>

    <main class="container-fluid">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm col-lg-2">
            <h3 class="mb-3">Lokasi</h3>
            <ul class="list-group ">
              <a href=""><li class="list-group-item text-dark">Jakarta Timur</li></a>
              <a href=""><li class="list-group-item text-dark">Jakarta Selatan</li></a>
              <a href=""><li class="list-group-item text-dark">Jakarta Barat</li></a>
              <a href=""><li class="list-group-item text-dark">Jakarta Utara</li></a>
              <a href=""><li class="list-group-item text-dark">Jakarta Pusat</li></a>
            </ul>
          </div>
          <div class="col-sm col-lg-10">
            <div class="row my-5">
              <div class="col">
                <div class="card">
                  <a href="">
                    <img
                    height="250"
                    src="{{ asset('images/aestetik4.jpg')}}"
                    class="card-img-top"
                    alt="..."
                  />
                  </a>
                  <div class="card-body">
                    
                    <h5 class="card-title">Kopi Gram</h5>
                    <p class="card-text"></p>
                    <p class="card-text">desc : Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, blanditiis.</p>
                    <p class="card-text">lokasi :</p>
                    <p class="card-text">range harga :</p>
                    
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card">
                  <a href="">
                    <img height="250"
                    src="{{ asset('images/hiddenjam1.jpg')}}"
                    class="card-img-top"
                    alt="..."
                  />
                  </a>
                  
                  <div class="card-body">
                    <h5 class="card-title">Kopi Tuku</h5>
                    <p class="card-text">desc : Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, quibusdam?</p>
                    <p class="card-text">lokasi :</p>
                    <p class="card-text">harga :</p>
                    
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card">
                  <a href="">
                    <img height="250"
                    src="{{ asset('images/musik2.jpg')}}"
                    class="card-img-top"
                    alt="..."
                  />
                  </a>
                  
                  <div class="card-body">
                    <h5 class="card-title">Kopi Timur</h5>
                    <p class="card-text">desc : Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae, quia!</p>
                    <p class="card-text">lokasi :</p>
                    <p class="card-text">harga :</p>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script
      src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
      crossorigin="anonymous"
    ></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>
