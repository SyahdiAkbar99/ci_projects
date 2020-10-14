<div class="row">
    <div class="col-lg-7">
        <div class="p-5">
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Tambah User</h1></div>
    <form class="user" action="<?php echo base_url().'MedilabC/proses_tambah';?>" method="post" enctype="multipart/form-data">
        <div class="form-group">
             <input type="text" class="form-control form-control-user" id="nama" name="nama" placeholder="Nama untuk Visi & Misi Anda..." require>
        </div>
        <div class="form-group">
            <input type="file" class="form-control form-controluser" id="photo" name="photo" require>
        </div>
        <div class="form-group">
        <textarea name="deskripsi" id="desc" cols="65" rows="10"></textarea>    
        </div>
                <input type="submit" class="btn btn-success btn-icon-split" name="submit" value="Tambah">
            </form>
            <hr>
            <div class="text-center">
                <a class="small" href="<?php echo base_url('MedilabC/intoCrud')?>">Kembali</a>
            </div>
        </div>
    </div>
</div>