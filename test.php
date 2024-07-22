<?php require_once('check_login.php');?>
<?php include('head.php');?>
<?php include('headder.php');?>
<?php include('sidebar.php');?>
<?php include('connect.php');
if(isset($_POST['btn_submit']))
{
    if(isset($_GET['editid']))
    {
        $sql ="UPDATE doctor SET doctorname='$_POST[doctorname]',mobileno='$_POST[mobilenumber]',departmentid='$_POST[department]',loginid='$_POST[loginid]',status='$_POST[status]',education='$_POST[education]',experience='$_POST[experience]',consultancy_charge='$_POST[consultancy_charge]' WHERE doctorid='$_GET[editid]'";
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
   <!--  <a href="index.php"><button class="button button--success" data-for="js_success-popup"></button></a> -->
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
$sql ="INSERT INTO doctor(doctorname,mobileno,departmentid,loginid,password,status,education,experience,consultancy_charge) values('$_POST[doctorname]','$_POST[mobilenumber]','$_POST[department]','$_POST[loginid]','$pass','$_POST[status]','$_POST[education]','$_POST[experience]','$_POST[consultancy_charge]')";
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
   <!--  <a href="index.php"><button class="button button--success" data-for="js_success-popup"></button></a> -->
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
}
if(isset($_GET['editid']))
{
$sql="SELECT * FROM doctor WHERE doctorid='$_GET[editid]' ";
$qsql = mysqli_query($conn,$sql);
$rsedit = mysqli_fetch_array($qsql);

}

?>

<div class="card-block">
    <h2>Télécharger votre photo de profil :</h2>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="image" id="image">
        <input type="submit" value="Donner Votre image">
    </form>
</div>

<?php
 //Vérifiez si un fichier image a été soumis via un formulaire
if ($_FILES['image']['error'] == 0) {
    // Chemin temporaire du fichier
    $tmp_name = $_FILES['image']['tmp_name'];

    // Lire le contenu de l'image en tant que données binaires
    $image_data = addslashes(file_get_contents($tmp_name));

    // Préparez la requête SQL d'insertion
    $sql = "INSERT INTO images VALUES ('$image_data')";

    if ($conn->query($sql) === TRUE) {
?>
    <div class="popup popup--icon -success js_success-popup popup--visible">
              <div class="popup__background"></div>
              <div class="popup__content">
                <h3 class="popup__content__title">
                  Success 
                </h3>
                <p>L'image a été envoyée avec succès dans la base de données.</p>
                <p>
                 <!--  <a href="index.php"><button class="button button--success" data-for="js_success-popup"></button></a> -->
                 <?php echo "<script>setTimeout(\"location.href = 'UploadImageDoctor.php';\",1500);</script>"; ?>
                </p>
              </div>
            </div>
<?php
    } 
    else { 
        echo "Une erreur est survenue lors de l'envoi de l'image : " . $conn->error;
    }
}
?>
<?php include('footer.php');?>