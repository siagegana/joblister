<?php include 'inc/header.php'; ?>
    <main class="form-signin w-100 m-auto">
        <form method="post" action="loginpage.php">
            <h2 class="h3 mb-3 fw-normal">Please sign in</h2>
            

            <div class="form-floating">
            <input type="email" class="form-control" name="user_email" required id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
            </div>
            <br>
            <div class="form-floating">
            <input type="password" class="form-control" name="user_pwd" required id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
            </div>
     
            <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
            </div>
            <input type="submit" class="btn btn-default" value="Sign up" name="submit">

        </form>
    </main>
    <br><br>
    <p>Don't have an account? Sign up <a href="signup-page.php">here</a></p>

    <br>

<?php include 'inc/footer.php'; ?>
