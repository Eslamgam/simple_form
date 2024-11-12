

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        /* Basic reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        /* Center the form on the page */
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f2f5;
        }

        /* Form container styling */
        .form-container {
            width: 100%;
            max-width: 400px;
            padding: 30px;
            background-color: #fff;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            border-radius: 8px;
            text-align: center;
        }

        /* Form title styling */
        .form-title {
            font-size: 2rem;
            color: #1877f2;
            margin-bottom: 20px;
            font-weight: bold;
        }

        /* Input field styling */
        .form-group {
            margin-bottom: 15px;
        }

        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 12px;
            font-size: 1rem;
            border: 1px solid #dddfe2;
            border-radius: 6px;
            background-color: #f0f2f5;
        }

        input[type="text"]:focus, input[type="password"]:focus {
            border-color: #1877f2;
            background-color: #fff;
            outline: none;
        }

        /* Submit button styling */
        .btn {
            width: 100%;
            padding: 12px;
            background-color: #1877f2;
            border: none;
            color: #fff;
            font-size: 1.1rem;
            border-radius: 6px;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-top: 10px;
        }

        .btn:hover {
            background-color: #166fe5;
        }

        /* Footer style */
        .footer {
            margin-top: 15px;
            color: #606770;
            font-size: 0.9rem;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2 class="form-title">Login</h2>

        <!-- Success message -->
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <!-- Login Form -->
        <form action="{{ route('register') }}" method="POST">
            @csrf

            <!-- Username Field -->
            <div class="form-group">
                <input type="text" id="username" name="username" placeholder="Username" value="{{ old('username') }}" required>
                @error('username')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <!-- Password Field -->
            <div class="form-group">
                <input type="password" id="password" name="password" placeholder="Password" required>
                @error('password')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn">Log In</button>
        </form>

        <!-- Footer Text -->
        <div class="footer">
            <p>Don’t have an account? <a href="#" style="color: #1877f2;">Sign up</a></p>
        </div>
    </div>
</body>
</html>
