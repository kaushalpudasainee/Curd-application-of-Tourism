<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Great Vision</title>
    @vite(['resources/js/app.js'])
    <style>
    .container-fluid>a {
        font-weight: 800;
        font-size: 34px;
        color: purple;
    }

    .navbar-nav>li>a {
        font-size: 20px;
        font-weight: 800;
    }

    #formLayout {
        justify-content: center;
        width: 50%;
        margin: auto;
        background-color: gray;
        color: white;
        border-radius: 10px;
    }

    #formLayout>h1 {
        padding-top: 30px;
    }

    #formLayout>div>form>button {
        margin-bottom: 30px;
    }

    #formLayout>div>form>div {
        justify-content: center;
    }

    .form-control {
        width: 20rem;
    }

    #formLayout>div>form>div>span {
        background-color: white;
        color: red;
        border-radius: 5px;
    }
    </style>
</head>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{route('dashboard')}}">Welcome</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- <div class="collapse navbar-collapse" id="navbarNav"> -->
            <div class="d-flex justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                  <!-- <li class="nav-item"> -->
                        <!-- <a class="nav-link active" aria-current="page" href="/dashboard">Home</a> -->
                    <!-- </li> --> 
                    @auth 
                    <a href="{{route('dashboard')}}" class="nav-link">{{auth()->user()->name}}</a>
                    <ul>
                        
                    <li><a href="{{route('add')}}">Add</a></li>
                        <li><a href="{{route('view')}}">View</a></li>
                    </ul>
                    @endauth

                    @guest

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('login')}}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('register')}}">Register</a>
                    </li>
                    @endguest

                    
                    <!-- <li class="nav-item">
                        <a class="nav-link disabled">Extra</a>
                    </li> -->
                </ul>
            </div>
        </div>
    </nav>
    <!-- Dynamic content -->
    @yield('content')

</body>

</html>