<?php require_once('check_login.php');?>
<?php include('head.php');?>
<?php include('header.php');?>
<?php include('sidebar.php');?>
<?php include('connect.php');
if(isset($_POST['btn_submit']))
{
    if(isset($_GET['editid']))
    {
        $sql ="UPDATE doctor SET images='$_POST[image]'WHERE doctorid='$_GET[editid]'";
        if($qsql = mysqli_query($conn,$sql))
        {
?><div class="popup popup--icon -success js_success-popup popup--visible">
<div class="popup__background"></div>
<div class="popup__content">
  <h3 class="popup__content__title">
    Success 
  </h3>
  <p>Doctor Record Updated Successfully</p>
  <p>

   <?php echo "<script>setTimeout(\"location.href = 'view-doctor.php';\",1500);</script>"; ?>
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
$passw = hash('sha256', $_POST['password']);
function createSalt()
{
return '2123293dsj2hu2nikhiljdsd';
}
$salt = createSalt();
$pass = hash('sha256', $salt . $passw);
$sql ="INSERT INTO doctor(images) values('$_POST[image]')";
if($qsql = mysqli_query($conn,$sql))
{
?>
<div class="popup popup--icon -success js_success-popup popup--visible">
<div class="popup__background"></div>
<div class="popup__content">
  <h3 class="popup__content__title">
    Success 
  </h3>
  <p>Doctor Record Inserted Successfully</p>
  <p>

   <?php echo "<script>setTimeout(\"location.href = 'UploadImageDoctor.php';\",1500);</script>"; ?>
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
$sql="SELECT * FROM doctor WHERE doctorid='$_GET[editid]' ";
$qsql = mysqli_query($conn,$sql);
$rsedit = mysqli_fetch_array($qsql);

}

?>

<div class="pcoded-content">
<div class="pcoded-inner-content">

<div class="main-body">
<div class="page-wrapper">

<div class="page-header">
<div class="row align-items-end">
<div class="col-lg-8">
<div class="page-header-title">
<div class="d-inline">
<h4>Doctor</h4>

</div>
</div>
</div>
<div class="col-lg-4">
<div class="page-header-breadcrumb">
<ul class="breadcrumb-title">
<li class="breadcrumb-item">
<a href="dashboard.php"> <i class="feather icon-home"></i> </a>
</li>
<li class="breadcrumb-item"><a>Doctor</a>
</li>
<li class="breadcrumb-item"><a href="add_user.php">Doctor</a>
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
        <label class="col-sm-2 col-form-label">Télécharger votre photo de profil :</label>
        <div class="col-sm-4">
        <input type="file" class="form-control" name="image" id="image" value="<?php if(isset($_GET['editid'])) { echo $rsedit['image']; } ?>" >
        
            <span class="messages"></span>
    </div>

    <input type="submit" name="btn_submit" value="Donner Votre image">
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
<?php include('footer.php');?>