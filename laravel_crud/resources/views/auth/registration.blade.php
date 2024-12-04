<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url('/api/placeholder/1920/1080');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            min-height: 100vh;
            display: flex;
            align-items: center;
            position: relative;
        }
        body::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background: rgba(0, 0, 0, 0.5);
            z-index: 0;
        }
        .container {
            position: relative;
            z-index: 1;
        }
        .registration-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
            padding: 2rem;
            margin: 2rem auto;
        }
        .form-control:focus {
            border-color: #0d6efd;
            box-shadow: 0 0 0 0.2rem rgba(13, 110, 253, 0.25);
        }
        .form-floating {
            margin-bottom: 1rem;
        }
        .btn-register {
            padding: 0.8rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            transition: all 0.3s;
        }
        .password-toggle {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: #6c757d;
        }
        .progress {
            height: 4px;
            margin-top: 5px;
        }
        .form-label {
            font-weight: 500;
            color: #495057;
        }
    </style>
</head>
<body>
    <!-- Previous body content remains the same -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="registration-card">
                    <h2 class="mb-4 text-center">Create Account</h2>
                    <!-- Rest of the form content remains the same -->
                    <form class="needs-validation" novalidate>
                        <div class="mb-3 form-floating">
                            <input type="text" class="form-control" id="name" placeholder="John Doe" required>
                            <label for="name">Full Name</label>
                            <div class="invalid-feedback">Please enter your full name.</div>
                        </div>

                        <div class="mb-3 form-floating">
                            <input type="email" class="form-control" id="email" placeholder="name@example.com" required>
                            <label for="email">Email Address</label>
                            <div class="invalid-feedback">Please enter a valid email address.</div>
                        </div>

                        <div class="mb-3 form-floating">
                            <input type="text" class="form-control" id="address" placeholder="Your address" required>
                            <label for="address">Address</label>
                            <div class="invalid-feedback">Please enter your address.</div>
                        </div>

                        <div class="mb-3 form-floating">
                            <input type="tel" class="form-control" id="phone" placeholder="Phone number" pattern="[0-9]{10}" required>
                            <label for="phone">Phone Number</label>
                            <div class="invalid-feedback">Please enter a valid 10-digit phone number.</div>
                        </div>

                        <div class="mb-4 form-floating position-relative">
                            <input type="password" class="form-control" id="password" placeholder="Password" required>
                            <label for="password">Password</label>
                            <i class="fas fa-eye password-toggle" id="togglePassword"></i>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 0%"></div>
                            </div>
                            <div class="invalid-feedback">Password must be at least 8 characters.</div>
                        </div>

                        <button class="btn btn-primary w-100 btn-register" type="submit">
                            Register <i class="fas fa-arrow-right ms-2"></i>
                        </button>
                    </form>

                    <div class="mt-4 text-center">
                        <p class="text-muted">Already have an account? <a href="/login" class="text-primary">Sign in</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Previous JavaScript remains the same
        document.querySelector('form').addEventListener('submit', function(event) {
            if (!this.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }
            this.classList.add('was-validated');
        });

        document.getElementById('togglePassword').addEventListener('click', function() {
            const password = document.getElementById('password');
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            this.classList.toggle('fa-eye');
            this.classList.toggle('fa-eye-slash');
        });

        document.getElementById('password').addEventListener('input', function() {
            const strength = calculatePasswordStrength(this.value);
            const progressBar = document.querySelector('.progress-bar');
            progressBar.style.width = strength + '%';
            
            if (strength < 33) {
                progressBar.className = 'progress-bar bg-danger';
            } else if (strength < 66) {
                progressBar.className = 'progress-bar bg-warning';
            } else {
                progressBar.className = 'progress-bar bg-success';
            }
        });

        function calculatePasswordStrength(password) {
            let strength = 0;
            if (password.length >= 8) strength += 25;
            if (password.match(/[a-z]/) && password.match(/[A-Z]/)) strength += 25;
            if (password.match(/\d/)) strength += 25;
            if (password.match(/[^A-Za-z0-9]/)) strength += 25;
            return strength;
        }
    </script>
</body>
</html>