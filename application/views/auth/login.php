<body class="bg-white">

    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="">
                        <img class="align-content" src="<?= base_url('assets/'); ?>images/logo_smp.png" alt="">
                    </a>
                </div>
                <div class="login-form">
                    <form method="post" action="<?= base_url('auth'); ?>">
                        <?= $this->session->flashdata('message'); ?>
                        <div class="form-group">
                            <input type="text" name="username" id="username" class="form-control" value="<?= set_value('username'); ?>" placeholder="Username">
                            <?= form_error('username', '<small class="text-danger">', '</small>'); ?>
                        </div>

                        <div class=" form-group">
                            <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                            <?= form_error('password', '<small class="text-danger">', '</small>'); ?>
                        </div>
                        <button type="submit" class="btn btn-primary btn-flat">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>