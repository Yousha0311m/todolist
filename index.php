<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="wenk.min.css">
    <link rel="stylesheet" href="style.css">
    <title>TodoList</title>
</head>
<body>
    <div class="wrapper">
        <div class="back"></div>
        <div class="box">
            <div class="heading">Name</div>
            <?php
                   define("DB_HOST", 'localhost');
                   define("DB_USER", 'root');
                   define("DB_PASSWORD", '');
                   define("DB_Name", 'list');

                   $conn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_Name);

                   if(!$conn){
                       echo "Connection Unsuccessful" . mysqli_error();
                       die();
                   }
                   $works = " SELECT * from record";
                   $tamks = mysqli_query($conn, $works);
                   $workResult = mysqli_num_rows($tamks);
            ?>
            <div class="recordWrap">
                <?php
                    if($workResult){
                ?>
                <ol class="olist">
                <?php
                    while($row = mysqli_fetch_assoc($tamks)){
                ?>
                    <li class="record"><?php echo $row['tasks']; ?></li>
                <?php
                     }
                ?>
                </ol>
                <?php
                    }
                    else{
                        echo "No Tasks";
                    }
                ?>
            </div>
            <div class="add">
                <form action="addrecord.php" method="post" >
                    <div class="input">
                        <label for="taskss"></label>
                        <input name="taskss" id="task"  class="in" type="text">
                    </div>
                    <div class="">
                       <button type="submit" class="btn" data-wenk="Add Task" data-wenk-pos="top">Add +</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>