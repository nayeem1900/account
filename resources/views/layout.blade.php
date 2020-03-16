<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="{{asset('css/custom.css')}}">

</head>
<body>
    <div class="header">
        @section('header')

            <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="#">WebSiteName</a>
                    </div>
                    <ul class="nav navbar-nav">
                        <li><a href="userlist">Userlist</a></li>
                        <li><a href="create">Create</a></li>
                        <li><a href="/">Login</a></li>
                    </ul>

                </div>
            </nav>

        @show
    </div>


    <div class="content">
        @section('content')
        <h1>content par</h1>
            @show
    </div>


    <div class="footer">
        @section('footer')
        <h1 id="footer">footer part</h1>

            @show
    </div>

</body>

</html>