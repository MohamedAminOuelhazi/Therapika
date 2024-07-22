<?php
include('connect.php');
        if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['department'])) {
            $selectedDepartment = $_GET['department'];

            $sqldoctor = "SELECT doctor.doctorid, doctor.doctorname, department.departmentname FROM doctor INNER JOIN department ON doctor.departmentid = department.departmentid WHERE doctor.departmentid = $selectedDepartment AND doctor.status = 'Active'";
            $qsqldoctor = mysqli_query($conn, $sqldoctor);

            if ($qsqldoctor->num_rows > 0) {
                echo "<select name='doctor' class='form-control'>";
                while ($rsdoctor = mysqli_fetch_array($qsqldoctor)) {
                    echo "<option value='$rsdoctor[doctorid]' selected>$rsdoctor[doctorname] ( $rsdoctor[departmentname] ) </option>";
                }
                echo "</select>";
            } else {
                echo "<select name='doctor' class='form-control'>";
                echo "<option value='' selected>Aucun médecin trouvé dans ce département.</option>";
                echo "</select>";
            }
        }
        ?>

