<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa; 
    }
    .login-card {
      max-width: 350px;
      margin: auto;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
      background-color: #ffffff;
    }
    .login-title {
      text-align: center;
      color: #333333;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .forgot-password-link {
      display: block;
      text-align: right;
      color: #6c757d;
    }

    .register-link {
      text-align: center;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-6 mx-auto mt-5">
        <div class="login-card">
          <h2 class="login-title mb-4">Login</h2>
          <form>
            <div class="form-group">
              <input type="text" class="form-control" id="uname" placeholder="Username" >
            </div>
            <div class="form-group">
              <input type="password" class="form-control" id="upass" placeholder="Password" value="upass">
            </div>
            <div class="form-group"> 
              <a href="#" class="forgot-password-link">Forgot password?</a>
            </div>
            <button type="button" class="btn btn-primary btn-block" id="log">Login</button>
            <p class="register-link mt-3 mb-0">Don't have an account? <a href="signup.html">Register here</a></p>
          </form>
        </div>
      </div>
    </div>
  </div>
  <script>
    function login(){
    const user={
        name:"pavan@123",
        password:"123456"
    }
    const btn=document.getElementById('log');
    btn.addEventListener('click',()=>{
        const username=document.getElementById('uname').value
        const password=document.getElementById('upass').value
        console.log(`username:${username}`);
        console.log(`password:${password}`);
        if(username.includes('@')){
            if(username===user.name && password===user.password){
                alert('login success')
                window.location.href='railway.html'
            }
            else{
                alert('invalid login')
                
            }
        }
        else{
            alert('invalid email')
        }
    })
}

login();
</script>
</body>
</html>
