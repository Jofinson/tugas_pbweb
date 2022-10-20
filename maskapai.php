<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="author" content="Copyright ©️ 2022 Jofinson">

    <title>Maskapai</title>

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

                    <a href="<?= base_url('/Home/user') ?>" class="nav-link"> User </a>

                </li>

            </ul>

        </div>

    </nav>


    <!-- Table -->

    <div class="container mt-3">

        <table class="table table-bordered table-dark">

            <a href="<?= base_url('/Home/add_maskapai') ?>">

                <button type="button" class="btn btn-success"> ➕ Insert </button>

            </a>

            <thead>

                <tr>

                    <th>No.</th>
                    <th>kode maskapai</th>
                    <th>id maskapai</th>
                    <th>nama maskapai</th>
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
                        <td><?php echo $data -> kode_maskapai ?></td>
                        <td><?php echo $data -> id_maskapai ?></td>
                        <td><?php echo $data -> nama_maskapai ?></td>
                        <td><?php echo $data -> tanggal_lahir ?></td>
        
                        <td>

                            <a href="<?= base_url('/Home/edit_maskapai/'.$data->user) ?>">

                                <button type="button" class="btn btn-warning"> 🔧 Edit </button>

                            </a>

                            <a href="<?= base_url('/Home/delete_maskapai/'.$data->user) ?>">

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