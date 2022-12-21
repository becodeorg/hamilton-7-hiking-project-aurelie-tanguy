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
  <nav class="navbar navbar-expand-lg shadow-md py-1 bg-white relative flex items-center w-full justify-between">
    <div class="px-6 w-full flex flex-wrap items-center justify-between">
      <div class="flex items-center">
        <button
          class="navbar-toggler border-0 py-3 lg:hidden leading-none text-xl bg-transparent text-gray-600 hover:text-gray-700 focus:text-gray-700 transition-shadow duration-150 ease-in-out mr-2"
          type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContentY"
          aria-controls="navbarSupportedContentY" aria-expanded="false" aria-label="Toggle navigation">
          <svg aria-hidden="true" focusable="false" data-prefix="fas" class="w-5" role="img"
            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
            <path fill="currentColor"
              d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z">
            </path>
          </svg>
        </button>
      </div>
      <div class="navbar-collapse collapse grow items-center" id="navbarSupportedContentY">
        <ul class="navbar-nav mr-auto lg:flex lg:flex-row">
          <li class="nav-item">
            <a class="nav-link block pr-2 lg:px-2 py-2 text-gray-800 hover:text-gray-700 focus:text-gray-700 transition duration-150 ease-in-out"
              href="#!" data-mdb-ripple="true" data-mdb-ripple-color="light">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link block pr-2 lg:px-2 py-2 text-gray-600 hover:text-gray-700 focus:text-gray-700 transition duration-150 ease-in-out"
              href="#!" data-mdb-ripple="true" data-mdb-ripple-color="light">Profil</a>
          </li>
         
        </ul>
      </div>
    </div>
  </nav>
  <!-- Navbar -->

  <!-- Background image -->
  <div class="relative overflow-hidden bg-no-repeat bg-cover" style="
    background-position: 70%;
    background-image: url('https://i0.wp.com/images-prod.healthline.com/hlcmsresource/images/topic_centers/2019-8/couple-hiking-mountain-climbing-1296x728-header.jpg?w=1155&h=1528');
    height: 350px;
  ">
    <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed"
      style="background-color: rgba(0, 0, 0, 0.75)">
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