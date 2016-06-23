
{* Smarty *}

<a href="Signup">Sign Up!</a>
<form action="login" method="post">

    Email: <input type="text" name="User[email]" value={$email}><br>
    Password: <input type="text" name="User[password]" value={$password}><br>
    Remember me :  <input type="checkbox" name="save" value="value1">
    <input type="submit" name="login" value="login">
</form>