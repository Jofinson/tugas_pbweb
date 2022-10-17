<!DOCTYPE html>
<html lang="en">

    <head>
        
        <meta charset="UTF-8">
        <meta name="author" content="Copyright ©️ 2022 Jofinson">

        <title>User</title>

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

                <thead>

                    <tr>

                        <th>No.</th>
                        <th>username</th>
                        <th>password</th>
                        <th>e-mail</th>
                        <th>level</th>

                    </tr>

                </thead>

                <tbody>

                    <?php

                        $no = 1;

                        foreach($user as $data) {

                    ?>

                                <tr>

                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $data -> username ?></td>
                                    <td><?php echo $data -> password ?></td>
                                    <td><?php echo $data -> email ?></td>
                                    <td><?php echo $data -> nama_level ?></td>

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