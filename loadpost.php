<?php
    include 'db_con.php';
    $limit = 4;
    if(isset($_POST['load_project']) && $_POST['load_project']==true){
        if(isset($_POST['project_id'])){
            $project_id = $_POST['project_id'];            
        }else{
            $project_id = 0;
        }
        $sql = "SELECT * FROM projects LIMIT $project_id, $limit ";
        $runsql= mysqli_query($conn,$sql);
        $output = '';
        if(mysqli_num_rows($runsql)>0){
            $output .= '<div class="row row-cols-2 row-md-cols-3 row-cols-lg-4 justify-content-center">';
            while($card = mysqli_fetch_assoc($runsql)){
                $last_id = $card['id'];
                $output .='<div class="col mb-4">
                                <div class="card">
                                    <img src="'.$card['project_img_path'].'" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">'.$card['project_title'].'</h5>
                                        <p class="card-text">'.substr($card['project_details'],0,75).'...'.'</p>
                                        <div class="buttongroup text-center">
                                            <a href="'.$card['git_link'].'" class="btn btn-info btn-block">Open Source Code</a>
                                            <a href="'.$card['web_link'].'" class="btn btn-info btn-block">Open Project</a>
                                        </div>
                                    </div>
                                </div>
                            </div>';
            }
            $output .= '</div>
                            <div class="row mt-5 addpbtn">
                                <div class="col text-center">
                                    <button class="btn btn-primary btn-lg addproject" data-id="'.$last_id.'">Load More</button>
                                </div>
                            </div>';  
        }
        echo $output;        
    }
    // ---------------------------------------------------blog----------------------------------------------
    if(isset($_POST['load_blog']) && $_POST['load_blog']==true){
        if(isset($_POST['blog_id'])){
            $blog_id = $_POST['blog_id'];            
        }else{
            $blog_id = 0;
        }
        $sql = "SELECT * FROM blogs LIMIT $blog_id, $limit ";
        $runsql= mysqli_query($conn,$sql);
        $output = '';
        if(mysqli_num_rows($runsql)>0){
            $output .= '<div class="row row-cols-2 row-md-cols-3 row-cols-lg-4 justify-content-center">';
            while($card = mysqli_fetch_assoc($runsql)){
                $last_id = $card['id'];
                $output .='<div class="col mb-4">
                                <div class="card">
                                    <img src="'.$card['blog_img_path'].'" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">'.$card['blog_title'].'</h5>
                                        <p class="card-text">'.substr($card['blog_details'],0,75).'...'.'</p>
                                        <div class="buttongroup text-center">
                                            <a href="displayblogs.php?id='.$card['id'].'" target="_blank" class="btn btn-info btn-block">Open Blog</a>
                                        </div>
                                    </div>
                                </div>
                            </div>';
            }
            $output .= '</div>
                            <div class="row mt-5 addbbtn">
                                <div class="col text-center">
                                    <button class="btn btn-primary btn-lg addblog" data-id="'.$last_id.'">Load More</button>
                                </div>
                            </div>';  
        }
        echo $output; 
    }   
?>