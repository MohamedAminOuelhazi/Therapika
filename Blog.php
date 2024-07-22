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
        $sql ="UPDATE blog SET title='$_POST[title]',description='$_POST[description]'WHERE posted_id='$_GET[editid]' AND posted_by ='admin' ";
        if($qsql = mysqli_query($conn,$sql))
        {
?>
            <div class="popup popup--icon -success js_success-popup popup--visible">
              <div class="popup__background"></div>
              <div class="popup__content">
                <h3 class="popup__content__title">
                  Success 
                </h3>
                <p>Blog Updated Successfully</p>
                <p>
                 
                 <?php echo "<script>setTimeout(\"location.href = 'view-blog.php';\",1500);</script>"; ?>
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
        $sql ="INSERT INTO blog(title,description,posted_by,posted_id) values(?,?,'admin',?)";
        $req = $conn->prepare($sql);
        $posted_id = $_SESSION['id'];
        $title = $_POST['title'];   
        $description = $_POST['description'];
        $req->bind_param("ssi", $title, $description, $posted_id);
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
                <p>Blog Inserted Successfully</p>
                <p>
                 
                 <?php echo "<script>setTimeout(\"location.href = 'view-blog.php';\",1500);</script>"; ?>
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
    $sql="SELECT * FROM blog WHERE posted_id='$_GET[editid]' AND posted_by='{$_SESSION['user']}' ";
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
<h4>Blog Admin</h4>

</div>
</div>
</div>
<div class="col-lg-4">
<div class="page-header-breadcrumb">
<ul class="breadcrumb-title">
<li class="breadcrumb-item">
<a href="dashboard.php"> <i class="feather icon-home"></i> </a>
</li>
<li class="breadcrumb-item"><a>Blog</a>
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
        <label class="col-sm-2 col-form-label">title</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" name="title" id="title" placeholder="Enter title...." required=""  value="<?php if(isset($_GET['editid'])) { echo $rsedit['title']; } ?>" >
            <span class="messages"></span>
        </div>

        <label class="col-sm-2 col-form-label">Blog</label>
        <div class="col-sm-4">
        <textarea  class="form-control" name="description" id="description" required><?php if(isset($_GET['editid'])) { echo $rsedit['description']; } ?></textarea>
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


<?php if(($_SESSION['user'] == 'doctor')) { ?>
    <?php        
if(isset($_POST['btn_submit']))
{   
    if(isset($_GET['editid']))
    {   $editId = $_GET['editid'];
        $sql ="UPDATE blog SET title='$_POST[title]',description='$_POST[description]'WHERE posted_id='$_GET[editid]' AND posted_by ='doctor' ";
        if($qsql = mysqli_query($conn,$sql))
        {
?>
            <div class="popup popup--icon -success js_success-popup popup--visible">
              <div class="popup__background"></div>
              <div class="popup__content">
                <h3 class="popup__content__title">
                  Success 
                </h3>
                <p>Blog Updated Successfully</p>
                <p>
                 
                 <?php echo "<script>setTimeout(\"location.href = 'view-blog.php';\",1500);</script>"; ?>
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
        $sql ="INSERT INTO blog(title,description,posted_by,posted_id) values(?,?,'doctor',?)";
        $req = $conn->prepare($sql);
        $posted_id = $_SESSION['id'];
        $title = $_POST['title'];   
        $description = $_POST['description'];
        $req->bind_param("ssi", $title, $description, $posted_id);
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
                <p>Blog Inserted Successfully</p>
                <p>
                
                <?php echo "<script>setTimeout(\"location.href = 'view-blog.php';\",1500);</script>"; ?>
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
    $sql="SELECT * FROM blog WHERE posted_id='$_GET[editid]' AND posted_by='{$_SESSION['user']}' ";
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
<h4>Blog Doctor</h4>

</div>
</div>
</div>
<div class="col-lg-4">
<div class="page-header-breadcrumb">
<ul class="breadcrumb-title">
<li class="breadcrumb-item">
<a href="dashboard.php"> <i class="feather icon-home"></i> </a>
</li>
<li class="breadcrumb-item"><a>Blog</a>
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
        <label class="col-sm-2 col-form-label">title</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" name="title" id="title" placeholder="Enter title...." required=""  value="<?php if(isset($_GET['editid'])) { echo $rsedit['title']; } ?>" >
            <span class="messages"></span>
        </div>

        <label class="col-sm-2 col-form-label">description</label>
        <div class="col-sm-4">
        <textarea  class="form-control" name="description" id="description" required><?php if(isset($_GET['editid'])) { echo $rsedit['description']; } ?></textarea>
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