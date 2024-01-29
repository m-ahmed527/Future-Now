<?php include "./includes/head.php"; ?>

<body>
    <main>
        <div class="banner">
            <?php include "./includes/header.php"; ?>
        </div>
        <div class="login-form-main position-relative">
            <div class="container container-c">
                <div class="row">
                    <div class="col-10 mx-auto">
                        <div class="login-form p-login-page mb-24">
                            <div class="form-head d-flex flex-column justify-content-center align-items-center">
                                <h1 class="form-top-heading">Forget Password</h1>
                                <p class="form-bottom-heading">Enter your email and password to sign in</p>
                            </div>
                            <form action="./newPassword.php" class="form">
                                <label for="#" class="label-field mt-4 ">Enter your email to recover your password *</label>
                                <input type="text" placeholder="Enter your Name" required class="input-field my-3 py-3 px-4">
                                <button type="submit" class="register-btn mb-2">Continue</button>
                                <a href="./forgetPassword.php" class="form-bottom-heading" style="text-decoration: none;">Resend code</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php include "./includes/footer.php"; ?>
</body>