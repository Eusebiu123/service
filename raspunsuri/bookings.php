<?php
    session_start();
    $ceva=0;
    $email=$_SESSION['email'];
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../home/style.css">
    <title>Comenzi</title>

    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
</head>
<body>

<div id="sideNav">
        <nav>
            <ul>
                <li><a href="../home/index.php">HOME</a></li>
                <li><a href="../login/logout.php">LOG OUT</a></li>
                
            </ul>
        </nav>
    </div>
    <div id="menuBtn">
        <img src="../home/images/menu.png" id="menu">

    </div>

<div class="container mt-4">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 style="text-align:center">Raspuns Programari</h4>
                </div>
                <div class="card-body">

                    <table id="myTable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <!-- <th>Email</th> -->
                                <th>Marca</th>
                                <th>Model</th>
                                <th>Piesa</th>
                                <th>Data</th>
                                <th>Interval</th>
                                <th>Detalii</th>
                                <th>Raspuns</th>
                                <th>Acceptat</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            require 'dbcon.php';

                            $query = "SELECT * FROM raspunsuri where email='$email' and data is not null and ora is not null and raspuns is not null order by data,ora";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                foreach($query_run as $student)
                                {
                                    $ceva=$student['id'];
                                    ?>
                                    <tr>
                                        <!-- <td><?= $student['id'] ?></td> -->
                                        <!-- <td><?= $student['email'] ?></td> -->
                                        <td><?= $student['marca'] ?></td>
                                        <td><?= $student['model'] ?></td>
                                        <td><?= $student['piesa'] ?></td>
                                        <td><?= $student['data'] ?></td>
                                        <td><?= $student['timeslot'] ?></td>
                                        <td><?= $student['detalii'] ?></td>
                                        <td><?= $student['raspuns'] ?></td>
                                        <td><?= $student['acceptat'] ?></td>
                                        
                                    </tr>
                                    <?php
                                }
                            }

                            $query = "UPDATE raspunsuri SET vazut=1 where id=$ceva";
                            $query_run = mysqli_query($con, $query);
                            ?>
                            
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    <script>
        var menuBtn = document.getElementById("menuBtn")
        var sideNav = document.getElementById("sideNav")
        var menu = document.getElementById("menu")

        sideNav.style.right="-250px";

        menuBtn.onclick=function(){
            if(sideNav.style.right=="-250px"){
                sideNav.style.right="0";
                menu.src = "../home/images/close.png";
            }
            else{
                sideNav.style.right="-250px";
                menu.src = "../home/images/menu.png";
            }
        }

        var scroll = new SmoothScroll('a[href*="#"]', {
        speed: 1000,
        speedAsDuration: true
        });

    </script>

</body>
</html>