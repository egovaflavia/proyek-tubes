<!DOCTYPE html>

<html lang="id">

<head>

      <meta charset="utf-8">

      <title>Data Pegawai</title>

      <link href="<?php echo base_url().'assets/css/bootstrap.css'?>" rel="stylesheet">

    <link href="<?php echo base_url().'assets/css/jquery.dataTables.min.css'?>" rel="stylesheet">

</head>

<body>

 

<div class="container">

      <h1>Data <small>Pegawai! </small></h1>

      <table class="table table-bordered table-striped" id="mydata">

            <thead>

                  <tr>
                        <td>Nip</td>

                        <td>Nama</td>

                        <td>Jabatan</td>

                        <td>Umur</td>

                        <td>Tanggal Masuk</td>

                        <td>Gaji</td>

                  </tr>

            </thead>

            <tbody>

                 <!--  <?php

                        foreach($data->result_array() as $i):

                              $pegawai_nip=$i['nip'];

                              $pegawai_nama=$i['name'];

                              $pegawai_jabatan=$i['position'];

                              $pegawai_umur=$i['age'];

                              $tanggal_masuk=$i['start_date'];

                              $tanggal_gaji=$i['salary'];

                              

                  ?>

                  <tr>

                        <td><?php echo $pegawai_nip;?> </td>

                        <td><?php echo $pegawai_nama;?> </td>

                        <td><?php echo $pegawai_jabatan;?> </td>

                        <td><?php echo $pegawai_umur;?> </td>

                        <td><?php echo $tanggal_masuk;?> </td>

                        <td><?php echo $pegawai_gaji;?> </td>

                  </tr> -->

                  <?php endforeach;?>

            </tbody>

      </table>

     

</div>

 

<script src="<?php echo base_url().'assets/js/jquery-2.2.4.min.js'?>"> </script>

<script src="<?php echo base_url().'assets/js/bootstrap.js'?>"> </script>

<script src="<?php echo base_url().'assets/js/jquery.dataTables.min.js'?>"> </script>

<script src="<?php echo base_url().'assets/js/moment.js'?>"> </script>

<script>

      $(document).ready(function(){

            $('#mydata').DataTable();

      });

</script>

</body>

</html>