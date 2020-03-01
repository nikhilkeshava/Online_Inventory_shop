<html>
<style type="text/css">
    .sign {
        padding-top: 40px;
        color: #8C55AA;
        font-family: 'Ubuntu', sans-serif;
        font-weight: bold;
        font-size: 23px;
    }
    
    .un {
    width: 76%;
    color: rgb(38, 50, 56);
    font-weight: 700;
    font-size: 14px;
    letter-spacing: 1px;
    background: rgba(136, 126, 126, 0.04);
    padding: 10px 20px;
    border: none;
    border-radius: 20px;
    outline: none;
    box-sizing: border-box;
    border: 2px solid rgba(0, 0, 0, 0.02);
    margin-bottom: 50px;
    margin-left: 46px;
    text-align: center;
    margin-bottom: 27px;
    font-family: 'Ubuntu', sans-serif;
    }
    
    form.form1 {
        padding-top: 40px;
    }
    
    .pass {
            width: 76%;
    color: rgb(38, 50, 56);
    font-weight: 700;
    font-size: 14px;
    letter-spacing: 1px;
    background: rgba(136, 126, 126, 0.04);
    padding: 10px 20px;
    border: none;
    border-radius: 20px;
    outline: none;
    box-sizing: border-box;
    border: 2px solid rgba(0, 0, 0, 0.02);
    margin-bottom: 50px;
    margin-left: 46px;
    text-align: center;
    margin-bottom: 27px;
    font-family: 'Ubuntu', sans-serif;
    }
    
   
    .un:focus, .pass:focus {
        border: 2px solid rgba(0, 0, 0, 0.18) !important;
        
    }
    
    .submit {
      cursor: pointer;
        border-radius: 5em;
        color: #fff;
        background: linear-gradient(to right, #9C27B0, #E040FB);
        border: 0;
        padding-left: 40px;
        padding-right: 40px;
        padding-bottom: 10px;
        padding-top: 10px;
        font-family: 'Ubuntu', sans-serif;
        margin-left: 35%;
        font-size: 13px;
        box-shadow: 0 0 20px 1px rgba(0, 0, 0, 0.04);
    }
    
    .forgot {
        text-shadow: 0px 0px 3px rgba(117, 117, 117, 0.12);
        color: #E1BEE7;
        padding-top: 15px;
    }
     
</style>
<head>
  <title>Sign in</title>
</head>
<body>
    <p class="sign" align="center">Sign in</p>
     <img src="https://img.icons8.com/clouds/150/000000/user.png" style="margin-left: 190px;">
    <form id="signup_form" onsubmit="return false" class="login100-form">
      <input class="un " type="text" align="center" name="f_name" id="f_name" placeholder="First Name">
      <input class="un" type="text" align="center"  name="l_name" id="l_name" placeholder="Last Name">
         <input class="un" align="center" type="email" name="email" placeholder="Email">
             <input class="pass" align="center" type="password" name="password" id="password" placeholder="password">
              <input class="pass" align="center" type="password" name="repassword" id="repassword" placeholder="confirm password">
                <input class="un" align="center" type="text" name="mobile" id="mobile" placeholder="mobile">
                    <input class="un" align="center" type="text" name="address1" id="address1" placeholder="Address">
                      <input class="un" align="center" type="text" name="address2" id="address2" placeholder="City">
      

       <input id="myButton" class="submit" value="Sign Up" type="submit" name="signup_button">
      <p class="forgot" align="center"><a href="#">Forgot Password?</a></p>
        <div class="login-marg">
           
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8" id="signup_msg">


                </div>
               
            </div>
            <div class="col-md-2"></div>
        </div>

  </form>
            
                
    </div>
     
</body>

</html>