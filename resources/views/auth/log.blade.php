<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login & Signup Form</title>
    <link rel="stylesheet" href="style.css" />

    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap");

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins",
                sans-serif;
        }

        body {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #f0faff;
        }

        .wrapper {
            position: relative;
            max-width: 470px;
            width: 100%;
            border-radius: 12px;
            padding: 20px 30px 120px;
            background: #4070f4;
            box-shadow: 0 5px 10px rgba(0,
                    0,
                    0,
                    0.1);
            overflow: hidden;
        }

        .form.login {
            position: absolute;
            left: 50%;
            bottom: -86%;
            transform: translateX(-50%);
            width: calc(100% + 220px);
            padding: 20px 140px;
            border-radius: 50%;
            height: 100%;
            background: #fff;
            transition: all 0.6s ease;
        }

        .wrapper.active .form.login {
            bottom: -15%;
            border-radius: 35%;
            box-shadow: 0 -5px 10px rgba(0, 0, 0, 0.1);
        }

        .form header {
            font-size: 30px;
            text-align: center;
            color: #fff;
            font-weight: 600;
            cursor: pointer;
        }

        .form.login header {
            color: #333;
            opacity: 0.6;
        }

        .wrapper.active .form.login header {
            opacity: 1;
        }

        .wrapper.active .signup header {
            opacity: 0.6;
        }

        .wrapper form {
            display: flex;
            flex-direction: column;
            gap: 20px;
            margin-top: 40px;
        }

        form input {
            height: 60px;
            outline: none;
            border: none;
            padding: 0 15px;
            font-size: 16px;
            font-weight: 400;
            color: #333;
            border-radius: 8px;
            background: #fff;
        }

        .form.login input {
            border: 1px solid #aaa;
        }

        .form.login input:focus {
            box-shadow: 0 1px 0 #ddd;
        }

        form .checkbox {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .checkbox input[type="checkbox"] {
            height: 16px;
            width: 16px;
            accent-color: #fff;
            cursor: pointer;
        }

        form .checkbox label {
            cursor: pointer;
            color: #fff;
        }

        form a {
            color: #333;
            text-decoration: none;
        }

        form a:hover {
            text-decoration: underline;
        }

        form input[type="submit"] {
            margin-top: 15px;
            padding: none;
            font-size: 18px;
            font-weight: 500;
            cursor: pointer;
        }

        .form.login input[type="submit"] {
            background: #4070f4;
            color: #fff;
            border: none;
        }
    </style>
</head>

<body>
    <section class="wrapper">
        <div class="form signup">
            <header>Signup</header>
            <form action="{{ route('auth.store') }}" method="post">
                @csrf
                <input type="text" name="name" placeholder="Full name" required />
                <input type="text" name="email" placeholder="Email address" required />
                <input type="password" name="password" placeholder="Password" required />
                <div class="checkbox">
                    <input type="checkbox" id="signupCheck" />
                    <label for="signupCheck">I accept all terms & conditions</label>
                </div>
                <input type="submit" value="Signup" />
            </form>
        </div>
        <div class="form login">
            <header>Login</header>
            <form action="{{ route('auth.authentication') }}" method="post">
                @csrf
                <input type="text" name="email" placeholder="Email address" required />
                <input type="password" name="password" placeholder="Password" required />
                <a href="#">Forgot password?</a>
                <input type="submit" value="Login" />
            </form>
        </div>
        <script>
            const wrapper = document.querySelector(".wrapper"),
                signupHeader = document.querySelector(".signup header"),
                loginHeader = document.querySelector(".login header");
            loginHeader.addEventListener("click", () => {
                wrapper.classList.add("active");
            });
            signupHeader.addEventListener("click", () => {
                wrapper.classList.remove("active");
            });
        </script>
    </section>
</body>

</html>