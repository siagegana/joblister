<?php include 'inc/header.php'; ?>
    <main class="form-signin w-100 m-auto">
        <form method="post" action="signup-page.php">
            <h2 class="h3 mb-3 fw-normal">Sign Up</h2>
            

            <div class="form-floating">
            <input type="email" class="form-control" name="user_email" required id="floatingInput" placeholder="name@something.com">
            <label for="floatingInput">Email address</label>
            </div>
            <br>
            <div class="form-floating">
            <input type="password" class="form-control" name="user_pwd" required id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
            </div>
            <br>
            <div class="form-floating">
            <input type="password" class="form-control" name="pwdRepeat" required id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Repeat Password</label>
            </div>

            <br>
            <input type="submit" class="btn btn-default" value="Sign up" name="submit">

        </form>
    </main>
 

<?php include 'inc/footer.php'; ?>
