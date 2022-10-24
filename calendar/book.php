<?php
session_start();
$mysqli = new mysqli('localhost', 'root', 'beatrice1234', 'registration');
if(isset($_GET['date'])){

    $resourceid=$_GET['resource_id'];
    $stmt = $mysqli->prepare("select * from resources where id = ?");
    $stmt->bind_param('i', $resourceid);
    $stmt->execute();
    $result=$stmt->get_result();
    if($result->num_rows>0){
        $row = $result->fetch_assoc();
        $resourcename = $row['name'];
    }

    $date = $_GET['date'];
    $stmt = $mysqli->prepare("select * from bookings where date = ? AND resource_id=?");
    $stmt->bind_param('si', $date,$resourceid);
    $bookings = array();
    if($stmt->execute()){
        $result = $stmt->get_result();
        if($result->num_rows>0){
            while($row = $result->fetch_assoc()){
                $bookings[] = $row['timeslot'];
            }
        }
    }

    
}

if(isset($_POST['submit'])){
    $email = $_SESSION['email'];
    $timeslot = $_POST['timeslot'];
    $marca = $_POST['marca'];
    $model = $_POST['model'];
    $piesa = $_POST['piesa'];
    $detalii = $_POST['detalii'];
    
    $attachments= $_FILES["attachments"]["name"];
    
    $stmt = $mysqli->prepare("select * from bookings where date = ? AND timeslot =? AND resource_id=? ");
    $stmt->bind_param('ssi', $date,$timeslot,$resourceid);
    if($stmt->execute()){
        $result = $stmt->get_result();
        if($result->num_rows>0){
            $msg = "<div class='alert alert-danger'>Already Booked</div>";
        }else{
            $stmt = $mysqli->prepare("INSERT INTO bookings (timeslot, email, date,resource_id) VALUES (?,?,?,?)");
            $stmt->bind_param('sssi',$timeslot, $email, $date,$resourceid);
            $stmt->execute();
            $msg = "<div class='alert alert-success'>Booking Successfull</div>";
            $bookings[]=$timeslot;
            
        }
    }
    for ($i=0;$i<count($attachments);$i++){
        $file_tmp = $_FILES["attachments"]["tmp_name"][$i];
        $file_name = $_FILES["attachments"]["name"][$i]; 

        $curdir = getcwd();
        $stmt = $mysqli->prepare("select id from bookings order by id desc limit 1");
        if($stmt->execute()){
            $result = $stmt->get_result();
            if($result->num_rows>0){
                while($row = $result->fetch_assoc()){
                    $ceva = $row['id'];
                }
            }
        }
    
        $path=$curdir ."/fisiere/" ."$ceva";
        if(!file_exists($path)){
            mkdir($path,0077);
        }
        move_uploaded_file($file_tmp, "$path" ."/" . $file_name);
  
    }  
}
$duration=20;
$cleanup=0;
$start="09:00";
$end="17:00";

function timeslots($duration,$cleanup,$start,$end){
    $start = new DateTime($start);
    $end = new DateTime($end);
    $interval = new DateInterval("PT".$duration."M");
    $cleanupInterval = new DateInterval("PT".$cleanup."M");
    $slots = array();

    for($intStart = $start;$intStart<$end;$intStart->add($interval)->add($cleanupInterval)){
        $endPeriod = clone $intStart;
        $endPeriod->add($interval);
        if($endPeriod>$end){
            break;
        }

        $slots[] = $intStart->format("H:iA")."-".$endPeriod->format("H:iA");

    }

    return $slots;

}

?>
<!doctype html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../home/style.css">

    <title></title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/main.css">
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

    <div class="container">
        <h1 class="text-center">Booking for <?php echo $resourcename; ?> , date: <?php echo date('m/d/Y', strtotime($date)); ?></h1><hr>
        <div class="row">
            <div class="col-md-12">
                <?php echo isset($msg)?$msg:"";?>
            </div>
            <?php $timeslots=timeslots($duration,$cleanup,$start,$end);
                foreach($timeslots as $ts){
            ?>
                <div class="col-md-2">
                    <div class="form-group">
                        <?php if(in_array($ts,$bookings)){ ?>
                            <button class="btn btn-danger"><?php echo $ts; ?></button>

                        <?php }else{ ?>
                            <button class="btn btn-success book" data-timeslot="<?php echo $ts; ?>"><?php echo $ts; 
                                ?></button>
                        <?php }?>
                        
                        
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    
    
    <div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Booking: <span id="slot"></span></h4>
      </div>
      <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <form action="" method="post" enctype="multipart/form-data">

                           <div class="form-group">
                                <label for="">Timeslot</label>
                                <input require type="text" readonly name="timeslot" id="timeslot" class="form-control">
                           </div> 

                           <div class="form-group">
                                <label for="">Marca</label>
                                <input require type="text"  name="marca" class="form-control">
                           </div> 
                           <div class="form-group">
                                <label for="">Model</label>
                                <input require type="text"  name="model" class="form-control">
                           </div> 

                           <div class="form-group">
                                <label for="">Piesa</label>
                                <input require type="text"  name="piesa" class="form-control">
                           </div> 
                           <div class="form-group">
                                <label for="">Detalii</label>
                                <input require type="text"  name="detalii" class="form-control">
                           </div> 
                           <div class="col-6">
                                <label for="attachments" class="form-label">Attachments (Multiple) </label>
                                <input type="file" class="form-control" multiple id="attachments" name="attachments[]" placeholder="name">
                            </div>
                            
                           <div class="form-group pull-right">
                                <button class="btn btn-primary" type="submit" name="submit">Submit</button>
                           </div>

                        </form>
                    </div>
                </div>
      </div>
      
    </div>

  </div>
</div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script>
        $(".book").click(function(){
            var timeslot = $(this).attr('data-timeslot');
            $("#slot").html(timeslot);
            $("#timeslot").val(timeslot);
            $("#myModal").modal("show");
        })
    </script>
  </body>
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

</html>
