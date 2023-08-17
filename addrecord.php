 <?php
    // making connection 
    define("DB_HOST", 'localhost');
    define("DB_USER", 'root');
    define("DB_PASSWORD", '');
    define("DB_Name", 'list');

    $conn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_Name);

    if(!$conn){
        echo "Connection Unsuccessful" . mysqli_error();
        die();
    }

    $reco = $_POST['taskss'];

    $sql="INSERT into record(tasks) 
          VALUES('$reco')";

    mysqli_query($conn, $sql);

    header("Location:index.php");

 ?>
 
