<html>
<head>
    </head>
        <div class="login-form">
            <h1>Login</h1>
            <form action="xreg.php" method="post">
            <p>User Name</p>
            <input type="email" name="user" id="user" placeholder="username" class="box">
            <p>Password</p>
            <input type="password" name="password" id="password"placeholder="password" class="box">
            <p>forget password? <a href="#">click here</a></p>
            <p>don't have an account? <a href="reg.html">register now</a></p>
            <input type="submit" class="btn" value="login">
            <i class="fas fa-times"></i>
            <a href="logout.php">Log out</a>

            </form>
</div>
<html>

<style>
*{
padding:0;
margin:0;
font-family:nonito;
}
body {
background:linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)),url('./rrr.jpg') no-repeat;
background-size:cover;
}
.login-form{
width:350;
top:50%;
left:50%;
transform:translate(-50%,-50%);
position:absolute;
color:#fff;
}
.login-form h1{
font-size:40px;
text-align:center;
text-transform:uppercase;
margin:40px 0;
}
.login-form p{
font-size:20px;
margin:15px 0;
}
.login-form input{
font-size:16px;
width:100%;
padding:15px 10px;
border:0;
outline:none;
border-radius:5px;
}
.login-form button{
font-size:18px;
font-weight:bold;
margin:20px 0;
padding:10px 15px;
width:50%;
border-radius:5px;

}

