<!DOCTYPE html>
<html lang="en">

    <head>
        
        <meta charset="UTF-8">
        <meta name="author" content="Copyright ©️ 2022 Jofinson">

        <title>Penumpang</title>

        <!-- Bootstrap v5 -->

        <link rel="stylesheet" type="text/css" href="<?= base_url('../css/bootstrap.min.css') ?>">

        <script src="<?= base_url('../js/bootstrap.bundle.min.js') ?>"></script>

    </head>

    <body>

        <!-- Navigation -->

        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">

            <div class="container-fluid">

                <a href="<?=base_url('/Home/user') ?>" class="navbar-brand">
            
                    <img src="<?= base_url('../img/th.jpg') ?>" alt="Avatar Logo" style="width: 90px;" class="rounded-pill">

                </a>

                <ul class="navbar-nav">

                    <li class="nav-item">
                        
                        <a href="<?= base_url('/Home/penumpang') ?>" class="nav-link"> Penumpang </a>

                    </li>

                </ul>

                <ul class="navbar-nav">

                    <li class="nav-item">
                        
                        <a href="<?= base_url('/Home/maskapai') ?>" class="nav-link"> Maskapai </a>

                    </li>

                </ul>

                <ul class="navbar-nav">

                    <li class="nav-item">
                        
                        <a href="<?= base_url('/Home/maskapai') ?>" class="nav-link"> Jadwal </a>

                    </li>

                </ul>

                <ul class="navbar-nav">

                    <li class="nav-item">
                        
                        <a href="<?= base_url('/Home/maskapai') ?>" class="nav-link"> Kota Bandara </a>

                    </li>

                </ul>

                <ul class="navbar-nav">

                    <li class="nav-item">
                        
                        <a href="<?= base_url('/Home/maskapai') ?>" class="nav-link"> Pemesan </a>

                    </li>

                </ul>

                <ul class="navbar-nav">

                    <li class="nav-item">
                        
                        <a href="<?= base_url('/Home/maskapai') ?>" class="nav-link"> Boarding </a>

                    </li>

                </ul>

            </div>

        </nav>


        <!-- Table -->

        <div class="container mt-3">

            <table class="table table-bordered table-dark">
                
                <a href="<?= base_url('/Home/add_penumpang') ?>">
            
                    <button type="button" class="btn btn-success"> ➕ Insert </button>

                </a>

                <thead>

                    <tr>

                        <th>No.</th>
                        <th>nama penumpang</th>
                        <th>nik</th>
                        <th>jenis kelamin</th>
                        <th>tanggal lahir</th>
                        <th>tempat lahir</th>
                        <th>nomor handphone</th>
                        <th>🔧 action</th>

                    </tr>

                </thead>

                <tbody>

                    <?php

                        $no = 1;

                        foreach($penumpang as $data) {

                    ?>

                                <tr>

                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $data -> nama_penumpang ?></td>
                                    <td><?php echo $data -> nik ?></td>
                                    <td><?php echo $data -> jenis_kelamin ?></td>
                                    <td><?php echo $data -> tanggal_lahir ?></td>
                                    <td><?php echo $data -> tempat_lahir ?></td>
                                    <td><?php echo $data -> nomor_handphone ?></td>

                                    <td>

                                        <a href="<?= base_url('/Home/edit_penumpang'.$data -> user) ?>">
                                    
                                            <button type="button" class="btn btn-warning"> 🔧 Edit </button>

                                        </a>

                                        <a href="<?= base_url('/Home/delete_penumpang'.$data -> user) ?>">
                                    
                                            <button type="button" class="btn btn-danger"> 🗑️ Delete </button>

                                        </a>

                                    </td>

                                </tr>
                    
                    <?php

                        }

                    ?>

                </tbody>

            </table>

        </div>
    
    
        <!-- Style -->

        <style>

            body {

                background-color: #333;

            }

        </style>

    </body>

</html>