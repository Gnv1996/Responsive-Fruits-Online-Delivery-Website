<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@400;500&family=Oswald:wght@300;600&family=Roboto+Mono:wght@100&family=Roboto:wght@100;300&display=swap" rel="stylesheet">
</head>
<body>
  

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Fruit's Bucket</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto ml-2 ml-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About US</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="service.php">Services</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact US</a>
        </li>
        
       
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<section class="my-2 gn">
  <div class="py-2">
  <h1 class="text-center">Contact Us</h1>
</div>
<div class="w-50 m-auto">
  <form action="userinfo.php" method="post">
    <div class="form-group">
      <label>Username</label>
      <input type="text" name="user" autocomplete="off" class="form-control">
    </div>

    <div class="form-group">
      <label>Email Id</label>
    
      <input type="email" name="email" autocomplete="off" class="form-control">
    </div>

    <div class="form-group">
      <label>Mobile Number</label>
      <input type="phone" name="mobile" autocomplete="off" class="form-control">
    </div>


    <div class="form-group">
      <label>Address</label>
      <textarea class="form-control" name="address"></textarea>
    </div>


    <div class="form-group">
      <label>Comments</label>
      <textarea class="form-control" name="comment"></textarea>
    </div>


    <button type="submit" class="btn btn-success mb-3 my-2 form-control">Submit</button>

  </form>
</div>

</section>

<footer class="p-3 bg-dark text-white text-center"> 
  <p>@onlineFruit'sBucket.com</p>
</footer>

</body>
</html>