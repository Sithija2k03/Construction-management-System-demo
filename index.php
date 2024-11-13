
<!DOCTYPE html>
<html>
<head>
    <!-- <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <title>Login Page</title>
    <link rel="stylesheet" href="Login.css">
   
    <!-- <script src="https://kit.fontawesome.com/c5b51fb9f1.js" crossorigin="anonymous"></script> -->
</head>
<body>
    <div class="login-container">
        <img src="Images/123.jpg" alt="Image" class="login-image">
       
        <div class="wrap">    
            <form action="indexhandle.php" method="POST">
                
                <h1>Login</h1>
                <div class="loginInput">
                    
                    <input type="email"  name="email" placeholder="   Email">
                </div>
            
                <div class="loginInput">
                    

                    <input type="password" name="password" placeholder="  Password">
                </div>

                <div class="loginRemember">
                   <label><input type="checkbox">Remember Me </label>
                    <a href="#">Forget password?</a>
                </div>

                    <button onclick="login()" type="submit"   class="btn" name=login>Login</button>
                    <script>
                            function login() {
                              alert("Are you want to login to system");
                                }
                    </script>

                <div class="newLogin">
                    <p>Haven't account?<a href="Register.html">Sign up</a></p>
                </div>
            </form>    
        </div> 
    </div>
    
</body>
</html>



