<!DOCTYPE html>
<html>
<style>
form {
    position: relative;
    margin: 15% auto 100px;
    border: 3px solid #f1f1f1;
    width: 400px;
}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

.container {
    width: auto;
    float: center;
    padding: 16px;
}

</style>
<body>

<form action="check_login.php" method="post">

  <div class="container">
  <h2>Login</h2>
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        
    <button type="submit">Login</button>
  </div>
</form>

</body>
</html>
