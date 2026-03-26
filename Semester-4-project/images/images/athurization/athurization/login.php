<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Portal</title>
     <!-- bootstrap link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
     <style>
    body {
        font-family: 'Inter', sans-serif;
        background-color: #f0f2f5;
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .login-card {
        border: none;
        border-radius: 15px;
        box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        width: 100%;
        max-width: 400px;
    }
    .btn-primary {
        background-color: #0056b3;
        border: none;
        padding: 10px;
        font-weight: 600;
    }
    .brand-logo {
        text-align: center;
        margin-bottom: 20px;
    }
</style>
    
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="card login-card p-4">
                <div class="brand-logo">
                    <h4 class="font-weight-bold text-dark mb-0">Pars Campus</h4>
                    <small class="text-muted">Portal Login</small>
                </div>
                
                <form action="login_process.php" method="POST">
                    <div class="form-group">
                        <label for="email" class="small font-weight-bold">Email address</label>
                        <input type="email" name="email" class="form-control" placeholder="name@example.com" id="email" required>
                    </div>
                    <div class="form-group">
                        <label for="pwd" class="small font-weight-bold">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="••••••••" id="password" required>
                    </div>
                    <div class="form-group form-check custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="remember">
                        <label class="custom-control-label" for="remember">Remember me</label>
                    </div>
                    <button type="submit" class="btn btn-outline-primary btn-block">Log In</button>
                    
                    <div class="text-center mt-3">
                       <small>If you don't have Account ?</small> <a href="signup.php" class="small text-muted">SignUp</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- bootstrap js links -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>