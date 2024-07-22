
------------------------------------- 
$sqldoctor= "SELECT * FROM doctor INNER JOIN department ON department.departmentid=doctor.departmentid WHERE doctor.status='Active' AND  department.departmentid=doctor.departmentid ";
                $qsqldoctor = mysqli_query($conn,$sqldoctor);
                while($rsdoctor = mysqli_fetch_array($qsqldoctor))
                {
                    if(isset($_GET['patid'])){
                        if( isset($rsedit['doctorid']) && $rsdoctor['doctorid'] == $rsedit['doctorid'])
                        {
                            echo "<option value='$rsdoctor[doctorid]' selected>$rsdoctor[doctorname] ( $rsdoctor[departmentname] ) </option>";
                        }
                        else
                        {
                            echo "<option value='$rsdoctor[doctorid]'>$rsdoctor[doctorname] ( $rsdoctor[departmentname] )</option>";                
                        }
                    }else{
                        echo "<option >$rsdoctor[doctorname] ( $rsdoctor[departmentname] )</option>";  
                    } 
                }

_______________________________________

<script>
        const departmentSelect = document.getElementById('department');
        const doctor = document.getElementById('doctors').querySelector('select');

        departmentSelect.addEventListener('change', function() {
            const selectedDepartment = this.value;

            // Envoyer la valeur du département à un script PHP pour récupérer les médecins
            const xhr = new XMLHttpRequest();
            xhr.open('GET', `?department=${selectedDepartment}`, true);

            xhr.onload = function() {
                if (xhr.status === 200) {
                    doctor.innerHTML = xhr.responseText;
                }
            };

            xhr.send();
        });
    </script>

    ______________________________________________________

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['department'])) {
        $selectedDepartment = $_GET['department'];

        $sqldoctor = "SELECT * FROM doctor WHERE departmentid = $selectedDepartment AND status = 'Active'";
        $qsqldoctor = mysqli_query($conn, $sqldoctor);

        if ($qsqldoctor->num_rows > 0) {
            while ($rsdoctor = mysqli_fetch_array($qsqldoctor)) {
                echo "<option value='$rsdoctor[doctorid]' selected>$rsdoctor[doctorname] ( $rsdoctor[departmentname] ) </option>";
            }
        } else {
            echo "<option >Aucun médecin trouvé dans ce département.</option>";
        }
    }
    ?>



______________________________________________________________

<?php
                if (isset($_POST['department'])) {
                    $selectedDepartment = $_POST['department'];
                
                    // Requête SQL pour récupérer les médecins du département choisi
                    $sqldoctor = "SELECT * FROM doctor WHERE departmentid = $selectedDepartment AND status = 'Active'";
                    $qsqldoctor = mysqli_query($conn,$sqldoctor);
                    
                    if ($result->num_rows > 0) {
                        // Afficher la liste des médecins
                        while($rsdoctor = mysqli_fetch_array($qsqldoctor)){
                            echo "Nom du médecin : " . $row['name'] . "<br>";
                            // Affichez d'autres informations du médecin ici
                        }
                    } else {
                        echo "Aucun médecin trouvé dans ce département.";
                    }
                } else {
                    echo "Veuillez choisir un département.";
                }
            ?>



    ______________________________________________________

    if( isset($rsedit['doctorid']) && $rsdoctor['doctorid'] == $rsedit['doctorid'])
                        {
                            echo "<option value='$rsdoctor[doctorid]' selected>$rsdoctor[doctorname] ( $rsdoctor[departmentname] ) </option>";
                        }
                        else
                        {
                            echo "<option >Aucun médecin trouvé dans ce département.</option>";                
                        }
                    }else{
                        echo "<option >Veuillez choisir un département.</option>";  
                    } 