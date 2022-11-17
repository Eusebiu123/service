<?php

require 'dbcon.php';

if(isset($_POST['save_student']))
{
    $marca = mysqli_real_escape_string($con, $_POST['marca']);
    $model = mysqli_real_escape_string($con, $_POST['model']);
    $piesa = mysqli_real_escape_string($con, $_POST['piesa']);
    $cantitate = mysqli_real_escape_string($con, $_POST['cantitate']);

    if($marca == NULL || $model == NULL || $piesa == NULL || $cantitate == NULL)
    {
        $res = [
            'status' => 422,
            'message' => 'All fields are mandatory'
        ];
        echo json_encode($res);
        return;
    }
    $mysqli = new mysqli('localhost', 'root', 'beatrice1234', 'registration');

    $stmt = $mysqli->prepare("select * from piese where marca = ? AND model=? AND piesa=?");
    $stmt->bind_param('sss', $marca,$model,$piesa);
    if($stmt->execute()){
        $result = $stmt->get_result();
        if($result->num_rows>0){
            $query = "UPDATE piese SET cantitate=cantitate+'$cantitate' where marca='$marca' and model='$model' and piesa='$piesa'";
            $query_run = mysqli_query($con, $query);
        }
        else{
            $query = "INSERT INTO piese (marca,model,piesa,cantitate) VALUES ('$marca','$model','$piesa','$cantitate')";
            $query_run = mysqli_query($con, $query);
        }
    }

    if($query_run)
    {
        $res = [
            'status' => 200,
            'message' => 'Comanda Trimisa'
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 500,
            'message' => 'Comanda Netrimisa'
        ];
        echo json_encode($res);
        return;
    }
}


if(isset($_POST['update_student']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['student_id']);

    $name = mysqli_real_escape_string($con, $_POST['marca']);
    $email = mysqli_real_escape_string($con, $_POST['model']);
    $phone = mysqli_real_escape_string($con, $_POST['piesa']);
    $course = mysqli_real_escape_string($con, $_POST['cantitate']);

    if($name == NULL || $email == NULL || $phone == NULL || $course == NULL)
    {
        $res = [
            'status' => 422,
            'message' => 'All fields are mandatory'
        ];
        echo json_encode($res);
        return;
    }

    $query = "UPDATE piese SET marca='$name', model='$email', piesa='$phone', cantitate='$course' 
                WHERE id='$student_id'";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $res = [
            'status' => 200,
            'message' => 'Updated Successfully'
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 500,
            'message' => 'Not Updated'
        ];
        echo json_encode($res);
        return;
    }
}


if(isset($_GET['student_id']))
{
    $student_id = mysqli_real_escape_string($con, $_GET['student_id']);

    $query = "SELECT * FROM piese WHERE id='$student_id'";
    $query_run = mysqli_query($con, $query);

    if(mysqli_num_rows($query_run) == 1)
    {
        $student = mysqli_fetch_array($query_run);

        $res = [
            'status' => 200,
            'message' => 'Fetch Successfully by id',
            'data' => $student
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 404,
            'message' => 'Id Not Found'
        ];
        echo json_encode($res);
        return;
    }
}

if(isset($_POST['delete_student']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['student_id']);

    $query = "DELETE FROM piese WHERE id='$student_id'";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $res = [
            'status' => 200,
            'message' => 'Deleted Successfully'
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 500,
            'message' => 'Not Deleted'
        ];
        echo json_encode($res);
        return;
    }
}

?>