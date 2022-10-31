<?php

require 'dbcon.php';

if(isset($_POST['save_student']))
{
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $marca = mysqli_real_escape_string($con, $_POST['marca']);
    $model = mysqli_real_escape_string($con, $_POST['model']);
    $piesa = mysqli_real_escape_string($con, $_POST['piesa']);
    $detalii = mysqli_real_escape_string($con, $_POST['detalii']);
    $raspuns = mysqli_real_escape_string($con, $_POST['raspuns']);

    if($email == NULL || $marca == NULL || $model == NULL || $piesa == NULL || $detalii == NULL)
    {
        $res = [
            'status' => 422,
            'message' => 'All fields are mandatory'
        ];
        echo json_encode($res);
        return;
    }

    $query = "INSERT INTO bookings (email,marca,model,piesa,detalii,raspuns) VALUES ('$email','$marca','$model','$piesa','$detalii','$raspuns')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $res = [
            'status' => 200,
            'message' => 'Student Created Successfully'
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 500,
            'message' => 'Student Not Created'
        ];
        echo json_encode($res);
        return;
    }
}


if(isset($_POST['update_student']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['student_id']);

    $email = mysqli_real_escape_string($con, $_POST['email']);
    $marca = mysqli_real_escape_string($con, $_POST['marca']);
    $model = mysqli_real_escape_string($con, $_POST['model']);
    $piesa = mysqli_real_escape_string($con, $_POST['piesa']);
    $detalii = mysqli_real_escape_string($con, $_POST['detalii']);
    $raspuns = mysqli_real_escape_string($con, $_POST['raspuns']);

    if($marca == NULL || $email == NULL || $model == NULL || $piesa == NULL || $detalii == NULL || $raspuns == NULL)
    {
        $res = [
            'status' => 422,
            'message' => 'All fields are mandatory'
        ];
        echo json_encode($res);
        return;
    }

    $query = "UPDATE bookings SET email='$email', marca='$marca', model='$model' , piesa='$piesa', detalii='$detalii', raspuns='$raspuns'
                WHERE id='$student_id'";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $res = [
            'status' => 200,
            'message' => 'Booking Updated Successfully'
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 500,
            'message' => 'Booking Not Updated'
        ];
        echo json_encode($res);
        return;
    }
}


if(isset($_GET['student_id']))
{
    $student_id = mysqli_real_escape_string($con, $_GET['student_id']);

    $query = "SELECT * FROM bookings WHERE id='$student_id'";
    $query_run = mysqli_query($con, $query);

    if(mysqli_num_rows($query_run) == 1)
    {
        $student = mysqli_fetch_array($query_run);

        $res = [
            'status' => 200,
            'message' => 'Booking Fetch Successfully by id',
            'data' => $student
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 404,
            'message' => 'Booking Id Not Found'
        ];
        echo json_encode($res);
        return;
    }
}

if(isset($_POST['delete_student']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['student_id']);

    $query = "DELETE FROM bookings WHERE id='$student_id'";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $res = [
            'status' => 200,
            'message' => 'Booking Deleted Successfully'
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 500,
            'message' => 'Booking Not Deleted'
        ];
        echo json_encode($res);
        return;
    }
}

?>