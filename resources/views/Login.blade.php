<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login | A&JAutos</title>
    <!-- Bootstrap 4 CDN -->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/forms/select/select2.min.css">
    <link rel="stylesheet" type="text/css"
          href="../../../app-assets/vendors/css/tables/datatable/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" type="text/css"
          href="../../../app-assets/vendors/css/tables/datatable/responsive.bootstrap5.min.css">
    <link rel="stylesheet" type="text/css"
          href="../../../app-assets/vendors/css/tables/datatable/buttons.bootstrap5.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/tables/datatable/rowGroup.bootstrap5.min.css">
    <!-- END: Vendor CSS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body class="bg-dark">

<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="card text-white p-4 shadow-lg" style="width: 25rem; background-color: #1E2530; border-radius: 10px;">
        <div class="text-center">
            <img src="ajautos.webp" alt="A&JAutos Logo" class="mb-3" width="150">
            <h4 class="mb-4">Welcome to A&JAutos! 👋</h4>
        </div>
        <form>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control border-success text-white bg-dark" id="email" placeholder="admin@gmail.com" required>
            </div>

            <div class="form-group">
                <label for="password" class="d-flex justify-content-between">
                    Password
                    <a href="#" class="text-success">Forgot Password?</a>
                </label>
                <div class="d-flex align-items-center border border-success rounded">
                    <input type="password" class="form-control border-0 text-white bg-dark" style="border-radius: 0px;" id="password" placeholder="********" required>
                    <button class="btn border-0 " style=" background-color: #343A40; border-radius: 0px;" type="button" onclick="togglePassword()">
                        <i class="fa-solid fa-eye text-success " id="eyeIcon" style="pointer-events: none;"></i>
                    </button>
                </div>
            </div>
            <div class="form-check mb-3">
                <input type="checkbox" class="form-check-input" id="remember">
                <label class="form-check-label" for="remember">Remember Me</label>
            </div>

            <button type="submit" class="btn btn-success btn-block">Sign in</button>
        </form>
    </div>
</div>

<!-- Bootstrap 4 JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<!-- Password Toggle Script -->
<script>
    function togglePassword() {
        var passwordField = document.getElementById("password");
        var eyeIcon = document.querySelector(".input-group-append i");

        if (passwordField.type === "password") {
            passwordField.type = "text";
            eyeIcon.classList.remove("fa-eye");
            eyeIcon.classList.add("fa-eye-slash");
        } else {
            passwordField.type = "password";
            eyeIcon.classList.remove("fa-eye-slash");
            eyeIcon.classList.add("fa-eye");
        }
    }
</script>

</body>
</html>
