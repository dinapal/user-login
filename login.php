<?php
session_start();
require 'partials/header.php';

if ( isset( $_SESSION['username'] ) ) {
    ?>
    <div class=" container mt-5 text-center" style="width: 600px ;">
    <div class="alert alert-warning alert-dismissible" role="alert"> You are laready Login :) go to Dashboard page from  <a href="dashboard.php" class="alert-link">Here</a> </div>
    </div>
    <?php
exit;
}

?>
<style>
    .card {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}
</style>
<div class="container">
    <div class="card border-primary p-3 mt-5" style="width: 450px;">
    <h2 class="text-center">Login Here</h2>
        <form id="login_form" action="" method="post">
            <div class="mb-3">
              <label for="username" class="form-label">User Name</label>
              <input type="text" name="username" id="username" class="form-control">
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" name="password" id="password" class="form-control">
            </div>
            <div class="mb-3">
              <button class="btn btn-primary" type="submit">Login Now</button>
            </div>
        </form>
    </div>
</div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $('#login_form').on('submit', function(e){
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: 'login_submit.php',
                data: new FormData(this),
                contentType: false,
                processData: false,
                cache: false,
                success: (response)=>{
                    // alert(response);
                    window.location.href = 'dashboard.php';
                },
                error: (response) =>{
                    alert(response)
                }
            })
        })

    </script>
<?php require 'partials/footer.php';?>


