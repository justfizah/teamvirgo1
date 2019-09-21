<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login ~ Team Virgo</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Lato|Montserrat&display=swap" rel="stylesheet">
</head>
<body>
    <main>
        <section class="side hide-mobile">
            <div class="side-main">
                    <div class="logo-box">
                            <img src="images/logo.png" alt="Team virgo logo">
                        </div>
            
                        <div class="avatars">
                            <img src="images/avatars.png" alt="">
                        </div>
            
                        <div class="cta" id="cta-login">
                            <h6>Don't have an account?</h6>
                            <a href="" class="btn" id="show-reg-btn">Sign up ></a>
                        </div>

                        <div class="cta" id="cta-reg">
                            <h6>Already have an account?</h6>
                            <a href="" class="btn" id="show-login-btn">Log in ></a>
                        </div>
            </div>
        </section>
        <section class="main">
             <div class="container">
                <div class="show-mobile">
                    <div class="inner-align">
                        <div class="logo-box">
                            <img src="images/logo-2.png" alt="Team virgo logo">
                        </div>
                
                        <div class="avatars">
                            <img src="images/avatars.png" alt="">
                        </div>
                    </div>
                </div>

                 <div class="heading" id="login-heading">
                     <h2>Let's get you logged in.</h2>
                     <p>Enter your username and password</p>
                 </div>

                 <div class="heading" id="reg-heading">
                    <h2>Hello friend!</h2>
                    <p>Start your journey with us</p>
                </div>

                 <div class="form">
                        <form action="/registration.php" id="login-form">
                            <div class="form-group">
                                <label for="username">Username: </label>
                                <input type="text" name="username"  class="form-input">
                            </div>
                            <div class="form-group">
                               <label for="username">Password: </label>
                               <input type="password" name="password"  class="form-input">
                           </div>
       
                           <div class="form-group">
                               <button class="btn">Log in</button>
                           </div>

                           <div class="show-mobile">
                                <p class="link-text">Don't have an account? <a href="" class="link" id="show-reg-link">Sign up</a></p>
                            </div>
                        </form>

                        <form action="/validation.php" id="reg-form">
                            <div class="form-group">
                                <label for="username">Username: </label>
                                <input type="text" name="username"  class="form-input">
                            </div>
                            <div class="form-group">
                                <label for="username">Email: </label>
                                <input type="email" name="email"  class="form-input">
                            </div>
                            <div class="form-group">
                               <label for="username">Password: </label>
                               <input type="password" name="password"  class="form-input">
                           </div>
       
                           <div class="form-group">
                               <button class="btn">Sign up</button>
                           </div>

                           <div class="show-mobile">
                                <p class="link-text">Already have an account? <a href="" class="link" id="show-login-link">Log in</a></p>
                            </div>
                        </form>
                    </div>
             </div>
        </section>
    </main>  
    
    <script src="js/script.js"></script>
</body>
</html>