<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>S2T</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sh
        
        <!-- Scripts -->
        <script src="{{ asset('') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    </head>
    <body>
    <?php 
        include "konekcija.php";
        $sql="SELECT * FROM athletes";
        $rezultat = $mysqli->query($sql);
    ?>
    <div class="navbar center"  >
    <div class="navbar-inner">
        <div class="jumbotron bg-danger text-white-50 jumbotron-fluid">
            <div id="container">
                <h1 class="display-4">Serbia to Tokyo 2020</h1>
            </div>
        </div>
        <ul class="nav">
            <li class="navbar nav-item"><a href="/public">Home</a></li>
            <li class="navbar nav-item"><a href="/about">About Us</a></li>
            <li class="navbar nav-item"><a href="/team">Team Serbia</a></li>
            <li class="navbar nav-item"><a href="/sports">Sports</a></li>
            <li class="navbar nav-item"><a href="/athlete">Athletes</a></li>
            <li class="navbar nav-item"><a href="/fantasy">Fantasy</a></li>
        </ul>
        </div>
    </div>
        <div class="container">
            <?php
            echo "<table class=\"table\" border='1'>
            <thead>
                <tr>
                    <th scope=\"col\">Name</th>
                    <th scope=\"col\">Sport</th>
                    <th scope=\"col\">Country</th>
                    <th scope=\"col\">Year of Birthday</th>
                    <th scope=\"col\">Update</th>
                    <th scope=\"col\">Delete</th>
                    <th scope=\"col\">Details</th>
                    </tr>
            </thead>";
            //ispis podataka o zemlji
            while($red = $rezultat->fetch_object()){
             echo "<tr>";
             echo "<th scope=\"row\">" . $red->Name . "</th>";
             echo "<td>" . $red->Sport . "</td>";
             echo "<td>" . $red->Country . "</td>";
             echo "<td>" . $red->YearOfBirth . "</td>";
             $id = $red->Id ;
            
            echo "<td> <a href='editAthletes.php?id=$id'>Edit</a></td>";
            echo "<td> <a href='editAthletes.php?id=$id'>Delete</a></td>";
            echo "<td> <a href='editAthletes.php?id=$id'>Details</a></td>";
         
           ?>
           <?php
             echo "</tr>";
             }
            echo "</table>";
            ?>
        </div>
        
        <!-- Footer -->
<div class="jumbotron text-center">© Copyright 2019 Luka Radovanovic</div>

    </body>
</html>
