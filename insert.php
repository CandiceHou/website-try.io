<?php
    include('form.php');
    if (isset($_POST['submit'])) {
        $q1 = $_POST['id1'];
        $q2 = $_POST['id2'];
        $q3 = $_POST['id3'];
        $q4 = $_POST['id4'];
        $q5 = $_POST['id5'];
        $q6 = $_POST['id6'];
        $q7 = $_POST['id7'];
        $q8 = $_POST['id8'];
        $q9 = $_POST['id9'];
        $q10 = $_POST['id10'];

        $a_1 = mysqli_real_escape_string($dbcon, $_POST['q_1']);
        $a_2 = mysqli_real_escape_string($dbcon, $_POST['q_2']);
        $a_3 = mysqli_real_escape_string($dbcon, $_POST['q_3']);
        $a_4 = mysqli_real_escape_string($dbcon, $_POST['q_4']);
        $a_5 = mysqli_real_escape_string($dbcon, $_POST['q_5']);
        $a_6 = mysqli_real_escape_string($dbcon, $_POST['q_6']);
        $a_7 = mysqli_real_escape_string($dbcon, $_POST['q_7']);
        $a_8 = mysqli_real_escape_string($dbcon, $_POST['q_8']);
        $a_9 = mysqli_real_escape_string($dbcon, $_POST['q_9']);
        $a_10 = mysqli_real_escape_string($dbcon, $_POST['q_10']);


        //insert into answer table
        $sql_bfi2 = "INSERT INTO `answer_bfi2`($q1,$q2,$q3,$q4,$q5) VALUES ($a_1,$a_2,$a_3,$a_4,$a_5)";
        $sql_pid5bf = "INSERT INTO `answer_pid5bf` ($q6,$q7,$q8,$q9,$q10) VALUES ($a_6, $a_7,$a_8,$a_9,$a_10)";


        //mark in filter_table.
        // 0 by default, mark inserting question-id column with 1.
         $sql_filter = "INSERT INTO `filter_table`($q1,$q2,$q3,$q4,$q5,$q6,$q7,$q8,$q9,$q10) VALUES (1, 1, 1, 1, 1,1,1,1,1,1)";


        if (!mysqli_query($dbcon, $sql_pid5bf)){
            echo "Error: " . $sql_pid5bf . "<br>" . mysqli_error($dbcon, $sql_pid5bf);
        } else {
            echo "Thank you for participation!";
        }
        if (!mysqli_query($dbcon, $sql_bfi2)){
            echo "Error: " . $sql_bfi2 . "<br>" . mysqli_error($dbcon, $sql_bfi2);
        } else {
            // echo "qustion id: " . $q1 . ", ". $q2. ", " . $q3 . "<br>";
            echo " ";
        }

        if (!mysqli_query($dbcon, $sql_filter)){
            echo "Error: " . $sql_filter . "<br>" . mysqli_error($dbcon, $sql_filt);
        }
    }
?>
