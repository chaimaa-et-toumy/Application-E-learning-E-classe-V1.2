<?php

include 'connection.php';

if (!$_GET['Enroll_Number'])
{

    ?>
        <p>Not Found<p>
    <?php

}

else
{

    $Enroll_Number=$_GET['Enroll_Number'];

    $q = "delete from student_list where Enroll_Number=?";

    $stmt = $conn->prepare($q);

    $stmt->execute([$Enroll_Number]);

    header ('Location: ../student.php');


    // TO MAKE SURE THIS IS THE RIGHT STUDENT (verification)
    // $q = "select * from student_list where Enroll_Number=?";

    // $stmt = $conn->prepare($q);

    // $stmt->execute([$Enroll_Number]);

    // var_dump($stmt);                                             // Objet PDO, pas une resultat!

    // $stmt->fetchAll()                                            // renvoie plusieurs lignes

    // $ligne = $stmt->fetch();                                        // renvoie un seul ligne

    ?>
        <!-- <table border="1">
            <tbody>
                <tr>
                    <td>Enroll Number</td>
                    <?php 
                    // echo "<td>" . $ligne['Enroll_Number'] . "</td>"; 
                    ?>
                </tr>
                    <td>Name</td>
                    <?php
                    // echo "<td>" . $ligne['Name'] . "</td>";
                    ?>
                </tr>
                    <td>Email</td>
                    <?php
                    // echo "<td>" . $ligne['Email'] . "</td>";
                    ?>
                </tr>
                    <td>Phone</td>
                    <?php
                    //  echo "<td>" . $ligne['Phone'] . "</td>";
                    ?>
                </tr>
                    <td>Date of Admission</td>
                    <?php 
                    //  echo "<td>" . $ligne['Date_of_admission'] . "</td>";
                    ?>
                </tr>
            </thead>
        </table> -->
    <?php



}