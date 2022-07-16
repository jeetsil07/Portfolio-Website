<?php
    session_start();
    include "db_con.php";
    // $_SESSION['admin'] = "jeet";
    if(isset($_SESSION['admin'])){
        header('location: addpost.php');
    }
    if(isset($_POST['submit'])){
        $email = $_POST['emailid'];
        $pass = $_POST['password'];

        $sql = "SELECT * FROM admin_details where email_id = '$email'";
        $runsql = mysqli_query($conn,$sql);
        if($runsql){
            $data = mysqli_fetch_assoc($runsql);
            if(password_verify($pass,$data['password'])){
                $_SESSION['admin'] = ['name' => "jeet"];
                header('location: addpost.php');
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <!-- -------------------------login modal -------------- -->
    <div id="loginform" class="modal fade" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-center">Admin Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST">
                        <div class="form-group">
                            <label for="emailid">Email address</label>
                            <input type="email" class="form-control" id="emailid" name="emailid" aria-describedby="emailHelp">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                        <div class="row">
                            <div class="col">
                                <button type="submit" id="submit" name="submit" class="btn btn-primary">Submit</button>
                                <button id="close" data-dismiss="modal" aria-label="Close" class="btn btn-secondary">close</button>
                            </div>
                            <!-- <div class="col">
                                <small id="forgetpass">Forget Password ?</small>
                            </div> -->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- --------------------------------------forget password-------------------------------------------- -->
    <!-- <div class="modal fade" tabindex="-1" id="otpform">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-danger">OTP Send</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST">
                        <div class="form-group">
                            <label for="emailid">Email address</label>
                            <input type="email" class="form-control" id="emailid" name="emailid" aria-describedby="emailHelp">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <button type="submit" id="sendotp" name="sendotp" class="btn btn-danger">SEND OTP</button>                        
                    </form>
                </div>
            </div>
        </div>
    </div> -->


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#loginform').modal('show');
            // $('#forgetpass').on('click',function(){
            //     $('#loginform').modal('hide');
            //     $('#otpform').modal('show');
            // });
        });
    </script>
</body>
</html>