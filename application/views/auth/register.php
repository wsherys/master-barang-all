<!-- start: page -->
<section class="body-sign">
    <div class="center-sign">

        <div class="panel panel-sign">
            <div class="panel-title-sign mt-xl text-right">
                <h2 class="title text-uppercase text-bold m-none"><i class="fa fa-user mr-xs"></i> Register</h2>
            </div>
            <div class="panel-body">
                <form action="<?= base_url('auth/register'); ?>" method="post">
                    <div class="form-group mb-lg">
                        <div class="clearfix">
                            <label class="pull-left">Name</label>
                        </div>
                        <div class="input-group input-group-icon">
                            <input name="name" id="name" type="text" class="form-control input-lg" value="<?= set_value('name'); ?>" />
                            <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                            <span class="input-group-addon">
                                <span class="icon icon-lg">
                                    <i class="fa fa-user"></i>
                                </span>
                            </span>
                        </div>
                    </div>

                    <div class="form-group mb-lg">
                        <div class="clearfix">
                            <label class="pull-left">E-mail Address</label>
                        </div>
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

                    <div class="form-group mb-none">
                        <div class="row">
                            <div class="col-sm-6 mb-lg">
                                <div class="clearfix">
                                    <label class="pull-left">Password</label>
                                </div>
                                <div class="input-group input-group-icon">
                                    <input name="password1" id="password1" type="password" class="form-control input-lg" />
                                    <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                                    <span class="input-group-addon">
                                        <span class="icon icon-lg">
                                            <i class="fa fa-lock"></i>
                                        </span>
                                    </span>
                                </div>
                            </div>
                            <div class="col-sm-6 mb-lg">
                                <div class="clearfix">
                                    <label class="pull-left">Password Confirmation</label>
                                </div>
                                <div class="input-group input-group-icon">
                                    <input name="password2" id="password2" type="password" class="form-control input-lg" />
                                    <span class="input-group-addon">
                                        <span class="icon icon-lg">
                                            <i class="fa fa-unlock-alt"></i>
                                        </span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <span class="mt-lg mb-lg line-thru text-center text-uppercase">
                        <span>
                            <button type="submit" class="btn btn-primary hidden-xs">Register</button>
                        </span>
                    </span>

                    <p class="text-center">Already have an account? <a href="<?= base_url('auth') ?>">Log In!</a>

                </form>
            </div>
        </div>

        <p class="text-center text-muted mt-md mb-md">&copy; Copyright 2018. All rights reserved.</p>
    </div>
</section>
<!-- end: page -->