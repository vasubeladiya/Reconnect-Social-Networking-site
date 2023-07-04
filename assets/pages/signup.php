<!-- <nav class="navbar">
    <img class="logo" src="assets/images/fb.png">
</nav> -->
<section>
    <div class="logo_body">
  <img class="logobdy" src="assets/images/social1.png" height="550">
</div>

  <div class="signup_body">
    <p class="acc_crt">Create an account</p>
    <p class="free_hint">It's free and always will be.</p>
    <form class="signup_form" method="post" action="assets/php/actions.php?signup">
      <div>
      <input type="text" name="first_name" value="<?=showFormData('first_name')?>" class="form-control rounded-0" placeholder="firstname">
          <?=showerror('first_name')?>
          <input type="text" name="last_name" value="<?=showFormData('last_name')?>" class="form-control rounded-0" placeholder="lastname">
          <?=showerror('last_name')?>
          <div class="d-flex gap-3 my-3">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="exampleRadios1"
                            value="1" <?=isset($_SESSION['formdata'])?'':'checked'?><?=showFormData('gender')==1?'checked':''?>>
                        <label class="form-check-label" for="exampleRadios1">
                            Male
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="exampleRadios3"
                            value="2" <?=showFormData('gender')==2?'checked':''?>>
                        <label class="form-check-label" for="exampleRadios3">
                            Female
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="exampleRadios2"
                            value="0" <?=showFormData('gender')==0?'checked':''?>>
                        <label class="form-check-label" for="exampleRadios2">
                            Other
                        </label>
                    </div>
                </div>
          <input type="email" name="email" value="<?=showFormData('email')?>" class="form-control rounded-0" placeholder="email">
          <?=showerror('email')?>
          <input type="text" name="username" value="<?=showFormData('username')?>" class="form-control rounded-0" placeholder="username">
          <?=showerror('username')?>
          <input type="password" name="password" class="form-control rounded-0" id="floatingPassword" placeholder="Password">
          <?=showerror('password')?>
          <input class="password2" type="password" name="confirmpassword" value="" placeholder="Confirm password">
          <?=showerror('confirmpassword')?>
      </div>
      <p class="agreement">By clicking Sign Up, you agree to our <a href="#">Terms, Data Policy and Cookies Policy.</a> You may receive SMS Notifications from us and can opt out any time.</p>

      <div>
      <button class="btn btn-primary" type="submit">Sign Up</button>
          <a href = "?Login" class = "create"> Already have an Account? </a>
      </div>
      
    </form>
  </div>

  </section>