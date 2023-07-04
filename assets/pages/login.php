    <!-- <nav class="navbar">
    <img class="logo" src="assets/images/fb.png">
</nav> -->
<section>
    <div class="logo_body">
  <img class="logobdy" src="assets/images/social1.png" height="550">
</div>

  <div class="signup_body">
    <p class="acc_crt">Login to an account</p>
    <p class="free_hint">It's free and always will be.</p>
    <form class="signup_form" method="post" action="assets/php/actions.php?login">
        <div>
        <input type="text" name="username_email" value="<?=showFormData('username_email')?>" class="form-control rounded-0" placeholder="username/email">
          <?=showerror('username_email')?>
          <input type="password" name="password" class="form-control rounded-0" id="floatingPassword" placeholder="Password">
          <?=showerror('password')?>
          <?=showerror('checkUser')?>
        </div>
      
        <div>
        <button class="btn btn-primary" type="submit">Login</button>
            <a href = "?signup" class = "create"> Create New Account? </a>
        </div>
      
      
    </form>
  </div>

  </section>