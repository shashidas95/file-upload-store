<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello World</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        li {
            list-style: none;
            padding: 0 1.3rem;

        }

        a {
            text-decoration: none;
        }

        .container {
            max-width: 60rem;
            margin: auto;
            text-align: center;
        }

        .navbar-nav {
            padding: 1.8rem 1.2rem;


            display: flex;
            justify-content: center;
            align-items: center;

        }
    </style>
</head>

<body>

    <nav>
        <div class="navbar" id="">
            <ul class="navbar-nav ">
                <li class="nav-item">
                    <a class="navbar-brand" href="#"><img src="https://laravel.com/img/logomark.min.svg"
                            alt=""></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">contact</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container ">
        <h1>Hello, world!</h1>
    </div>
</body>

</html>
