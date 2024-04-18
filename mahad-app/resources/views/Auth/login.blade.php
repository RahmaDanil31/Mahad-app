<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="portal/css/login.css">
</head>

<body>
    <div class="box-login">
        <img src="portal/images/user.png" class="user" alt="user">
        <h1>Login Form</h1>
        <form method="POST" action="{{ url('/login') }}" autocomplete="off">
            @csrf
            <p>Email</p>
            <input autocomplete="false" name="email" type="email" placeholder="Email">
            <p>Password</p>
            <input type="password" name="password" placeholder="Password">
            <input type="submit" value="Login">
        </form>
    </div>
</body>

</html> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desain 2</title>
    <link rel="stylesheet" href="portal/css/login.css">
</head>

<body>
    <section>
        <div class="form-container">
            <h1>Login</h1>
            <img src="portal/images/logo.png" class="user" alt="user">
            <form method="POST" action="{{ url('/login') }}">
                @if (session('loginError'))
                <div class="message">
                    {{ session('loginError') }}
                </div>
                @endif
                @csrf
                <div class="control">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email">
                </div>
                <div class="control">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password">
                </div>
                <div class="control">
                    <input type="submit" value="Login">
                </div>
            </form>
        </div>
    </section>
</body>

</html>