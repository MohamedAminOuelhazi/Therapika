<?php 
 include('connect.php');
$req=$pdo->prepare("select * from doctor ");
$req->setFetchMode(PDO::FETCH_ASSOC);
$tab=$req->fetchAll();
echo $tab[0]["bin"];
?>
88888888888888888888888888888
// Récupérer les données de l'image
        $image  = $_FILES["image"]["tmp_name"];
        $imageName = $_FILES["image"]["name"];
        $imageData = file_get_contents($image);
        $passw = hash('sha256', $_POST['password']);
        function createSalt()
        {
            return '2123293dsj2hu2nikhiljdsd';
        }

        $salt = createSalt();
        $pass = hash('sha256', $salt . $passw);
        $sql ="INSERT INTO doctor(doctorname,mobileno,departmentid,loginid,password,status,education,experience,image,consultancy_charge) values(?,?,?,?,?,?,?,?,?,?)";
        $req = $conn->prepare($sql);

            $req->bind_param("ssissssdsd", $_POST['doctorname'], $_POST['mobilenumber'], $_POST['department'], $_POST['loginid'], $pass, $_POST['status'], $_POST['education'], $_POST['experience'], $imageData , $_POST['consultancy_charge']);


        if($req->execute())