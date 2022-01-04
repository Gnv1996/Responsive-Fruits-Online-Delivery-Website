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

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/bg(1).jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/bg(10).jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/bg(11).jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<section class="my-5">
  <div class="py-5">
  

    <h1 class="text-center">About Us</h1>
</div>
  <div class="container-fluid">

    <div class="row">
      <div class="col-lg-6 col-md-6 col-12">
        <img src="img/bg(9).jpg" class="img-fluid aboutimg">
      </div>

      <div class="col-lg-6 col-md-6 col-12">
       <h2 class="display-4">Online Fruits Seller.</h2>
       <p class="py-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda asperiores 
         architecto corrupti repudiandae soluta expedita earum iusto aliquam eum, alias sint
          autem. Magnam fuga possimus corrupti tempora eligendi accusamus! Porro atque eveniet quibusdam obcaecati labore, iure corrupti, nulla, nobis unde exercitationem fugit rerum! Quis molestias quaerat eos. Ullam odio aliquid delectus 
         quisquam earum temporibus, amet aspernatur voluptatem vel placeat aliquam!</p>
         <a href="about.php" class="btn btn-success">Check More</a>
      </div>
</div>

    </div>
  </div>
</section>
<section class="my-5">
  <div class="py-5">
  

    <h1 class="text-center">Our Services</h1>
</div>
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-4 col-md-4 col-12" >
    <div class="card" >
  <img src="img/bg(11).jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Strawberry</h5>
    
    <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quia voluptatem quas veniam ratione voluptatibus illum!</p>
    <a href="service.php" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
  
    </div>
    <div class="col-lg-4 col-md-4 col-12" >
    <div class="card" >
  <img src="img/bg(5).jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Healthy Morning Juices</h5>
    <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora debitis, adipisci quaerat ducimus numquam excepturi.</p>
    <a href="service.php" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
  
    </div>

    <div class="col-lg-4 col-md-4 col-12" >
    <div class="card" >
  <img src="img/bg(7).jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Fruits Bucket</h5>
    <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora debitis, adipisci quaerat ducimus numquam excepturi.</p>
    <a href="service.php" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
  
    </div>



  </div>

</div>
</section>

<section class="my-5">
  <div class="py-5">
  <h1 class="text-center">Gallery</h1>
</div>
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-4 col-md-4 col-12">
      <img src="img/bg(11).jpg" class="img-fluid pb-3">

    </div>

    <div class="col-lg-4 col-md-4 col-12">
      <img src="img/bg(11).jpg" class="img-fluid pb-3">

    </div>

    <div class="col-lg-4 col-md-4 col-12">
      <img src="img/bg(11).jpg" class="img-fluid pb-3">

    </div>

    <div class="col-lg-4 col-md-4 col-12">
      <img src="img/bg(11).jpg" class="img-fluid pb-3">

    </div>

    <div class="col-lg-4 col-md-4 col-12">
      <img src="img/bg(11).jpg" class="img-fluid pb-3">

    </div>

    <div class="col-lg-4 col-md-4 col-12">
      <img src="img/bg(11).jpg" class="img-fluid pb-3">

    </div>

    <div class="col-lg-4 col-md-4 col-12">
      <img src="img/bg(11).jpg" class="img-fluid pb-3">

    </div>

    <div class="col-lg-4 col-md-4 col-12">
      <img src="img/bg(11).jpg" class="img-fluid pb-3">

    </div>

    <div class="col-lg-4 col-md-4 col-12">
      <img src="img/bg(11).jpg" class="img-fluid pb-3">

    </div>


  </div>

</div>
</section>

<section class="my-5 gn">
  <div class="py-5">
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


    <button type="submit" class="btn btn-success mb-3 my-3 form-control">Submit</button>




    
  </form>
</div>

</section>


<footer class="p-3 bg-dark text-white text-center"> 
  <p>@onlineFruit'sBucket.com</p>
</footer>

</body>
</html>