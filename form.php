

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Random questions</title>
  </head>
  <h1>Display my questions</h1>
  <body>
<?php
  include('connect.php');
  // bfi2 questions
  //get q_1
  $sqlget = "SELECT * FROM random_table WHERE question_number <= 60 ORDER BY RAND() LIMIT 1";
  $sqldata = mysqli_query($dbcon, $sqlget) or die('error getting data1');
  $row = mysqli_fetch_array($sqldata, MYSQLI_ASSOC);
  $q1_id = $row['question_id'];

  //get q_2
  $sqlget2 = "SELECT * FROM random_table WHERE question_number <= 60 AND question_id NOT IN
  ('$q1_id') ORDER BY RAND() LIMIT 1";
  $sqldata2 = mysqli_query($dbcon, $sqlget2) or die('error getting data2');
  $row2 = mysqli_fetch_array($sqldata2, MYSQLI_ASSOC);
  $q2_id= $row2['question_id'];


  //get q_3
  $sqlget3 = "SELECT * FROM random_table WHERE question_number <= 60 AND question_id NOT IN
  ('$q1_id','$q2_id') ORDER BY RAND() LIMIT 1";
  $sqldata3 = mysqli_query($dbcon, $sqlget3) or die('error getting data3');
  $row3 = mysqli_fetch_array($sqldata3, MYSQLI_ASSOC);
  $q3_id= $row3['question_id'];

  //get q_4
  $sqlget4 = "SELECT * FROM random_table WHERE question_number <= 60 AND  question_id NOT IN
  ('$q1_id','$q2_id','$q3_id') ORDER BY RAND() LIMIT 1";
  $sqldata4 = mysqli_query($dbcon, $sqlget4) or die('error getting data4');
  $row4 = mysqli_fetch_array($sqldata4, MYSQLI_ASSOC);
  $q4_id= $row4['question_id'];

  //get q_5
  $sqlget5 = "SELECT * FROM random_table WHERE question_number <= 60 AND question_id NOT IN
  ('$q1_id','$q2_id','$q3_id','$q5_id') ORDER BY RAND() LIMIT 1";
  $sqldata5 = mysqli_query($dbcon, $sqlget5) or die('error getting data5');
  $row5 = mysqli_fetch_array($sqldata5, MYSQLI_ASSOC);
  $q5_id= $row5['question_id'];

  //pid5bf questions
  //get q_6
  $sqlget6 = "SELECT * FROM random_table WHERE question_number > 60 AND question_number <= 85 ORDER BY RAND() LIMIT 1";
  $sqldata6 = mysqli_query($dbcon, $sqlget6) or die('error getting data6');
  $row6 = mysqli_fetch_array($sqldata6, MYSQLI_ASSOC);
  $q6_id = $row6['question_id'];
  $q6_id = mysql_real_escape_string($q6_id);

  //get q_7
  $sqlget7 = "SELECT * FROM random_table WHERE question_number > 60 AND question_number <= 85 and
  question_id NOT IN ('$q6_id') ORDER BY RAND() LIMIT 1";
  $sqldata7 = mysqli_query($dbcon, $sqlget6) or die('error getting data6');
  $row7 = mysqli_fetch_array($sqldata7, MYSQLI_ASSOC);
  $q7_id = $row7['question_id'];
  $q7_id = mysql_real_escape_string($q7_id);


  //get q_8
  $sqlget8 = "SELECT * FROM random_table WHERE question_number > 60 AND question_number <= 85 and
  question_id NOT IN ('$q6_id','$q7_id') ORDER BY RAND() LIMIT 1";
  $sqldata8 = mysqli_query($dbcon, $sqlget8) or die('error getting data8');
  $row8 = mysqli_fetch_array($sqldata8, MYSQLI_ASSOC);
  $q8_id = $row8['question_id'];

  //get q_9
  $sqlget9 = "SELECT * FROM random_table WHERE question_number > 60 AND question_number <= 85 and
  question_id NOT IN ('$q6_id','$q7_id','$q8_id') ORDER BY RAND() LIMIT 1";
  $sqldata9 = mysqli_query($dbcon, $sqlget9) or die('error getting data9');
  $row9 = mysqli_fetch_array($sqldata9, MYSQLI_ASSOC);
  $q9_id = $row9['question_id'];

  //get q_10
  $sqlget10 = "SELECT * FROM random_table WHERE question_number > 60 AND question_number <= 85 and
  question_id NOT IN ('$q6_id','$q7_id','$q8_id','$q9_id') ORDER BY RAND() LIMIT 1";
  $sqldata10 = mysqli_query($dbcon, $sqlget10) or die('error getting data10');
  $row10 = mysqli_fetch_array($sqldata10, MYSQLI_ASSOC);
  $q10_id = $row10['question_id'];


?>
  <form action='insert.php' method='post'>
   <hr>
   <tr><td><br>

     <!-- store id and prevent current id from being overwritten -->
     <input type="hidden" name="id1" value="<?php echo htmlspecialchars($q1_id);?>"  />
      </td><td>
     <?php echo $row['question']?>
      </td><td><br>
        Strongly Disagree<input name='q_1' type='range' value='3' min='1' max='5'> Strongly Agree
        <br><br>

         <!-- store id and prevent current id from being overwritten -->
       <input type="hidden" name="id2" value="<?php echo htmlspecialchars($q2_id);?>" />
       </td><td>
    <?php echo $row2['question']?>
        </td><td><br>
        Strongly Disagree<input name='q_2' type='range' value='3' min='1' max='5'> Strongly Agree
        <br><br>

         <!-- store id and prevent current id from being overwritten -->
        <input type="hidden" name="id3" value="<?php echo htmlspecialchars($q3_id);?>"  />
        </td><td>
    <?php echo $row3['question']?>
        </td><td><br>
        Strongly Disagree<input name='q_3' type='range' value='3' min='1' max='5'> Strongly Agree
        <br><br>

        <input type="hidden" name="id4" value="<?php echo htmlspecialchars($q4_id);?>"  />
        </td><td>
    <?php echo $row4['question']?>
        </td><td><br>
        Strongly Disagree<input name='q_4' type='range' value='3' min='1' max='5'> Strongly Agree
        <br><br>

        <input type="hidden" name="id5" value="<?php echo htmlspecialchars($q5_id);?>"  />
        </td><td>
    <?php echo $row5['question']?>
        </td><td><br>
        Strongly Disagree<input name='q_5' type='range' value='3' min='1' max='5'> Strongly Agree
        <br><br>


        <input type="hidden" name="id6" value="<?php echo htmlspecialchars($q6_id);?>"  />
        </td><td>
    <?php echo $row6['question']?>
        </td><td><br>
        Very false or often false<input name='q_6' type='range' value='2' min='1'  max='4'> Very true or often true
        <br><br>

        <input type="hidden" name="id7" value="<?php echo htmlspecialchars($q7_id);?>"  />
        </td><td>
    <?php echo $row7['question']?>
        </td><td><br>
        Very false or often false<input name='q_7' type='range' value='2' min='1'  max='4'> Very true or often true
        <br><br>

        <input type="hidden" name="id8" value="<?php echo htmlspecialchars($q8_id);?>"  />
        </td><td>
    <?php echo $row8['question']?>
        </td><td><br>
        Very false or often false<input name='q_8' type='range' value='2' min='1'  max='4'> Very true or often true
        <br><br>

        <input type="hidden" name="id9" value="<?php echo htmlspecialchars($q9_id);?>"  />
        </td><td>
    <?php echo $row9['question']?>
        </td><td><br>
        Very false or often false<input name='q_9' type='range' value='2' min='1'  max='4'> Very true or often true
        <br><br>

        <input type="hidden" name="id10" value="<?php echo htmlspecialchars($q10_id);?>"  />
        </td><td>
    <?php echo $row10['question']?>
        </td><td><br>
        Very false or often false<input name='q_10' type='range' value='2' min='1'  max='4'> Very true or often true
        <br><br>



        <input type="hidden" name="nextPage" value="thankyou.html" />
        <input name='submit' type='submit' value='submit'>
      </form>
  </body>
</html>
