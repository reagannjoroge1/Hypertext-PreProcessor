<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color:grey;
        }
        .form{
            display: grid;
            align-content: center;
            text-align: left;
            justify-content: center;
            align-items: center;
        }
        label{
            font-family:Arial, Helvetica, sans-serif;
            font-size: large;
            text-decoration: none;
            border-color: aqua;
            color: blue;
        }
    </style>
</head>
<body>
    <div class="form">
    <form action="simple_grading_calculator.php" method = get>
        <label>Name_of_Student</label><br>
                 <input type="text" name="Name"><br><br>
        <label>Registration_Number</label><br>
                 <input type="text" name="Registration_Number"><br><br>
        <label>Unit_Name</label><br>
                 <input type="text" name="Unit_Name"><br><br>
        <label>Score</label><br>
                 <input type="text" name="Score"><br><br>

         <input type="submit" value="Award">
    </form>
    </div>
</body>
</html> -->
<?php
    //USING GET TO COLLECT DATA FROM A HTML FORM
    //has char limit
    //better for search
    //data is rendered into the url
    //not suitable for credentials
//    $name = $_GET["Name_of_Student"];
//  $reg_no = $_GET["Registration_NUmber"];
//    $unit = $_GET["Unit_Name"];
//    $score = $_GET["Score"];
//     $grade = null;

    // if ($score > 100 && $score < 0) {
    //    echo "Invalid Input, Try Again!";
    // }
    // elseif($score >= 70){
        // $grade = 'A: DISTICTION';
    // }
    //  elseif($score >= 60){
        // $grade = 'B: GOOD PERFOMANCE';
    // }
    //  elseif($score >= 50){
        // $grade = 'C: AVERAGE';
    // }
    //  elseif($score >= 40){
        // $grade = 'D: PASS';
    // }
    //  else{
        // $grade = 'F: SUPPLEMENTARY';
    // }

    // /echo"<br> <br> Recommendation: {$grade}";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color:grey;
        }
        .form{
            display: grid;
            align-content: center;
            text-align: left;
            justify-content: center;
            align-items: center;
        }
        label{
            font-family:Arial, Helvetica, sans-serif;
            font-size: large;
            text-decoration: none;
            border-color: aqua;
            color: blue;
        }
    </style>
</head>
<body>
    <div class="form">
    <form action="simple_grading_calculator.php" method = post>
        <label>Name_of_Student</label><br>
                 <input type="text" name="Name"><br><br>
        <label>Registration_Number</label><br>
                 <input type="text" name="Registration_Number"><br><br>
        <label>Unit_Name</label><br>
                 <input type="text" name="Unit_Name"><br><br>
        <label>Score</label><br>
                 <input type="text" name="Score"><br><br>

         <input type="submit" value="Award">
    </form>
    </div>
</body>
</html>
<?php
////USING POST TO COLLECT DATA FROM A HTML FORM
//no data limit
//suitable for credentials
//data is rendered to the php script
    $name = $_POST["Name_of_Student"];
    $reg_no = $_POST["Registration_NUmber"];
    $unit = $_POST["Unit_Name"];
    $score = $_POST["Score"];
     $grade = null;

    if ($score > 100 && $score < 0) {
       echo "Invalid Input, Try Again!";
    }
    elseif($score >= 70){
        $grade = 'A: DISTICTION';
    }
     elseif($score >= 60){
        $grade = 'B: GOOD PERFOMANCE';
    }
     elseif($score >= 50){
        $grade = 'C: AVERAGE';
    }
     elseif($score >= 40){
        $grade = 'D: PASS';
    }
     else{
        $grade = 'F: SUPPLEMENTARY';
    }

    echo"<br> <br> Recommendation: {$grade}";




?>