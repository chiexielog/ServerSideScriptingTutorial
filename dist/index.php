<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ServerSideScripting</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.1.0/mdb.min.css"
  rel="stylesheet"
/>
</head>
<body>
<header>
  <!-- Intro settings -->
  <style>
    /* Default height for small devices */
    #intro-example {
      height: 400px;
    }

    /* Height for devices larger than 992px */
    @media (min-width: 992px) {
      #intro-example {
        height: 600px;
      }
    }
  </style>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-black">
     <?php include('inc/navbar.php')?>
  
  </nav>
  <!-- Navbar -->

  <!-- Background image -->
  <div
    id="intro-example"
    class="p-5 text-center bg-image"
    style="background-image: url('resources/26212.jpg');">
    <div class="mask" style="background-color: rgba(0, 0, 0, 0.7);">
      <div class="d-flex justify-content-center align-items-center h-100">
        <div class="text-white">
          <h1 class="mb-3">Learn Bootstrap 5 with MDB</h1>
          <h5 class="mb-4">Best & free guide of responsive web design</h5>
          <a
            class="btn btn-outline-light btn-lg m-2"
            href="https://www.youtube.com/watch?v=c9B4TPnak1A"
            role="button"
            rel="nofollow"
            target="_blank">Start tutorial</a>
          <a
            class="btn btn-outline-light btn-lg m-2"
            href="https://mdbootstrap.com/docs/standard/"
            target="_blank"
            role="button">Download MDB UI KIT</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Background image -->
</header>
 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.1.0/mdb.min.js"
></script>
</body>
</html>