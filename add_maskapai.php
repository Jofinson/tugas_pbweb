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


        <!-- Forms -->

        <div class="container mt-3">

            <form action="<?= base_url('Home/aksi_add_maskapai') ?>" method="post">
        

                <div class="mb-3 text-white">

                    <label for="kode_maskapai" class="form-label"> Kode_maskapai </label>

                    <input type="text" class="form-control" id="kodemaskapai" placeholder="Enter your kode" name="kodemaskapai">

                </div>

              
                <div class="mb-3 text-white">

                    <label for="id_maskapai" class="form-label"> id_maskapai </label>

                    <input type="password" class="form-control" id="id_maskapai" placeholder="Enter your password" name="idmaskapai">

                </div>


                <div class="mb-3 text-white">

                    <label for="nama" class="form-label"> nama_maskapai</label>

                    <input type="text" class="form-control" id="nama" placeholder="namamaskapai" name="nama">

                </div>

                        <?php

                            foreach($add_maskapai as $data) {

                        ?>

                            <option value="<?= $data -> id_maskapai ?>"> <?php echo $data -> nama_maskapai ?> </option>

                        <?php

                            }

                        ?>

                    </select>

                </div>

                
                <!-- Submit button -->

                <div class="mb-3">
                        
                    <button type="submit" class="btn btn-success"> Submit </button>

                </div>

            </form>

        </div>


        <!-- Styling -->

        <style>

            body {

                background-color: #333;

            }

        </style>
        
    </body>

</html>