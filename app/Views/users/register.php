<div class="container">
    <div class="row justify-content-center align-items-center pt-5">
    <div class="col-md-6 col-sm-12">
        <div class="card p-5">
            <h2>Register</h2>

            <form action="<?= base_url("register-post") ?>" method="post">
                <div class="mb-3">
                    <label for="exampleInputName" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputName" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" required>
                </div>

                <button type="submit" class="btn btn-primary">Register</button>
            </form>

            <?php if (session()->getFlashdata('msg')) : ?>
                <div class="alert alert-danger">
                    <?= session()->getFlashdata('msg') ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
    </div>
</div>