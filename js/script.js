$(document).ready(function(){
    $('#loginForm').submit(function(e){
        e.preventDefault();
        $.post('login.php', $(this).serialize(), function(data){
            alert(data);
        });
    });
});