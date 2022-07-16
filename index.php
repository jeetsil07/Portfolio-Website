<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="css/progresscircle.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/>
    <link rel="stylesheet" href="./css/style.css">
    
</head>
<body>
    <div id="strap" class="b-shadow"></div>
    <section id="header">
        <nav>
            <ul>
                <li><a href="#home">HOME</a></li>
                <li><a href="#about">ABOUT</a></li>
                <li><a href="#edu">EDUCATION</a></li>
                <li><a href="#skills">SKILL</a></li>
                <li><a href="#projects">PROJECTS</a></li>
                <li><a href="#blogs">BLOGS</a></li>
                <li><a href="#footer">CONTACT</a></li>
            </ul>
        </nav>
    </section>
    <section id="home"class="pb-5">
        <div class="container">
            <div class="row flex-md-row flex-column-reverse justify-content-between align-items-center">
                <div class="col-md-6 text-md-left text-center">
                    <h1 class="text-white" data-aos="zoom-in">Hello, I am Jeet Sil</h1>
                    <h2 class="py-3 text-white" data-aos="zoom-in">and I'm a <span id="typing" class=" text-info"></span></h2>
                    <a class="btn btn-outline-info mt-3" href="resume/Jeet_Sil_resume.pdf" download>Download CV</a>
                </div>
                <div class="col-md-4 d-flex justify-content-md-end justify-content-center" data-aos="zoom-in">
                    <img class="img-fluid" src="./image/jeetimg.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <section id="about">
        <div class="contentdark py-5 b-shadow" data-aos="flip-up"  data-aos-delay="50">
            <div class="container">
                <h3 class="text-center text-white mb-5">ABOUT ME</h3>
                <div class="row justify-content-between align-items-center">
                    <div class="col-md-4 d-flex justify-content-md-end justify-content-center">
                        <img class="img-fluid" src="./image/jeetimg.png" alt="">
                    </div>
                    <div class="col-md-6">
                        <p class="text-justify text-white">Hello, everyone this is <b>Jeet Sil.</b> Currently I am a student of <b>Bachelor Of Computer Application(BCA)</b> for <b>Narula Institute Of Technology.</b> I am very much passionate about <b>web development</b>, basically I want to be a <b>Full-Stack web-developer.</b>One thing that I confident about myself that is I can easily learn and catch new techologies and I am very much enthusiastic to implement whatever I learn today. <b>In this portfolio website, I mention my every<b> technological skills</b>, <b>projects</b> and <b>blogs</b> whatever I have write till today. So, thank you my dear visiter to come and watch my portfolio website.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="edu" class="py-5">
        <div class="container">
            <h3 class="text-center mb-5 text-white" data-aos="fade-in">MY EDUCATION</h3>
            <div class="row justify-content-around align-items-center">
                <div class="col-md-5 m-4 degree b-shadow" data-aos="zoom-in">
                    <h3 class="text-white">2015</h3>
                    <P><a  class="text-white" href="#">Serampore Malina Lahiri Boy's Academy (H.S)</a></P>
                    <P class="text-white">CLASS - 10 th</P>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" style="width: 71%" aria-valuenow="71" aria-valuemin="0" aria-valuemax="100">71%</div>
                    </div>
                </div>
                <div class="col-md-5 m-4 degree b-shadow" data-aos="zoom-in">
                    <h3 class="text-white">2017</h3>
                    <P><a class="text-white" href="#">Serampore Malina Lahiri Boy's Academy (H.S)</a></P>
                    <P class="text-white">CLASS - 12 th</P>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">65%</div>
                    </div>
                </div>
                <div class="col-md-5 m-4 degree b-shadow" data-aos="zoom-in">
                    <h3 class="text-white">2017 - 2020</h3>
                    <P><a class="text-white" href="#">Gurudas College, Calcutta University</a></P>
                    <P class="text-white">Bsc. Botany (Hons.)</P>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" style="width: 58%" aria-valuenow="58" aria-valuemin="0" aria-valuemax="100">58%</div>
                    </div>
                </div>
                <div class="col-md-5 m-4 degree b-shadow"  data-aos="zoom-in">
                    <h3 class="text-white">2020 - 2023</h3>
                    <P><a class="text-white" href="#">Narula Institute Of Technology, Makaut University</a></P>
                    <P class="text-white">Bca (Bachelor Of Computer Application)</P>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">90% above (Pursuing)</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="skills">
        <div class="contentlight py-5 b-shadow" data-aos="zoom-in">
            <div class="container">
                <h3 class="text-center mb-5 text-dark">MY SKILL</h3>
                <div class="row justify-content-center align-items-center">
                    <div class="circlechart col my-4 text-center" data-percentage="65">HTML</div>
                    <div class="circlechart col my-4 text-center" data-percentage="55">CSS</div>
                    <div class="circlechart col my-4 text-center" data-percentage="40">Javascript</div>
                    <div class="circlechart col my-4 text-center" data-percentage="50">PHP</div>
                    <div class="circlechart col my-4 text-center" data-percentage="50">jquery</div>
                    <div class="circlechart col my-4 text-center" data-percentage="55">React js</div>
                    <div class="circlechart col my-4 text-center" data-percentage="65">Ajax</div>
                    <div class="circlechart col my-4 text-center" data-percentage="55">laravel</div>
                    <div class="circlechart col my-4 text-center" data-percentage="40">Python</div>
                    <div class="circlechart col my-4 text-center" data-percentage="60">Core Java</div>
                    <div class="circlechart col my-4 text-center" data-percentage="69">C</div>
                    <div class="circlechart col my-4 text-center" data-percentage="30">Json</div>
                    <div class="circlechart col my-4 text-center" data-percentage="70">Wordpress</div>
                    <div class="circlechart col my-4 text-center" data-percentage="80">Mysql</div>
                </div>
            </div>
        </div>
    </section>
    <section id="projects" class="py-5">
        <div class="contentdark py-5 b-shadow" data-aos="flip-right">
            <div class="container" id="allprojects">
                <h3 class="text-center mb-5 text-white">MY PROJECTS</h3>
                    
            </div>
        </div>
    </section>
    <section id="blogs" class="py-5">
        <div class="contentlight py-5 b-shadow" data-aos="flip-left">
            <div class="container" id="allblogs">
                <h3 class="text-center mb-5 text-dark">MY Blogs</h3>
                   
            </div>
        </div>
    </section>
    <section id="footer" class="pt-5 pb-2"  data-aos="slide-up">
        <div class="container-fluid">
            <div class="row justify-content-around">
                <div class="col-md-1 col-3 d-flex justify-content-md-start justify-content-end">
                    <ul class="list-unstyled">
                        <li class="py-2"><a class="text-white" href="#home">HOME</a></li>
                        <li class="py-2"><a class="text-white" href="#about">ABOUT</a></li>
                        <li class="py-2"><a class="text-white" href="#edu">EDUCATION</a></li>
                        <li class="py-2"><a class="text-white" href="#skills">SKILL</a></li>
                        <li class="py-2"><a class="text-white" href="#projects">PROJECTS</a></li>
                        <li class="py-2"><a class="text-white" href="#blogs">BLOGS</a></li>
                        <li class="py-2"><a class="text-white" href="#footer">CONTACT</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-6">
                    <h3 class="text-white mb-3">Contact Details</h3>
                    <p class="text-white"><i class="fa fa-phone text-white px-2" aria-hidden="true"></i> Mobile No : <span>7890101401</span></p>
                    <p class="text-white"><i class="fa fa-envelope-o text-white px-2" aria-hidden="true"></i> Email id : <span>jeetsil100@gmail.com</span></p>
                    <p class="text-white"><i class="fa fa-linkedin text-white px-2" aria-hidden="true"></i> Linkedin id : <a href="https://www.linkedin.com/feed/">linkedin link access</a></p>
                    <p class="text-white"><i class="fa fa-github text-white px-2" aria-hidden="true"></i> Git Hub id : <a href="https://github.com/jeetsil">github link access</a></p>
                    <p class="text-white"> <i class="fa fa-facebook text-white px-2" aria-hidden="true"></i> facebook link : <a href="https://www.facebook.com/profile.php?id=100005308844902&eid=ARBjzXMuPe5UgyIIbg21_luYgNn7eT447s26ZK5FH5nCTEY2ax7gB6QKzvvdRYf00fuleAuTmJsQ61We&tn-str=*F">facebook link access</a></p>
                    <!-- <p class="text-white"><i class="fa fa-instagram text-white px-2" aria-hidden="true"></i> Insta id : <a href="#">jeetsil100@gmail.com</a></p> -->
                </div>
                <div class="col-md-3 col-8">
                    <h3 class="text-white mb-3">Comment Section</h3>
                    <form id="contactform">
                        <div class="form-row">
                          <div class="col py-2">
                            <input type="text" class="form-control" id="fname"  name="fname" placeholder="First name" required>
                          </div>
                          <div class="col py-2">
                            <input type="text" class="form-control" id="lname"  name="lname" placeholder="Last name" required>
                          </div>
                        </div>
                        <div class="form-row">
                            <div class="col-12 py-2">
                            <input type="email" class="form-control" id="email"  name="email" placeholder="Email id @gmail.com" required>

                            </div>
                            <div class="col-12 py-2">
                                <textarea class="form-control" id="comment" name="comment" rows="3" placeholder="Give your feedback" required></textarea>
                            </div>
                        </div>
                        <input type="submit" value="Send" id="send" name="send" class="btn btn-outline-info btn-block py-2">
                    </form>
                </div>
                <div class="col-md-4 col-10">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14717.955912650721!2d88.33727527666993!3d22.747227850274346!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f89b1ec3cd6ac5%3A0xc2e39fbe14d31ac5!2sSerampore%20Battala!5e0!3m2!1sen!2sin!4v1655030832393!5m2!1sen!2sin" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="row justify-content-center pt-2">
                <p class="text-white text-center"><small>&copy; Copyright 2022, JEET SIL. All Right Reserved</small></p>
            </div>
        </div>
    </section>
    <div id="addpost">
        <a href="login.php" target="_blank"><i class="fa fa-cogs" aria-hidden="true"></i></a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"></script>
    <script src="./js/progresscircle.js"></script>
    <script src="./js/typed.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="./js/custom.js"></script>

    <!-- -----------------------ajax------------------ -->
    <script>
        $(document).ready(function(){
            $("#send").on('click',function(e){
                e.preventDefault();
                let fname = $('#fname').val();
                let lname = $('#lname').val();
                let email = $('#email').val();
                let comment = $('#comment').val();

                if(fname == "" || lname == "" || email == "" || comment == ""){
                    alert("Please fill the required field...");
                }else{
                    $('#contactform').trigger("reset");
                    alert("Sending Your feedback....");
                    $.ajax({
                        url:"email.php",
                        type:"POST",
                        data:{
                            fname: fname,
                            lname: lname,
                            email: email,
                            comment: comment,
                            send: true
                        },
                        success: function(res){
                            // alert(res);
                            if(res){
                                alert('Thank You For giving Your valuable feedback.');
                            }
                        }
                    });
                }
            });
            // --------------------------project-----------------------
            function loadprojects(project_no){
                $.ajax({
                    url: 'loadpost.php',
                    type: 'POST',
                    data:{
                        project_id : project_no,
                        load_project : true
                    },
                    success : function(res){
                        // alert(res);
                        if(res){
                            $('.addpbtn').remove();
                            $('#allprojects').append(res);
                        }else{
                            $('.addpbtn button').prop('disable',true);
                        }
                    }
                });
            }
            loadprojects();
            $(document).on('click','.addproject',function(){
                var pid = $(this).data('id');
                // alert(pid);
                loadprojects(pid);
            });
            // ----------------------------blog--------------------
            function loadblogs(blog_no){
                $.ajax({
                    url: 'loadpost.php',
                    type: 'POST',
                    data:{
                        blog_id : blog_no,
                        load_blog : true
                    },
                    success : function(res){
                        // alert(res);
                        if(res){
                            $('.addbbtn').remove();
                            $('#allblogs').append(res);
                        }else{
                            $('.addbbtn button').prop('disable',true);
                        }
                    }
                });
            }
            loadblogs();
            $(document).on('click','.addblog',function(){
                var bid = $(this).data('id');
                // alert(bid);
                loadblogs(bid);
            });
        });
    </script>
</body>
</html>