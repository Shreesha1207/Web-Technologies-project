<?php
// database connection code
if(isset($_POST['name']))
{
    // $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
    $con = mysqli_connect('localhost', 'root', '', 'webtec');

    // get the post records
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $marksDisplay = $_POST['marksDisplay'];
	$CorrectScore = $_POST['CorrectScore'];
    $IncorrectScore = $_POST['IncorrectScore'];

    // database insert SQL code
    $sql = "INSERT INTO webtec.general(Name, Gender, Email, Score, Correct, Incorrect) VALUES ('$name', '$gender', '$email', '$marksDisplay', '$CorrectScore', '$IncorrectScore')";

    // insert in database
    $rs = mysqli_query($con, $sql);
    if($rs)
    {
        $message = 1;
?>

        <html>
        <head>
            <title>Form Data</title>
            <style>
                body{
                    align-items: center;
                    align-items: center;
                    text-align: center;
                    background-color: beige;
                }
            </style>
        </head>
        <body>
            <h1> Record Stored Successfully </h1>
        </body>
        </html>

<?php
    }
} else {
    echo "Are you a genuine visitor?";
}
?>