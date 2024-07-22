<?php require_once('check_login.php');?>
<?php include('head.php');?>
<?php include('header.php');?>
<?php include('sidebar.php');?>
<?php include('connect.php');?>
<?php if(($_SESSION['user'] == 'admin')) { ?>
<?php        
if(isset($_POST['btn_submit']))
{   
    if(isset($_GET['editid']))
    {   $editId = $_GET['editid'];
        $sql ="UPDATE event SET title='$_POST[title]',description='$_POST[description]', startime='$_POST[startime]',endtime='$_POST[endtime]',datevent='$_POST[datevent]' WHERE id = '$_GET[editid]'";
        if($qsql = mysqli_query($conn,$sql))
        {
?>
            <div class="popup popup--icon -success js_success-popup popup--visible">
              <div class="popup__background"></div>
              <div class="popup__content">
                <h3 class="popup__content__title">
                  Success 
                </h3>
                <p>Event Updated Successfully</p>
                <p>
                 
                 <?php echo "<script>setTimeout(\"location.href = 'view-Event.php';\",1500);</script>"; ?>
                </p>
              </div>
            </div>
<?php
        }
        else
        {
            echo mysqli_error($conn);
        }   
    }
    else
    {  
        $sql ="INSERT INTO event(title,description,startime,endtime,datevent) values(?,?,?,?,?)";
        $req = $conn->prepare($sql);
        $title = $_POST['title'];   
        $description = $_POST['description'];
        $startime= $_POST["startime"];
        $endtime=$_POST["endtime"];
        $datevent= date("Y/m/d",strtotime($_POST["datevent"]));
        $req->bind_param("sssss", $title, $description,$startime,$endtime,$datevent);
        $req->execute();

        if($req)
        {
?>
            <div class="popup popup--icon -success js_success-popup popup--visible">
              <div class="popup__background"></div>
              <div class="popup__content">
                <h3 class="popup__content__title">
                  Success 
                </h3>
                <p>Event Inserted Successfully</p>
                <p>
                 
                 <?php echo "<script>setTimeout(\"location.href = 'view-Event.php';\",1500);</script>"; ?>
                </p>
              </div>
            </div>
<?php
        }
        else
        {
            echo mysqli_error($conn);
        }
    }
}
if(isset($_GET['editid']))
{
    $sql="SELECT * FROM event  WHERE id = '$_GET[editid]'";
    $qsql = mysqli_query($conn,$sql);
    $rsedit = mysqli_fetch_array($qsql);
    
}

?>
<script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>

<div class="pcoded-content">
<div class="pcoded-inner-content">

<div class="main-body">
<div class="page-wrapper">

<div class="page-header">
<div class="row align-items-end">
<div class="col-lg-8">
<div class="page-header-title">
<div class="d-inline">
<h4>Event Admin</h4>

</div>
</div>
</div>
<div class="col-lg-4">
<div class="page-header-breadcrumb">
<ul class="breadcrumb-title">
<li class="breadcrumb-item">
<a href="dashboard.php"> <i class="feather icon-home"></i> </a>
</li>
<li class="breadcrumb-item"><a>Event</a>
</li>
<li class="breadcrumb-item"><a href="add_user.php">Admin</a>
</li>
</ul>
</div>
</div>
</div>
</div>


<div class="page-body">
<div class="row">
<div class="col-sm-12">

<div class="card">
<div class="card-header">

</div>

<div class="card-block">

<form id="main" method="post" action="" enctype="multipart/form-data">
    
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Title</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" name="title" id="title" placeholder="Enter title...." required=""  value="<?php if(isset($_GET['editid'])) { echo $rsedit['title']; } ?>" >
            <span class="messages"></span>
        </div>

        <label class="col-sm-2 col-form-label">Description</label>
        <div class="col-sm-4">
        <textarea  class="form-control" name="description" id="description" required><?php if(isset($_GET['editid'])) { echo $rsedit['description']; } ?></textarea>
                <span class="messages"></span>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Heure de départ de l'événement</label>
        <div class="col-sm-4">
            <input type="time" class="form-control" name="startime" id="startime" placeholder="Saisissez l'heure de départ...." required="" value="<?php if(isset($_GET['editid'])) { echo $rsedit['startime'];}?>">
            <span class="messages"></span>
        </div>
        <label class="col-sm-2 col-form-label">Heure de fin  de l'événement</label>
        <div class="col-sm-4">
            <input type="time" class="form-control" name="endtime" id="endtime" placeholder="Saisissez l'heure de fin...." required="" value="<?php if(isset($_GET['editid'])) { echo $rsedit['endtime']; }?>">
            <span class="messages"></span>
        </div>
    </div>
    <div class="form-group row">
    <label class="col-sm-2 col-form-label">Date de l'événement</label>
        <div class="col-sm-4">
            <input type="date" class="form-control" name="datevent" id="datevent" placeholder="Enter admissiondate...." required=""  value="<?php if(isset($_GET['editid'])) { echo $rsedit['datevent']; } ?>" >
            <span class="messages"></span>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2"></label>
        <div class="col-sm-10">
            <button type="submit" name="btn_submit" class="btn btn-primary m-b-0">Submit</button>
        </div>
    </div>

</form>


</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<?php } ?>



<?php include('footer.php');?>

<script type="text/javascript">
    $('#main').keyup(function(){
        $('#confirm-pw').html('');
    });

    $('#cnfirmpassword').change(function(){
        if($('#cnfirmpassword').val() != $('#password').val()){
            $('#confirm-pw').html('Password Not Match');
        }
    });

    $('#password').change(function(){
        if($('#cnfirmpassword').val() != $('#password').val()){
            $('#confirm-pw').html('Password Not Match');
        }
    });
</script>