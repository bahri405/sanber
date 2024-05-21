<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
    <title>Register</title>
</head>
<body>
    <h1 class="container text-center my-5">Register</h1>
    <form action="/welcome" method="post" class="container col-6">
        @csrf
        <div class="form-group row">
          <label for="inputEmail3" class="col-sm-2 col-form-label">First Name</label>
          <div class="col-sm-10">
            <input type="text" name="name" class="form-control" id="name">
          </div>
        </div>
        <div class="form-group row">
          <label for="lastName" class="col-sm-2 col-form-label">Last Name</label>
          <div class="col-sm-10">
            <input type="text" name="lastName" class="form-control" id="lastName">
          </div>
        </div>
        
        
        <div class="form-group row">
          <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Daftar</button>
            <a class="btn btn-primary" href="/">
                kembali
            </a>
          </div>
          
        </div>
      </form>
    
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

</body> 
</html>