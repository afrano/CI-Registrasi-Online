<?php 
if(validation_errors()){
    echo "<div class='alert alert-danger'>". validation_errors()."</div>";
}
?>
<form class="form-group" action="<?= site_url($this->uri->uri_string())?>" method="POST">
    <div class="form-group">
        <label>Email</label>
        <input class="form-control" name="email" required="true" />
    </div>
    <div class="form-group">
        <label>password</label>
        <input class="form-control" name="password" required="true" />
    </div>
    <div class="form-group">
        <label>Nama User</label>
        <input class="form-control" name="username" required="true"/>
    </div>
     <div class="form-group">
        <label>alamat </label>
        <input class="form-control" name="alamat" required="true"/>
    </div>
    <div class="form-group">
        <label>Gender</label>
        <select name='gender' class="form-control" required="true">
            <option value="">Pilih Jenis Kelamin</option>
            <?php
            $query=$this->db->get('gender');
            foreach($query->result() as $row){
                echo "<option value='$row->id_gender'>$row->gender</option>";
            }
            ?>
        </select>
    </div>
    <div class="form-group">
        <label>Status</label>
        <select name='status' class="form-control" required="true">
            <option value="">Pilih Status User</option>
            <option value="1">Disetujui</option>
            <option value="0">Belum Disetujui</option>
        </select>
    </div>
    <div class='form-group'>
        <button class="btn btn-primary">Simpan</button>
    </div>
</form>