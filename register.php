<?php
echo "Register page";
echo "<a href='index.php'> Back to Home</a>";
?>
<html>
<head>
    <title>Register</title>
</head>
<body>
    <h2>Register Here</h2>
    <form action="" method="post">
        Name: <input type="text" name="name" required><br>
        Email: <input type="email" name="email" required><br>
        Password: <input type="password" name="password" required><br>
        <input type="submit" value="Register">
    </form>
</body>
</html>