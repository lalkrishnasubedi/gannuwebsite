<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/style.css">


    <title>Ganesh tutorial video</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Ganesh subedi</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="service.php">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact us</a>
        </li>
       
         
       
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<section class="my-5">
    <div class="py-5">
        <h2 class="text-center">Contact us</h2>
    </div>
    <div class="w-50 m-auto ">
        <form action="userinfo.php" method="post">
    <div class="form-group">
<label>Username</label>
<input type="text" name="user" autocomplete="off" class="form-control">
            </div>
            <div class="form-group">
<label>email</label>
<input type="text" name="email" autocomplete="off" class="form-control">
            </div>
            <div class="form-group">
<label>mobile number</label>
<input type="text" name="mobile" autocomplete="off" class="form-control">
            </div>
            <div class="form-group">
<label>comment</label>
<textarea  class="form-control" name="comment"></textarea>
            </div>
            <button type="submit" class="btn btn-success">submit</button>
        </form>
    </div>
</section>

<footer>
   <p class="p-3 bg-dark text-white text-center"> @ganesh subediproduction</p>
</footer>
</body>
</html>