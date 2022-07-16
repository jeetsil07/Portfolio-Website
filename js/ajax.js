$(document).ready(function(){
    $("#send").on('click',function(e){
        e.preventDefault();
        let fname = $('#fname').val();
        let lname = $('#lname').val();
        let email = $('#email').val();
        let comment = $('#comment').val();
        $.ajax({
            url:"email.php",
            type:"POST",
            data:{
                fname: fname,
                lname: lname,
                email: email,
                comment: comment,
                // send: true
            },
            success: function(response){
                if(response == 1){
                    alert('Email Send');
                }else{
                    alert('somthing went wrong');                        
                }
            }
        });
    });
});