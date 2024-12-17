<!-- views/tasks/create.php -->
<!DOCTYPE html>
<html>

<head>
    <title>Register</title>
</head>

<body>
    <h1>Register</h1>
    <form action="/users/store" method="post">
        <input type="text" name="name" placeholder="Name"><br><br>
        <input type="email" name="email" placeholder="Email"><br><br>
        <input type="password" name="password" placeholder="password"><br><br>
        <button type="submit">Save Task</button>
    </form><br>
<a href="/login">Login</a>
</body>

</html>