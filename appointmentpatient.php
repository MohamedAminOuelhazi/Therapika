<?php require_once('check_login.php');?>
<?php include('head.php');?>
<?php include('header.php');?>
<?php include('sidebar.php');?>
<?php include('connect.php');
if(isset($_POST['btn_submit']))
{
  if(isset($_GET['editid']))
  {
    $sql ="UPDATE appointment SET patientid='$_POST[patient]',departmentid='$_POST[department]',appointmentdate='$_POST[appointmentdate]',appointmenttime='$_POST[appointmenttime]',doctorid='$_POST[doctor]',status='$_POST[status]' WHERE appointmentid='$_GET[editid]'";
        if($qsql = mysqli_query($conn,$sql))
        {
?>
            <div class="popup popup--icon -success js_success-popup popup--visible">
              <div class="popup__background"></div>
              <div class="popup__content">
                <h3 class="popup__content__title">
                  Success 
                </h3>
                <p>Appointment Record Updated Successfully</p>
                <p>
                 
                 <?php echo "<script>setTimeout(\"location.href = 'appointment.php';\",1500);</script>"; ?>
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
       $sql ="UPDATE patient SET status='Active' WHERE patientid='$_POST[patient]'";
       $qsql=mysqli_query($conn,$sql);

       $sql ="INSERT INTO appointment(patientid, departmentid, appointmentdate, appointmenttime, doctorid, status, app_reason) values('$_POST[patient]','$_POST[department]','$_POST[appointmentdate]','$_POST[appointmenttime]','$_POST[doctor]','$_POST[status]','$_POST[reason]')";
        if($qsql = mysqli_query($conn,$sql))
        {

           
?>
            <div class="popup popup--icon -success js_success-popup popup--visible">
              <div class="popup__background"></div>
              <div class="popup__content">
                <h3 class="popup__content__title">
                  Success 
                </h3>
                <p>Appointment Record Inserted Successfully</p>
                <p>
                 <!--  <a href="index.php"><button class="button button--success" data-for="js_success-popup"></button></a> -->
                 <?php echo "<script>setTimeout(\"location.href = 'appointment.php?patientid=$_POST[patient]';\",1500);</script>"; ?>
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
    $sql="SELECT * FROM appointment WHERE appointmentid='$_GET[editid]' ";
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
<h4>Appointment</h4>

</div>
</div>
</div>
<div class="col-lg-4">
<div class="page-header-breadcrumb">
<ul class="breadcrumb-title">
<li class="breadcrumb-item">
<a href="dashboard.php"> <i class="feather icon-home"></i> </a>
</li>
<li class="breadcrumb-item"><a>Appointment</a>
</li>
<li class="breadcrumb-item"><a href="add_user.php">Appointment</a>
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
    <?php
        if(isset($_GET['patid']))
        {
            $sqlpatient= "SELECT * FROM patient WHERE patientid='".$_GET['patid']."'";
            $qsqlpatient = mysqli_query($con,$sqlpatient);
            $rspatient=mysqli_fetch_array($qsqlpatient);
            echo $rspatient[patientname] . " (Patient ID - $rspatient[patientid])";
            echo "<input type='hidden' name='select4' value='$rspatient[patientid]'>";
        }
    ?>

    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Patient</label>
        <div class="col-sm-4">
            <select class="form-control" name="patient" id="patient" required="">
                
    <?php
    if(isset($_SESSION['patientid'])){
        $doctorId = $_SESSION['patientid'];
     $sqlpatient= "SELECT * FROM patient WHERE patientid = $doctorId AND status='Active'";
     $qsqlpatient = mysqli_query($conn,$sqlpatient);
     $rspatient=mysqli_fetch_array($qsqlpatient);
        
            echo "<option value='$rspatient[patientid]' selected>$rspatient[patientid] - $rspatient[patientname]</option>";

        }
    ?>
            </select>
            <span class="messages"></span>
        </div>

        <label class="col-sm-2 col-form-label">Department</label>
        <div class="col-sm-4">
            <select class="form-control" name="department" id="department" placeholder="Enter lastname...." required="">
                <option value="">-- Select One --</option>
                <?php
                    $sqldepartment= "SELECT * FROM department WHERE status='Active'";
                    $qsqldepartment = mysqli_query($conn,$sqldepartment);
                    while($rsdepartment=mysqli_fetch_array($qsqldepartment))
                    {
                        echo "<option value='$rsdepartment[departmentid]'>$rsdepartment[departmentname]</option>";


                    }
                ?>
            </select>
            <span class="messages"></span>
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Date</label>
        <div class="col-sm-4">
            <input type="date" class="form-control" name="appointmentdate" id="appointmentdate" placeholder="Enter firstname...." required="">
            <span class="messages"></span>
        </div>

        <label class="col-sm-2 col-form-label">Time</label>
        <div class="col-sm-4">
            <input type="time" class="form-control" name="appointmenttime" id="appointmenttime" placeholder="Enter lastname...." required="">
            <span class="messages"></span>
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Doctor</label>
        <div class="col-sm-4" id="doctor">
        <select name="doctor" id="doctor" class="form-control">
            <option value="">Choose Doctor</option>
        </select>
        </div>
        <label class="col-sm-2 col-form-label">Status</label>
        <div class="col-sm-4">
            <select name="status" id="status" class="form-control" required="">
                <option value="Inactive" <?php if(isset($_GET['patid']))
        { if($rsedit[status] == 'Inactive') { echo 'selected'; } } ?> selected >Inactive</option>
            </select>
            <span class="messages"></span>
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Reason</label>
        <div class="col-sm-10">
            <textarea class="form-control" name="reason" id="reason" placeholder="Reason...." required=""><?php if(isset($_GET['patid']))
        { echo $rsedit['app_reason']; } ?></textarea>
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
<script>
        const departmentSelect = document.getElementById('department');
        const doctor = document.getElementById('doctor');

        departmentSelect.addEventListener('change', function() {
            const selectedDepartment = this.value;

            // Envoyer la valeur du département à un script PHP pour récupérer les médecins
            const xhr = new XMLHttpRequest();
            xhr.open('GET', `get_doctors.php?department=${selectedDepartment}`, true);

            xhr.onload = function() {
                if (xhr.status === 200) {
                    doctor.innerHTML = xhr.responseText;
                }
            };

            xhr.send();
        });
    </script>
    
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