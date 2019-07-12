<section class="body">

    <!-- start: header -->
    <header class="header">
        <i class="fa fa-share-alt-square" style="margin-left: 2%; font-size: 45px; color: blue"> IT IJSM</i>
        <!-- start: search & user box -->
        <div class="header-right" style="padding-right: 2%;">

            <span class="separator"></span>

            <div id="userbox" class="userbox" style="margin-right: -2%;">
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
                            <a role="menuitem" tabindex="-1" href="<?= site_url('superadmin/profile'); ?>"><i class="fa fa-user"></i> My Profile</a>
                        </li>
                        <li>
                            <a role="menuitem" tabindex="-1" href="<?= base_url('auth/logout'); ?>"><i class="fa fa-power-off"></i> logout</a>
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
                                <a href="<?= base_url('superadmin'); ?>">
                                    <i class="fa fa-home" aria-hidden="true"></i>
                                    <span>Dashboard</span>
                                </a>
                            </li>
                            <li class="nav-active">
                                <a href="<?= site_url('masterbarang/index'); ?>">
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

                    <div class="sidebar-header">
                        <div class="sidebar-title">
                            <span style="color: white">User</span>
                        </div>
                    </div>
                    <nav id="menu" class="nav-main" role="navigation">
                        <ul class="nav nav-main">
                            <li>
                                <a href="#">
                                    <i class="fa fa-child" aria-hidden="true"></i>
                                    <span>Managament User</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
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
                    </ol>
                </div>
            </header>

            <div class="row">

            </div>

            <!-- start: page -->
            <div class="row">
                <div class="col-xs-12">
                    <section class="panel">
                        <header class="panel-heading">
                            <div class="panel-actions">
                                <a href="#" class="fa fa-caret-down"></a>
                            </div>

                            <h2 class="panel-title"><b>MASTER BARANG</b></h2>
                        </header>
                        <div class="panel-body">
                            <?= $this->session->flashdata('message'); ?>
                            <table class="table table-bordered table-striped mb-none" id="datatable-tabletools">
                                <p class="m-none">
                                    <a href="<?php echo site_url('masterbarang/create'); ?>" type="button" class="mb-xs mt-xs mr-xs btn btn-sm btn-primary">
                                        <i class="fa fa-plus"></i>&nbsp;
                                        Add Master
                                    </a>
                                    <button type="button" class="mb-xs mt-xs mr-xs btn btn-sm btn-danger">
                                        <i class="fa fa-minus"></i>&nbsp;
                                        Delete Selected
                                    </button>
                                    <a href="#modalForm" class="modal-with-form btn btn-sm btn-warning">
                                        <i class="fa fa-tag"></i>&nbsp;
                                        Kategori
                                    </a>
                                    <!-- <button type="button" class="mb-xs mt-xs mr-xs btn btn-sm btn-default">
                                        <i class="fa fa-print"></i>&nbsp;
                                        Print
                                    </button> -->
                                </p>
                                <br />
                                <thead>
                                    <tr>
                                        <th>action</th>
                                        <th>No</th>
                                        <th>Kode Barang</th>
                                        <th>Nama Barang</th>
                                        <th>Kategori</th>
                                        <th>Kondisi Barang</th>
                                        <th>Nomor Serial</th>
                                        <th>Nomor Produk</th>
                                        <th>Keterangan Barang</th>
                                        <th>Batas</th>
                                        <th>Satuan</th>
                                        <th>Photo</th>
                                        <th>action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($mbarang as $barang) {
                                        ?>
                                        <tr>
                                            <td>
                                                <div class="checkbox-custom chekbox-primary">
                                                    <input id="checkall" type="checkbox" />
                                                    <label for="for-project"></label>
                                                </div>
                                            </td>
                                            <td><?= $no++; ?></td>
                                            <td><?= $barang['kode_barang']; ?></td>
                                            <td><?= $barang['nama_barang'] ?></td>
                                            <td><?= $barang['kategori'] ?></td>
                                            <td><?= $barang['kondisi_barang'] ?></td>
                                            <td><?= $barang['nomor_serial'] ?></td>
                                            <td><?= $barang['nomor_produk'] ?></td>
                                            <td><?= $barang['keterangan_barang'] ?></td>
                                            <td><?= $barang['batas'] ?></td>
                                            <td><?= $barang['satuan'] ?></td>
                                            <td><img src="<?= base_url('./image/') . $barang['photo']; ?>" width="75px" height="75px" /></td>
                                            <td>
                                                <a href="<?= base_url(''); ?>masterbarang/edit/<?= $barang['id']; ?>">
                                                    <i class="fa fa-edit"></i>
                                                </a> |
                                                <a href="<?= base_url(''); ?>masterbarang/delete/<?= $barang['id']; ?>" onclick="return confirm('Sure want delete this data?')">
                                                    <i class="fa fa-trash-o"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </section>
                </div>
            </div>

            <div class="row">

            </div>
            <div class="row">

            </div>
            <!-- end: page -->
            <!-- Modal Form -->
            <div id="modalForm" class="modal-block modal-block-primary mfp-hide">
                <section class="panel">
                    <header class="panel-heading">
                        <h2 class="panel-title">Kategori</h2>
                    </header>
                    <div class="panel-body">
                        <form action="" method="post">
                            <!-- <input type="text" value="1" hidden> -->
                            <label>Kategori</label>
                            <input type="text" name="nama_kategori" id="nama_kategori" placeholder="Masukan kategori" class="form-control" onkeyup="this.value = this.value.toUpperCase();">
                            <?= form_error('nama_kategori', '<small class="text-danger pl-3">', '</small>') ?>
                            <br />
                            <button type="submit" name="btn" class="btn-sm btn btn-primary">Add</button>
                        </form>
                        <br />
                        <table class="table table-bordered table-striped mb-none" id="datatable-default">
                            <br />
                            <thead>
                                <tr>
                                    <th>Nama Kategori</th>
                                    <th>action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($kategori as $a) {
                                    ?>
                                    <tr>
                                        <td><?= $a['nama_kategori'] ?></td>
                                        <td>
                                            <a href="<?= base_url(''); ?>kategori/edit/<?= $a['id']; ?>">
                                                <i class="fa fa-edit"></i>
                                            </a> |
                                            <a href="<?= base_url(''); ?>kategori/delete/<?= $a['id']; ?>" onclick="return confirm('Sure want delete this data?')">
                                                <i class="fa fa-trash-o"></i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <footer class="panel-footer">
                        <div class="row">
                            <div class="col-md-12 text-right">
                                <button class="btn btn-default modal-dismiss">Cancel</button>
                            </div>
                        </div>
                    </footer>
                </section>
            </div>
        </section>
    </div>
</section>