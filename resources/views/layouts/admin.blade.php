<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

@section('content')
    <h1 class="text-center display-3">Welcome to the Admin Page!</h1>

    <div class="row mt-5">

        <div class="col-3 mt-5">

            <nav class="navbar flex-column align-items-start navbar-dark bg-dark">
                <a class="navbar-brand" href="/admin/users">Dashbord</a>
                  <ul class="navbar-nav">
                    <!-- Users -->
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Users
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="{{route('users.index')}}">All Users</a>
                        <a class="dropdown-item" href="{{route('users.create')}}">Create Users</a>
                      </div>
                    </li>
                    <!-- Posts -->
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Posts
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="{{route('posts.index')}}">All Posts</a>
                        <a class="dropdown-item" href="{{route('posts.create')}}">Create Post</a>
                      </div>
                    </li>
                    <!-- Categories -->
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Categories
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="{{route('categories.index')}}">All Categories</a>
                        <a class="dropdown-item" href="{{route('categories.create')}}">Create Category</a>
                      </div>
                    </li>
                    <!-- Media -->
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Media
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">All Media</a>
                        <a class="dropdown-item" href="#">Upload Media</a>
                      </div>
                    </li>
                    <!-- Charts -->
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Charts
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Flot Charts</a>
                        <a class="dropdown-item" href="#">Morris.js Charts</a>
                      </div>
                    </li>
                    <!-- Tables -->
                    <li class="nav-item"><a class="nav-link" href="#">Tables</a></li>
                    <!-- Forms -->
                    <li class="nav-item"><a class="nav-link" href="#">Forms</a></li>
                    <!-- Charts -->
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        UI Elements
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Panels and Wheels</a>
                        <a class="dropdown-item" href="#">Buttons</a>
                        <a class="dropdown-item" href="#">Notifications</a>
                        <a class="dropdown-item" href="#">Typhography</a>
                        <a class="dropdown-item" href="#">Icons</a>
                        <a class="dropdown-item" href="#">Grid</a>
                      </div>
                    </li>
                  </ul>
              </nav>

        </div>
        <div class="col-9 d-flex flex-column mt-n2">
          @yield('content')
        </div>

        @yield('footer')
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
