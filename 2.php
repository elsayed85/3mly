// login.html
<form method="post" action="login.php">
    <input type="email" name="email" placeholder="Email">
    <input type="password" name="password" placeholder="Password">
    <input type="submit" value="Register">
</form>

// css styling
<style>
    form {
        font-size: 110%;
        width: 300px;
        margin: 0 auto;
    }

    label {
        display: block;
        color: saddlebrown;
        margin: 16px 0 3px;
    }

    input {
        width: 100%;
        padding: 5px;
        box-sizing: border-box;
        background-color: cornsilk;
        border: solid 1px tan;
    }
</style>

// login.php
<?php
// handel inputs (email , password)
// validate inputs
// make sure that email and password are correct in DB
// if user enter the correct email and password then open & create session for the current user
echo "Congratulations, You are successfully Signed in... Welcome to Our Website ^_^";
?>