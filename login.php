<div id="login-dnone">
<section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="./images/login.png" class="img-fluid"
          alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form action="./backend_login.php" method="POST">
          <div class="divider d-flex align-items-center my-4">
            <p class="text-center fw-bold mx-3 mb-0">Login Form</p>
          </div>

          <!-- Email input -->
          <div class="mb-4">
            <input type="email" name="email" id="email" class="form-control form-control-lg login_input"
              placeholder="Email address" />
          </div>

          <!-- Password input -->
          <div class="mb-3">
            <input type="password" name="password" id="password" class="form-control form-control-lg login_input"
              placeholder="Password" />
          </div>

          <div class="text-center text-lg-start mt-4 pt-2">
          <input type="submit" name="submit" class="btn btn-primary btn-lg" value="Login"
              style="padding-left: 2.5rem; padding-right: 2.5rem;">
            <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a
                class="link-danger" onclick="register()" style="cursor: pointer;"><u>Register</u></a></p>
          </div>
          

        </form>
      </div>
    </div>
  </div>
  
</section>

</div>


