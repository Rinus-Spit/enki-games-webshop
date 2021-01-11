
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="XT1HwjFEyEoi7F2VUQKZydPI18hC7ul3U1HnMGot">

    <title>Gameshop</title>

    <!-- Scripts -->
    <script src="http://e-commerce.build/js/app.js" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="http://e-commerce.build/css/app.css" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="http://gameshop.build">
                    <i class="fas fa-dice-two" style="color: rgb(0, 0, 0)"></i>
                    Gameshop
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                                                    <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    bert <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="http://e-commerce.build/logout"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="http://e-commerce.build/logout" method="POST" style="display: none;">
                                        <input type="hidden" name="_token" value="XT1HwjFEyEoi7F2VUQKZydPI18hC7ul3U1HnMGot">                                    </form>
                                </div>
                            </li>
                                            </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">



            <div class="container">
                <div class="row">
                  <div class="col-md-4">
                    <ul class="list-group" style="margin-top: 35px">
                        <div class="card card-default">
                            <div class="card-header" style="border-bottom:none">
                                Navigate
                            </div>

                                <li class="list-group-item" style="border-left: none; border-right:none; border-bottom: -15px">
                                    <a href="/" style="text-decoration: none">
                                        <i class="fa fa-home"></i>
                                               Home
                                        </a>
                                    </li>


                                <li class="list-group-item" style="border-right: none; border-left: none; border-right:none">
                                    <a href="/" style="text-decoration: none">
                                        <i class="fa fa-tag"></i>
                                        Products
                                    </a>
                                    </li>


                                <li class="list-group-item" style="border-right: none; border-left: none; border-right:none">
                                    <a href="/" style="text-decoration: none">
                                        <i class="fa fa-trash"></i>
                                        Trashed products
                                    </a>
                                    </li>


                                <li class="list-group-item" style="border-right: none; border-left: none; border-right:none; border-bottom: none">
                                    <a href="/" style="text-decoration: none">
                                        <i class="fa fa-plus"></i>
                                        Create new product
                                    </a>
                                    </li>

                            </div>
<br>

                                        </li>
                    </ul>
                </div>



                   <div class="col">



<div class="card"  style="margin-top: 35px">

    <div class="card-header">Add a new product</div>

    <div class="card-body">
    <form action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="XT1HwjFEyEoi7F2VUQKZydPI18hC7ul3U1HnMGot">

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control">
            </div>

            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" name="image" class="form-control">
            </div>
            <div class="form-group">

            </div>



            <div class="form-group">
                <label for="description">Price</label>
                    <input type="text" name="price" id="price" class="form-control">
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                    <textarea name="description" id="description" cols="10" rows="10" class="form-control"></textarea>
            </div>

            <div class="form-group">
                <div class="text-center">
                    <button class="btn btn-success" type="submit">Submit</button>

                </div>


            </div>
        </form>
    </div>




                   </div>
               </div>
           </div>
        </main>
    </div>
</body>
</html>
