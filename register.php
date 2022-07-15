<?php require 'partials/header.php';?>
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
        <form id="register_form" action="" method="post">
            <div class="mb-3">
              <label for="username" class="form-label">User Name</label>
              <input type="text" name="username" id="username" class="form-control">
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email Address</label>
              <input type="email" name="email" id="email" class="form-control">
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" name="password" id="password" class="form-control">
            </div>
            <div class="mb-3">
              <button class="btn btn-primary" type="submit">Reigster Now</button>
            </div>
        </form>
    </div>
</div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $('#register_form').on('submit', function(e){
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: 'register_submit.php',
                data: new FormData(this),
                contentType: false,
                processData: false,
                cache: false,
                success: (response)=>{
                    alert(response);
                    $(this).trigger('reset');
                },
                error: (response) =>{
                    alert(response)
                }
            })
        })

    </script>
<?php require 'partials/footer.php';?>


