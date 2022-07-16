<?php
    session_start();
    if(!isset($_SESSION['admin'])){
        header('location: index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Post</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="./css/style.css">
    
</head>
<body>
    <?php
        if(isset($_SESSION['alert'])){
            echo'
                <div class="alert alert-'.$_SESSION['alert']['action'].' alert-dismissible fade show" role="alert">
                    '.$_SESSION['alert']['message'].'
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            ';
        }
        unset($_SESSION['alert']);

    ?>
    <div class="container my-5 bg-white py-5">
        <h2 class="text-center text-info pb-5">Add Your Post</h2>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-3 py-2 text-center">
                    <button class="btn btn-success btn-block" id="projectbtn">Project</button>
                </div>
                <div class="col-md-3 py-2 text-center">
                    <button class="btn btn-danger btn-block" id="blogbtn">Blog</button>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6 p-4">
                <form id="projectform" action="insertpost.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="title">Project Title</label>
                        <input type="text" class="form-control" id="title" name="ptitle" placeholder="Enter the project title">
                    </div>
                    <div class="form-group">
                        <label for="details">Enter project details</label>
                        <textarea class="form-control" id="details" name="pdetails" rows="3" placeholder="Enter something"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="pic">Example file input</label>
                        <input type="file" class="form-control-file" id="pic" name="pimg" accept="image/*">
                    </div>    
                    <div class="form-group">
                        <label for="gitlink">github Link</label>
                        <input type="text" class="form-control" id="gitlink" name="gitlink" placeholder="Enter the github link">
                    </div>
                    <div class="form-group">
                        <label for="weblink">Website Link</label>
                        <input type="text" class="form-control" id="weblink" name="weblink" placeholder="Enter the website link">
                    </div>
                    <button type="submit" id="projectsubmit" name="projectsubmit" class="btn btn-success">Submit Project</button>
                                                                                                                  
                </form>
                <form id="blogform" action="insertpost.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="title">Blog Title</label>
                        <input type="text" class="form-control" id="title" name="btitle" placeholder="Enter the Blog title">
                    </div>
                    <div class="form-group">
                        <label for="details">Enter Blog details</label>
                        <textarea class="form-control" id="details" name="bdetails" rows="3" placeholder="Enter something"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="pic">Example file input</label>
                        <input type="file" class="form-control-file" id="pic" name="bimg" accept="image/*">
                    </div>    
                    <button type="submit" id="blogsubmit" name="blogsubmit" class="btn btn-danger">Submit Blog</button>
                                                                                           
                </form>
            </div>
        </div>
    </div>
    <div id="menus">
        <ul class="list-unstyled d-lg-block d-flex">
            <li><a class="text-dark" href="index.php#home"><i class="fa fa-home" aria-hidden="true"></i></a></li>
            <li><a class="text-dark" href="index.php#about"><i class="fa fa-user" aria-hidden="true"></i></a></li>
            <li><a class="text-dark" href="index.php#edu"><i class="fa fa-graduation-cap" aria-hidden="true"></i></a></li>
            <li><a class="text-dark" href="index.php#skills"><i class="fa fa-briefcase" aria-hidden="true"></i></a></li>
            <li><a class="text-dark" href="index.php#projects"><i class="fa fa-building" aria-hidden="true"></i></a></li>
            <li><a class="text-dark" href="index.php#blogs"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
            <li><a class="text-dark" href="index.php#footer"><i class="fa fa-address-card-o" aria-hidden="true"></i></a></li>
            <li><a class="text-dark" href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i></a></li>
        </ul>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"></script>
    <script src="./js/custom.js"></script>


</body>
</html>