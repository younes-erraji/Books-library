<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Books Library</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="apple-touch-icon" href="{{ asset('images/library.png') }}"/>
    <link rel="shortcut icon" size="88x88" href="{{ asset('images/library.png') }}"/>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
</head>

<body>
    <div id="menubar">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex justify-content-between">
                    <div>
                        <img src="{{ asset('images/library.png') }}" height="70" alt='logo' />
                    </div>
                    <div class="menu">
                        <div class='menu-link'><a href="{{ route('dashboard') }}">Dashboard</a></div>
                        <div class='menu-link'><a href="{{ route('authors') }}">Authors</a></div>
                        <div class='menu-link'><a href="{{ route('publishers') }}">Publishers</a></div>
                        <div class='menu-link'><a href="{{ route('categories') }}">Categories</a></div>
                        <div class='menu-link'><a href="{{ route('books') }}">Books</a></div>
                        <div class='menu-link'><a href="{{ route('students') }}">Students</a></div>
                        <div class='menu-link'><a href="{{ route('book_issued') }}">Book Issues</a></div>
                        <!-- <div class='menu-link'><a href="{{ route('reports') }}">Reports</a></div> -->
                        <div class='menu-link'><a href="{{ route('settings') }}">Settings</a></div>
                        <div class='menu-link user-link ml-2'>
                            <div class="dropdown" style="z-index: 10;">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    My Account
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="{{ route('change_password') }}">Change Password</a>
                                    <a class="dropdown-item" href="#" onclick="document.getElementById('logoutForm').submit()">Log Out</a>
                                </div>
                                <form class="m-0" method="post" id="logoutForm" action="{{ route('logout') }}">
                                    @csrf
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @yield('content')

    <div id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <span>© Copyright 2023 <a href="#">Books Library.</a></span>
                    <br />
                    <span>Created By Younes ERRAJI & Maroua Elhadi</span>
                </div>
            </div>
        </div>
    </div>
    
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
