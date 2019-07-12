<!-- start: page -->
<section class="body-sign">
    <div class="center-sign">

        <div class="panel panel-sign">
            <div class="panel-title-sign mt-xl text-right">
                <h2 class="title text-uppercase text-bold m-none"><i class="fa fa-user mr-xs"></i> Login</h2>
            </div>
            <div class="panel-body">
                <?= $this->session->flashdata('message'); ?>
                <form action="<?= base_url('auth') ?>" method="post">
                    <div class="form-group mb-lg">
                        <label>Email</label>
                        <div class="input-group input-group-icon">
                            <input name="email" id="email" type="text" class="form-control input-lg" value="<?= set_value('email'); ?>" />
                            <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                            <span class="input-group-addon">
                                <span class="icon icon-lg">
                                    <i class="fa fa-envelope"></i>
                                </span>
                            </span>
                        </div>
                    </div>

                    <div class="form-group mb-lg">
                        <div class="clearfix">
                            <label class="pull-left">Password</label>
                        </div>
                        <div class="input-group input-group-icon">
                            <input name="password" id="password" type="password" class="form-control input-lg" />
                            <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                            <span class="input-group-addon">
                                <span class="icon icon-lg">
                                    <i class="fa fa-lock"></i>
                                </span>
                            </span>
                        </div>
                    </div>
                    <span class="mt-lg mb-lg line-thru text-center text-uppercase">
                        <span>
                            <button type="submit" class="btn btn-primary hidden-xs">
                                Log In
                            </button>
                        </span>
                    </span>
                    <p>Don't have an account yet? <a href="<?= base_url('auth/register') ?>">Register!</a>
                        <br />Forgot Your Password? <a href="#">Make new password!</a>
                </form>
            </div>
        </div>

        <p class="text-center text-muted mt-md mb-md">&copy; Copyright 2018. All rights reserved.</p>
    </div>
</section>
<!-- end: page -->