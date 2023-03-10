<?php require APPROOT . '/views/inc/header.php'; ?>

<div class="row">
    <div class="col-md-6 mx-auto">
        <div class="card bg-light mt-5">
            <div class="card-header card-text">
                <h2 class="card-text">User login</h2>
                <p class="card-text">Please enter your username and password</p>
            </div>

            <div class="card-body">
                <form method="post" action="<?php echo URLROOT; ?>/admin/login">
                    <div class="form-group">
                        <label for="email">Email<sub>*</sub></label>
                        <input type="email" name="email" class="form-control form-control-lg" required>
                    </div>

                    <div class="form-group">
                        <label for="password">Password<sub>*</sub></label>
                        <input type="password" name="password" class="form-control form-control-lg" required>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                                <input type="submit" class="btn btn-success btn-block pull-left" value="Login">
                            </div>
                            <div class="col">
                                <a href="<?php echo URLROOT; ?>/admin/register" class="btn btn-light btn-block pull-right">No account? Register </a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>