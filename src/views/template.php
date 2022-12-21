<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$data["title"]?></title>
    <link rel="stylesheet" href="/style.css">
    
</head>
<body>
    <header>
  <!-- Navbar -->

  <!-- Navbar -->

  <!-- Background image -->
  <div class="relative overflow-hidden bg-no-repeat bg-cover" style="
    background-position: 70%;
    background-image: url('https://i0.wp.com/images-prod.healthline.com/hlcmsresource/images/topic_centers/2019-8/couple-hiking-mountain-climbing-1296x728-header.jpg?w=1155&h=1528');
    height: 350px;
  ">
    <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed"
      style="background-color: rgba(0, 0, 0, 0.50)">
      <nav class="navbar navbar-expand-lg flex items-center w-full justify-between">
    <div class="px-6 w-full flex flex-wrap items-center justify-between">
      <div class="navbar items-center" id="navbarSupportedContentY">
        <ul class="navbar-nav mr-auto lg:flex lg:flex-row">
          <li class="nav-item">
            <a class="nav-link block pr-3 lg:px-2 py-2 text-white hover:underline"
              href="/display/home" >Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link block pr-3 lg:px-2 py-2 text-white hover:underline transition duration-150 ease-in-out"
              href="/display/list">Hikes</a>
          </li>
        </ul>
      </div>

      <div class="navbar items-center" id="navbarSupportedContentY">
        <ul class="navbar-nav mr-auto lg:flex lg:flex-row">
          <?php 
          if (isset ($_SESSION['user'])) {
          ?>
          <li class="nav-item">
            <a class="nav-link block pr-3 lg:px-2 py-2 text-white hover:underline"
              href="/display/home" >Profil</a>
          </li>
          <?php
          }else {
          ?>
          <li class="nav-item">
            <a class="nav-link block pr-3 lg:px-2 py-2 text-white hover:underline transition duration-150 ease-in-out"
              href="/display/list">Register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link block pr-3 lg:px-2 py-2 text-white hover:underline transition duration-150 ease-in-out"
              href="/display/list">Login</a>
          </li>
          <?php
          }
          ?>
        </ul>
      </div>
    </div>
  </nav>

      <div class="flex justify-center items-center h-full">
        <div class="text-center text-white px-6 md:px-12">
          <h1 class="text-5xl font-bold mt-0 mb-6">Hiking Project</h1>
        </div>
      </div>
    </div>
  </div>
  <!-- Background image -->
    </header>
    <main>
        <?= $data["content"] ?>
    </main>
    <footer>
        <p>Footer</p>
    </footer>
</body>
</html>