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

  <!-- Navigation bar -->

  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">

    <div class="container-fluid">

        <!-- Home navigator with image -->

        <a href="<?=base_url('/Home/user') ?>" class="navbar-brand">

           <img src="<?= base_url('../img/th.jpg') ?>" alt="Avatar Logo" style="width: 90px;" class="rounded-pill">

       </a>

       <ul class="navbar-nav">

        <li class="nav-item">

            <a class="nav-link" href="<?= base_url('/Home/penumpang') ?>"> Penumpang </a>

        </li>

    </ul>

</div>

</nav>

<div class="container mt-3">

    <form action="<?= base_url("Home/aksi_edit_penumpang")?>" method="post">

        <!-- ID -->

        <input type="hidden" name="id" value="<?php echo $user -> id_user ?>">


        <!-- Username -->

        <div class="mb-3 text-white">

            <label for="username" class="form-label"> Username </label>

            <input type="text" class="form-control" id="username" placeholder="Enter your username" name="username" value="<?php echo $user -> username ?>">

        </div>

        <!-- Password  -->

        <div class="mb-3 text-white">

            <label for="password" class="form-label"> Password </label>

            <input type="password" class="form-control" id="password" placeholder="Enter your password" name="password" value="<?php echo $user -> password ?>">

        </div>

        <!-- Email -->

        <div class="mb-3 text-white">

            <label for="email" class="form-label"> E-mail </label>

            <input type="email" class="form-control" id="email" placeholder="example@gmail.com" name="email" value="<?php echo $user -> email ?>">

        </div>

        <div class="mb-3 text-white">

            <label for="user" class="form-label"> User </label>

            <input type="text" class="form-control" id="user" placeholder="Enter a user ID" name="user" value="<?php echo $penumpang -> user ?>">

        </div>


        <!-- Nama penumpang -->

        <div class="mb-3 text-white">

            <label for="nama" class="form-label"> Nama penumpang </label>

            <input type="text" class="form-control" id="nama" placeholder="Enter your nickname" name="nama" value="<?php echo $penumpang -> nama ?>">

        </div>

        <!-- NIK -->

        <div class="mb-3 text-white">

            <label for="nik" class="form-label"> NIK </label>

            <input type="text" class="form-control" id="nik" placeholder="Enter your NIK" name="nik" value="<?php echo $penumpang -> nik ?>">

        </div>

        <!-- Jenis kelamin -->

        <div class="mb-3 text-white">

            <label for="jk" class="form-label"> Jenis kelamin </label>

            <select name="jk" class="form-control">

               <option> Jenis Kelamin </option>
               <option value="L"> Laki - Laki </option>
               <option value="P"> Perempuan </option>

           </select>

       </div>

        <!-- Tanggal lahir -->

        <div class="mb-3 text-white">

            <label for="tl" class="form-label"> Tanggal lahir </label>

            <input type="date" class="form-control" id="tl" placeholder="Enter your birth date" name="tl" value="<?php echo $user -> tanggal ?>">

        </div>

        <!-- Nomor handphone -->

        <div class="mb-3 text-white">

            <label for="nohp" class="form-label"> Nomor handphone </label>

            <input type="text" class="form-control" id="nohp" placeholder="Enter your phone number" name="nohp" value="<?php echo $user -> nohp ?>">

        </div>

        </select>

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