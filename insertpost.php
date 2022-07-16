<?php
    session_start();
    include "db_con.php";
    $action="";
    $msg="";
    // ------------------------project-------------------------------
    if(isset($_POST['projectsubmit'])){
        $project_title = mysqli_real_escape_string($conn,$_POST['ptitle']);
        $project_details = mysqli_real_escape_string($conn,$_POST['pdetails']);
        $git_link = mysqli_real_escape_string($conn,$_POST['gitlink']);
        $web_link = mysqli_real_escape_string($conn,$_POST['weblink']);
        
        $file_name = $_FILES["pimg"]["name"];
        $tmp_name = $_FILES["pimg"]["tmp_name"];
        $exe = pathinfo($_FILES["pimg"]["name"],PATHINFO_EXTENSION);
        echo $exe;
        print_r($_FILES);
        if($exe == 'jpg'|| $exe == 'jpeg'|| $exe == 'png'){
            $file_name = uniqid().'_'.date("Y-m-d").'.'.$exe;
            $path = "assets/project_img/".$file_name;
            move_uploaded_file($tmp_name,$path);
            $sql = "INSERT INTO projects SET
                project_title='$project_title',
                project_details='$project_details',
                project_img_path='$path',
                git_link = '$git_link',
                web_link = '$web_link',
                created_by='Jeet Sil'
            ";    
            $runsql = mysqli_query($conn,$sql);
            if($runsql){
                $action ="success";
                $msg="Post successfully Inserted";
            }else{
                $action ="danger";
                $msg="Something went wrong";
            }
            
        }else{
            $action ="danger";
            $msg="Image must be 'jpg/png/jpeg'";
        }
    }
    // -------------------------------blog----------------------------------
    if(isset($_POST['blogsubmit'])){
        $blog_title = mysqli_real_escape_string($conn,$_POST['btitle']);
        $blog_details = mysqli_real_escape_string($conn,$_POST['bdetails']);
        
        $file_name = $_FILES["bimg"]["name"];
        $tmp_name = $_FILES["bimg"]["tmp_name"];
        $exe = pathinfo($_FILES["bimg"]["name"],PATHINFO_EXTENSION);
        echo $exe;
        print_r($_FILES);
        if($exe == 'jpg'|| $exe == 'jpeg'|| $exe == 'png'){
            $file_name = uniqid().'_'.date("Y-m-d").'.'.$exe;
            $path = "assets/blog_img/".$file_name;
            move_uploaded_file($tmp_name,$path);
            $sql = "INSERT INTO blogs SET
                blog_title='$blog_title',
                blog_details='$blog_details',
                blog_img_path='$path',
                created_by='Jeet Sil'
            ";    
            $runsql = mysqli_query($conn,$sql);
            if($runsql){
                $action ="success";
                $msg="Post successfully Inserted";
            }else{
                $action ="danger";
                $msg="Something went wrong";
            }
            
        }else{
            $action ="danger";
            $msg="Image must be 'jpg/png/jpeg'";
        }
    }
    // ----------------------------------------------------
    $_SESSION['alert']=['action'=>$action,'message'=>$msg];
    header('location:addpost.php');
?>
