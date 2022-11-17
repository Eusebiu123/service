<?php



?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../home/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Programari</title>
    <link rel="stylesheet" href="../home/style.css">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />
</head>

<body id="banner">

    <section id="banner">

        <div id="sideNav">
            <nav>
                <ul>
                    <li><a href="../home/admin.php">HOME</a></li>
                    <li><a href="../login/logout.php">LOG OUT</a></li>

                </ul>
            </nav>
        </div>
        <div id="menuBtn">
            <img src="../home/images/menu.png" id="menu">

        </div>

        <!-- Add Booking -->
        <div class="modal fade" id="studentAddModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Student</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form id="saveStudent">
                        <div class="modal-body">

                            <div id="errorMessage" class="alert alert-warning d-none"></div>

                            <div class="mb-3">
                                <label for="">Email</label>
                                <input type="text" name="email" class="form-control" />
                            </div>
                            <div class="mb-3">
                                <label for="">Marca</label>
                                <input type="text" name="marca" class="form-control" />
                            </div>
                            <div class="mb-3">
                                <label for="">Model</label>
                                <input type="text" name="model" class="form-control" />
                            </div>
                            <div class="mb-3">
                                <label for="">Piesa</label>
                                <input type="text" name="piesa" class="form-control" />
                            </div>
                            <div class="mb-3">
                                <label for="">Detalii</label>
                                <input type="text" name="detalii" class="form-control" />
                            </div>
                            <div class="mb-3">
                                <label for="">Raspuns</label>
                                <input type="text" name="raspuns" class="form-control" />
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save Booking</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Edit Student Modal -->
        <div class="modal fade" id="studentEditModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Booking</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form id="updateStudent">
                        <div class="modal-body">

                            <div id="errorMessageUpdate" class="alert alert-warning d-none"></div>

                            <input type="hidden" name="student_id" id="student_id">

                            <div class="mb-3">
                                <label for="">Email</label>
                                <input type="text" name="email" id="email" autocomplete="off" class="form-control" />
                            </div>
                            <div class="mb-3">
                                <label for="">Marca</label>
                                <input type="text" name="marca" id="marca" autocomplete="off" class="form-control" />
                            </div>
                            <div class="mb-3">
                                <label for="">Model</label>
                                <input type="text" name="model" id="model" autocomplete="off" class="form-control" />
                            </div>
                            <div class="mb-3">
                                <label for="">Piesa</label>
                                <input type="text" name="piesa" id="piesa" autocomplete="off" class="form-control" />
                            </div>
                            <div class="mb-3">
                                <label for="">Detalii</label>
                                <input type="text" name="detalii" id="detalii" autocomplete="off" class="form-control" />
                            </div>
                            <div class="mb-3">
                                <label for="">Raspuns</label>
                                <input type="text" name="raspuns" id="raspuns" autocomplete="off" class="form-control" />
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Update</button>
                            <!-- <button type="submit" class="btn btn-primary">Update-nu</button>
                            <button type="button" value="<?=$student['id'];?>" class="acceptat btn btn-success btn-sm">Update-da</button> -->
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- View Student Modal -->
        <div class="modal fade" id="studentViewModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">View Booking</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <div class="mb-3">
                            <label for="">Email</label>
                            <p id="view_email" class="form-control"></p>
                        </div>
                        <div class="mb-3">
                            <label for="">Marca</label>
                            <p id="view_marca" class="form-control"></p>
                        </div>
                        <div class="mb-3">
                            <label for="">Model</label>
                            <p id="view_model" class="form-control"></p>
                        </div>
                        <div class="mb-3">
                            <label for="">Piesa</label>
                            <p id="view_piesa" class="form-control"></p>
                        </div>
                        <div class="mb-3">
                            <label for="">Detalii</label>
                            <p id="view_detalii" class="form-control"></p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mt-4">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 style="text-align:center">Programari

                            </h4>
                        </div>
                        <div class="card-body">

                            <table id="myTable" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <!-- <th>ID</th> -->
                                        <th>Email</th>
                                        <th>Marca</th>
                                        <th>Model</th>
                                        <th>Piesa</th>
                                        <th>Detalii</th>
                                        <th>Avem in Stoc</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                            require 'dbcon.php';
                        

                            $curr_data=date("y-m-d");
                            $query = "SELECT * FROM bookings where data is not null and sort is not null and vazut=0 and data>='$curr_data' order by data,sort";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                foreach($query_run as $student)
                                {
                                    $marca=$student['marca'];$model=$student['model'];$piesa=$student['piesa'];
                                    $query = "SELECT * FROM piese where marca='$marca' and  model='$model' and piesa='$piesa'";
                                    $query_run = mysqli_query($con, $query);
                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        $avem='Da';
                                    }
                                    else{
                                        $avem='Nu';
                                    }
                                    ?>
                                    <tr>
                                        <!-- <td><?= $student['id'] ?></td> -->
                                        <td><?= $student['email'] ?></td>
                                        <td><?= $student['marca'] ?></td>
                                        <td><?= $student['model'] ?></td>
                                        <td><?= $student['piesa'] ?></td>
                                        <td><?= $student['detalii'] ?></td>
                                        <td><?= $avem ?></td>
                                        <!-- <td><?= $student['raspuns'] ?></td> -->
                                        <td>
                                            <!-- <button type="button" value="<?=$student['id'];?>" class="viewStudentBtn btn btn-info btn-sm">View</button> -->
                                            <button type="button" value="<?=$student['id'];?>"
                                                class="editStudentBtn btn btn-warning btn-sm">Raspunde</button>
                                            <button type="button" value="<?=$student['id'];?>"
                                                class="deleteStudentBtn btn btn-danger btn-sm">Respinge</button>
                                            <button type="button" value="<?=$student['id'];?>"
                                                class="acceptat btn btn-success btn-sm">Accepta</button>
                                            <!-- <button type="button" value="<?=$student['id'];?>" class="raspunsStudentBtn btn btn-danger btn-sm">Raspunde</button> -->
                                        </td>
                                    </tr>
                                    <?php
                                }
                            }
                            ?>

                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

    <script>
    $(document).on('submit', '#saveStudent', function(e) {
        e.preventDefault();

        var formData = new FormData(this);
        formData.append("save_student", true);

        $.ajax({
            type: "POST",
            url: "code.php",
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {

                var res = jQuery.parseJSON(response);
                if (res.status == 422) {
                    $('#errorMessage').removeClass('d-none');
                    $('#errorMessage').text(res.message);

                } else if (res.status == 200) {

                    $('#errorMessage').addClass('d-none');
                    $('#studentAddModal').modal('hide');
                    $('#saveStudent')[0].reset();

                    alertify.set('notifier', 'position', 'top-right');
                    alertify.success(res.message);

                    $('#myTable').load(location.href + " #myTable");

                } else if (res.status == 500) {
                    alert(res.message);
                }
            }
        });

    });

    $(document).on('click', '.editStudentBtn', function() {

        var student_id = $(this).val();

        $.ajax({
            type: "GET",
            url: "code.php?student_id=" + student_id,
            success: function(response) {

                var res = jQuery.parseJSON(response);
                if (res.status == 404) {

                    alert(res.message);
                } else if (res.status == 200) {

                    $('#student_id').val(res.data.id);
                    $('#email').val(res.data.email);
                    $('#marca').val(res.data.marca);
                    $('#model').val(res.data.model);
                    $('#piesa').val(res.data.piesa);
                    $('#detalii').val(res.data.detalii);
                    $('#raspuns').val(res.data.raspuns);

                    $('#studentEditModal').modal('show');
                }

            }
        });

    });

    $(document).on('submit', '#updateStudent', function(e) {
        e.preventDefault();

        var formData = new FormData(this);
        formData.append("update_student", true);

        $.ajax({
            type: "POST",
            url: "code.php",
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {

                var res = jQuery.parseJSON(response);
                if (res.status == 422) {
                    $('#errorMessageUpdate').removeClass('d-none');
                    $('#errorMessageUpdate').text(res.message);

                } else if (res.status == 200) {

                    $('#errorMessageUpdate').addClass('d-none');

                    alertify.set('notifier', 'position', 'top-right');
                    alertify.success(res.message);

                    $('#studentEditModal').modal('hide');
                    $('#updateStudent')[0].reset();

                    $('#myTable').load(location.href + " #myTable");

                } else if (res.status == 500) {
                    alert(res.message);
                }
            }
        });

    });

    $(document).on('click', '.viewStudentBtn', function() {

        var student_id = $(this).val();
        $.ajax({
            type: "GET",
            url: "code.php?student_id=" + student_id,
            success: function(response) {

                var res = jQuery.parseJSON(response);
                if (res.status == 404) {

                    alert(res.message);
                } else if (res.status == 200) {

                    $('#view_email').text(res.data.email);
                    $('#view_marca').text(res.data.marca);
                    $('#view_model').text(res.data.model);
                    $('#view_piesa').text(res.data.piesa);
                    $('#view_detalii').text(res.data.detalii);
                    $('#view_raspuns').text(res.data.raspuns);

                    $('#studentViewModal').modal('show');
                }
            }
        });
    });

    $(document).on('click', '.deleteStudentBtn', function(e) {
        e.preventDefault();

        var student_id = $(this).val();
        $.ajax({
            type: "POST",
            url: "code.php",
            data: {
                'delete_student': true,
                'student_id': student_id
            },
            success: function(response) {

                var res = jQuery.parseJSON(response);
                if (res.status == 500) {

                    alert(res.message);
                } else {
                    alertify.set('notifier', 'position', 'top-right');
                    alertify.success(res.message);

                    $('#myTable').load(location.href + " #myTable");
                }
            }
        });

    });

    $(document).on('click', '.acceptat', function(e) {
        e.preventDefault();
        var student_id = $(this).val();
        $.ajax({
            type: "POST",
            url: "code.php",
            data: {
                'acceptat': true,
                'student_id': student_id
            },
            success: function(response) {

                var res = jQuery.parseJSON(response);
                if (res.status == 500) {

                    alert(res.message);
                } else {
                    alertify.set('notifier', 'position', 'top-right');
                    alertify.success(res.message);

                    $('#myTable').load(location.href + " #myTable");
                }
            }
        });

    });


    $(document).on('click', '.raspunsStudentBtn', function(e) {
        e.preventDefault();

        var student_id = $(this).val();
        $.ajax({
            type: "POST",
            url: "code.php",
            data: {
                'raspuns_student': true,
                'student_id': student_id
            },
            success: function(response) {

                var res = jQuery.parseJSON(response);
                if (res.status == 500) {

                    alert(res.message);
                } else {
                    alertify.set('notifier', 'position', 'top-right');
                    alertify.success(res.message);

                    $('#myTable').load(location.href + " #myTable");
                }
            }
        });
    });
    </script>
    <script>
    var menuBtn = document.getElementById("menuBtn")
    var sideNav = document.getElementById("sideNav")
    var menu = document.getElementById("menu")

    sideNav.style.right = "-250px";

    menuBtn.onclick = function() {
        if (sideNav.style.right == "-250px") {
            sideNav.style.right = "0";
            menu.src = "../home/images/close.png";
        } else {
            sideNav.style.right = "-250px";
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