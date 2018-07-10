<div class="box-body table-responsive">
<?php 
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=exceldata.xls");
header("Pragma: no-cache");
header("Expires: 0");
?>
      <table id="example1" class="table table-bordered table-striped ">
        <thead>
        <tr>
          <th>Tanggal Aktivasi</th>
          <th>Idpel</th>
          <th>Alasan Rusak</th>
          <th>Nomor Meter Rusak</th>
          <th>Nomor Meter Baru</th>
        </tr>
        </thead>
        <tbody>
          <?php foreach($all_data as $row): ?>
          <tr>
            <td><?= $row['tgl_aktivasi']; ?></td>
            <td><?= $row['id_pelanggan']; ?></td>
            <td>
                <span class="">
                    
                    <?php
                    switch ($row['alasan_rusak']) {
                    case 0:
                        echo 'Gak Jelas';
                        break;
                    case 1:
                        echo 'Token tidak dapat dimasukkan';
                        break;                  
                    case 2:
                        echo "Sisa kredit pada kWh meter hilang/bertambah saat listrik padam";
                        break;                
                    case 3:
                        echo "Kerusakan pada keypad";
                        break;
                    case 4:
                        echo "LCD mati/rusak";
                        break;
                    case 5:
                        echo "kWh Meter rusak (akibat petir/terbakar)";
                        break;
                    case 6:
                        echo "Sisa kredit tidak bertambah saat kredit baru dimasukkan";
                        break;
                    case 7:
                        echo "Baut tutup terminal patah";
                        break;
                    case 8:
                        echo "Tegangan dibawah 180V tidak bisa hidup";
                        break;
                    case 9:
                        echo "Micro switch rusak / tidak keluar tegangan";
                        break;
                    case 10:
                        echo "i is less than 3 but not negative";
                        break;
                    case 11:
                        echo "ID meter pada display dan nameplate tidak sama";
                        break;
                    case 12:
                        echo "Display overload tanpa beban";
                        break;
                    case 13:
                        echo "Terminal kWh meter rusak";
                        break;
                    case 14:
                        echo "Meter periksa/tutup dibuka lampu tetap nyala";
                        break;
                    case 15:
                        echo "Timbul rusak";
                        break;
                    case 16:
                        echo "kWh minus";
                        break;
                    case 17:
                        echo "kWh bertambah";
                        break;
                    case 18:
                        echo "Lain-lain";
                        break;
                    }
                    ?>

                <span>
            </td>
            <td><?= $row['no_meter_rusak']; ?></td>
            <td><?= $row['no_meter_baru']; ?></td>
          </tr>
          <?php endforeach; ?>
        </tbody>
       
      </table>
    </div>
    <!-- /.box-body -->
<!--  </div>
   /.box 
</section>  -->

<!--menampilkan waktu operasi-->
<!--Page rendered in-->
<?php // echo $this->benchmark->elapsed_time();?>
 <!--seconds-->

<!-- DataTables -->
<!--<script src="<?= base_url() ?>public/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>public/plugins/datatables/dataTables.bootstrap.min.js"></script>
<script>
  $(function () {
    $("#example1").DataTable(
            {
                "order":[0,"asc"],
            }
                );
  });
</script> 
<script>
$("#view_users").addClass('active');
</script>        -->
