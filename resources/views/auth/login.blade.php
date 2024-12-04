<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card shadow-lg" style="width: 400px;">
            <div class="card-body">
                <h3 class="text-center mb-4">Login</h3>
                <form method="POST" action="{{route('login.store')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email" required>

                        @error('email')
                        <div class="alert alert-danger">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Enter your password" required>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div>
                            <input type="checkbox" class="form-check-input" id="remember">
                            <label class="form-check-label" for="remember">Remember me</label>
                        </div>
                        <a href="#" class="text-decoration-none">Forgot Password?</a>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Login</button>
                </form>
                @session('block')
                    
                
                <div class="text-center mt-3">
                    {{'This user has blocked'}}   
                </div>
                @endsession
                
                <div class="text-center mt-3">
                    <small>Don't have an account? <a href="#" class="text-decoration-none">Sign up</a></small>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS (Optional for interactivity) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
