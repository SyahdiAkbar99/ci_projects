<?php
  $getUser = $this->session->userdata('session_user');
  $getGrup = $this->session->userdata('session_grup');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Medilab Website</title>

   <!-- Custom fonts for this template-->
    <link href="<?php echo base_url('assets/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">
    </head>

    <body>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">DataTables User</h6></div>
                <div class="card-body"><div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr><th>No</th>
                                <th>Id</th>
                                <th>Nama</th>
                                <th>Photo</th>
                                <th>Deskripsi</th>
                                <th>Aksi</th></tr>
                        </thead>
                        <tbody>
                            <?php $no=1;
                                    foreach($user as $baris){ 
                            ?>
                            <tr><td><?php echo $no++ ?></td>
                                <td><?php echo $baris->id_v_m ?></td>
                                <td><?php echo $baris->nama_v_m ?></td>
                                <td><?php echo $baris->photo_v_m ?></td>
                                <td><?php echo $baris->deskripsi_v_m?></td>
                                <td>
                                    <?php
                                        if($getGrup==1){
                                            // echo '<a href="'.base_url('MedilabC/edit_vm'.$baris->id_v_m).'" class="fa fa-edit">&nbsp;</a>';
                                            // echo " ";
                                            echo '<a href="'.base_url('MedilabC/hapus_vm/'.$baris->id_v_m).'" class="fa fa-times"> Delete</a>';
                                        }
                                    ?>
                                    </td></tr>

                                    <?php } ?>
                        </tbody>
                    </table>
                </div>
                <a href="<?php echo base_url('MedilabC/tambah_vm')?>" class="fa fa-plus">
                    Tambah Data
                </a>
            </div>
            <?php
            if($this->input->get('delete')==1){
                echo "<script>
                    alert('Hapus Berhasil');
                </script>";
            }
            else if($this->input->get('delete')==2){
                echo "<script>
                    alert('Hapus Gagal');
                </script>";
            }
            ?>
             <?php
            if($this->input->get('update')==1){
                echo "<script>
                    alert('Update Berhasil');
                </script>";
            }
            else if($this->input->get('update')==2){
                echo "<script>
                    alert('Update Gagal');
                </script>";
            }
			?>
        </div>
    </body>
</html>