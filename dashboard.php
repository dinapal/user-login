<?php
session_start();
require 'partials/header.php';

if ( !isset( $_SESSION['username'] ) ) {
    ?>
    <div class=" container mt-5 text-center" style="width: 600px ;">
    <div class="alert alert-warning alert-dismissible" role="alert"> You are Not Allowed to Visit this page <a href="login.php" class="alert-link">Login here</a> For Visit This Page</div>
    </div>
    <?php
exit;
}

?>

<div class="container mt-5">
    <h2>Welcome <?php echo $_SESSION['username']; ?></h2>
    <h3>Log Out</h3>
    <button id="logout_btn" class="btn btn-danger">Log Out</button>
</div>
<script>
    var logout = document.getElementById('logout_btn');

    logout.addEventListener('click', (e)=>{
        if(window.confirm('Are you want to Logout')){
            var xhr = new XMLHttpRequest();
            xhr.onload = ()=>{
                document.location = 'index.php';
            }
            xhr.open("GET", 'logout.php', true);
            xhr.send();
        }else{
            return false;
        }

    })


</script>
<?php require 'partials/footer.php';?>