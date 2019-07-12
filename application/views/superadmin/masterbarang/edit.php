<section class="body">

    <!-- start: header -->
    <header class="header">
        <div class="logo-container">
            <a href="../" class="logo">
                <img src="<?php echo base_url(); ?>assets/images/logo.png" height="35" alt="Porto Admin" />
            </a>
            <div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
                <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
            </div>
        </div>

        <!-- start: search & user box -->
        <div class="header-right">
            <span class="separator"></span>

            <div id="userbox" class="userbox">
                <a href="#" data-toggle="dropdown">
                    <figure class="profile-picture">
                        <img src="<?= base_url('assets/images/') . $user['image']; ?>" class="img-circle" />
                    </figure>
                    <div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@okler.com">
                        <span class="name"><?= $user['name'] ?></span>
                        <span class="role">administrator</span>
                    </div>

                    <i class="fa custom-caret"></i>
                </a>

                <div class="dropdown-menu">
                    <ul class="list-unstyled">
                        <li class="divider"></li>
                        <li>
                            <a role="menuitem" tabindex="-1" href="pages-user-profile.html"><i class="fa fa-user"></i> My Profile</a>
                        </li>
                        <li>
                            <a role="menuitem" tabindex="-1" href="<?php echo site_url() . '/LoginController' ?>"><i class="fa fa-power-off"></i> Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- end: search & user box -->
    </header>
    <!-- end: header -->

    <div class="inner-wrapper">
        <!-- start: sidebar -->
        <aside id="sidebar-left" class="sidebar-left">

            <div class="sidebar-header">
                <div class="sidebar-title">
                    <span style="color: white">Navigation</span>
                </div>
                <div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
                    <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
                </div>
            </div>

            <div class="nano">
                <div class="nano-content">
                    <nav id="menu" class="nav-main" role="navigation">
                        <ul class="nav nav-main">
                            <li>
                                <a href="<?php echo site_url() . 'DashboardController' ?>">
                                    <i class="fa fa-bar-chart-o" aria-hidden="true"></i>
                                    <span>Dashboard</span>
                                </a>
                            </li>
                            <li class="nav-active">
                                <a href="<?php echo base_url() . '/MasterBarangController' ?>">
                                    <i class="fa fa-cube" aria-hidden="true"></i>
                                    <span>Master Barang</span>
                                </a>
                            </li>
                            <li class="nav-parent">
                                <a>
                                    <i class="fa fa-cubes" aria-hidden="true"></i>
                                    <span>Stock</span>
                                </a>
                                <ul class="nav nav-children">
                                    <li>
                                        <a href="<?php echo base_url() . '/StockInController' ?>">
                                            Stock In
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<php echo base_url().'/StockOutController' ?>">
                                            Stock Out
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>

                    <hr class="separator" />
                </div>

            </div>

        </aside>
        <!-- end: sidebar -->

        <section role="main" class="content-body">
            <header class="page-header">
                <h2>Master Barang</h2>

                <div class="right-wrapper pull-right" style="padding-right: 3%;">
                    <ol class="breadcrumbs">
                        <li>
                            <a href="<?php echo site_url() . '/DashboardController' ?>">
                                <i class="fa fa-home"></i>
                            </a>
                        </li>
                        <li><span>Master Barang</span></li>
                        <li><span>Edit</span></li>
                    </ol>
                </div>
            </header>

            <!-- start: page -->
            <div class="row">
                <?php if ($this->session->flashdata('success')) : ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $this->session->flashdata('success'); ?>
                    </div>
                <?php endif; ?>
                <div class="col-md-6">
                    <section class="panel">
                        <header class="panel-heading">
                            <div class="panel-actions">
                                <a href="#" class="fa fa-caret-down"></a>
                            </div>

                            <h2 class="panel-title"><b>FORM ITEM</b></h2>
                        </header>
                        <div class="panel-body">
                            <form action="" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="id" value="<?= $mbarang['id']; ?>">
                                <div class="row form-group">
                                    <div class="col-sm-6">
                                        <label>Kode Barang</label>
                                        <input type="text" name="kode_barang" id="kode_barang" placeholder="ex : PSU" value="<?= $mbarang['kode_barang']; ?>" maxlgth="8en" class="form-control">
                                        <?= form_error('kode_barang', '<small class="text-danger pl-3">', '</small>') ?>
                                    </div>

                                    <div class="mb-md hidden-lg hidden-xl"></div>

                                    <div class="col-sm-6">
                                        <label>Nama Barang</label>
                                        <input type="text" name="nama_barang" id="nama_barang" placeholder="ex : Power Supply" value="<?= $mbarang['nama_barang']; ?>" class="form-control">
                                        <?= form_error('nama_barang', '<small class="text-danger pl-3">', '</small>') ?>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-sm-6">
                                        <label for="kategori">
                                            Kategori
                                        </label>
                                        <select data-plugin-selectTwo class="form-control populate" id="kategori" name="kategori">
                                            <?php foreach ($kategori as $a) : ?>
                                                <?php if ($a == $mbarang['kategori']) : ?>
                                                    <option value="<?= $a; ?>" selected><?= $a; ?></option>
                                                <?php else : ?>
                                                    <option value="<?= $a; ?>"><?= $a; ?></option>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="satuan">
                                            Satuan
                                        </label>
                                        <select data-plugin-selectTwo class="form-control populate" id="satuan" name="satuan">
                                            <?php foreach ($satuan as $b) : ?>
                                                <?php if ($b == $mbarang['satuan']) : ?>
                                                    <option value="<?= $b; ?>" selected><?= $b; ?></option>
                                                <?php else : ?>
                                                    <option value="<?= $b; ?>"><?= $b; ?></option>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <label>Nomor Serial</label>
                                        <input type="text" name="nomor_serial" id="nomor_serial" placeholder="ex : 456CBA123" value="<?= $mbarang['nomor_serial']; ?>" class="form-control" onkeyup="this.value = this.value.toUpperCase();">
                                        <?= form_error('nomor_serial', '<small class="text-danger pl-3">', '</small>') ?>
                                    </div>
                                </div>
                                <br />
                                <div class="row">
                                    <div class="col-sm-12">
                                        <label>Nomor Produk</label>
                                        <input type="text" name="nomor_produk" id="nomor_produk" placeholder="ex : AZS0091AS" value="<?= $mbarang['nomor_produk']; ?>" class="form-control" onkeyup="this.value = this.value.toUpperCase();">
                                        <?= form_error('nomor_produk', '<small class="text-danger pl-3">', '</small>') ?>
                                    </div>
                                </div>
                                <br />
                                <div class="row form-group">
                                    <div class="col-sm-5">
                                        <label>Batas Peringatan</label>
                                        <input type="text" name="batas" id="batas" placeholder="Ex : Qty stock <= 50" value="<?= $mbarang['batas']; ?>" class="form-control">
                                        <?= form_error('batas', '<small class="text-danger pl-3">', '</small>') ?>
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="kondisi_barang">
                                            Kondisi
                                        </label>
                                        <select data-plugin-selectTwo class="form-control" id="kondisi_barang" name="kondisi_barang">
                                            <?php foreach ($kondisi_barang as $c) : ?>
                                                <?php if ($c == $mbarang['kondisi_barang']) : ?>
                                                    <option value="<?= $c; ?>" selected><?= $c; ?></option>
                                                <?php else : ?>
                                                    <option value="<?= $c; ?>"><?= $c; ?></option>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <br />
                                <div class="row">
                                    <div class="col-sm-12">
                                        <label>Keterangan Barang</label>
                                        <textarea name="keterangan_barang" id="keterangan_barang" rows="2" class="form-control" placeholder="Keterangan Barang" required></textarea>
                                    </div>
                                </div>
                                <br />
                                <div class="form-group">
                                    <label>File Upload</label>
                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                                        <div class="input-append">
                                            <div class="uneditable-input">
                                                <!-- <i class="fa fa-file fileupload-exists"></i> -->
                                                <span class="fileupload-preview"></span>
                                            </div>
                                            <span class="btn btn-default btn-file">
                                                <span class="fileupload-exists">Change</span>
                                                <span class="fileupload-new">Select file</span>
                                                <input type="file" name="photo" />
                                            </span>
                                            <a href="#" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Remove</a>
                                        </div>
                                    </div>
                                </div>


                                <br />
                                <button type="submit" name="btn" class="btn btn-primary">Edit</button>
                                <a href="<?php echo site_url('masterbarang/index') ?>" class="btn btn-warning">Cancel</a>
                            </form>
                        </div>
                    </section>
                </div>
            </div>
            <!-- end: page -->
        </section>
    </div>


</section>