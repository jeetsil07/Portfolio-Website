<?php
    include "db_con.php";
    $blog_id = $_GET['id'];
    $sql = "SELECT * FROM blogs WHERE id = $blog_id";
    $runsql = mysqli_query($conn,$sql);
    if($runsql){
        if(mysqli_num_rows($runsql)==1){
            $data = mysqli_fetch_assoc($runsql);
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogs</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <!-- <link rel="stylesheet" href="css/progresscircle.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/> -->
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="container my-5">
        <?php         
        echo'<div class="row justify-content-center">
                <div class="col-8">
                    <img class="img-fluid" src="'.$data['blog_img_path'].'" alt="">
                </div>
            </div>
            <div class="row">
                <div class=".col">
                    <h1 class="py-5 text-center text-white">'.$data['blog_title'].'</h1>
                    <p class="text-white px-5"><i class="fa fa-user pr-2" aria-hidden="true"></i>'.$data['created_by'].'</p>
                    <p class="text-white px-5"><i class="fa fa-calendar-check-o pr-2" aria-hidden="true"></i>'.$data['created_at'].'</p>
                    <p class="text-white text-justify px-5">'.$data['blog_details'].'</p>
                </div>
            </div>';
        ?>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"></script>
    <!-- <script src="./js/progresscircle.js"></script>
    <script src="./js/typed.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="./js/custom.js"></script> -->
</body>
</html>