<?php
if (validation_errors()) {
    echo "<div class='alert alert-danger'>" . validation_errors() . "</div>";
}
?>
<center><h1>Form Registrasi </h1></center>
<form class="form-group" action="<?= site_url($this->uri->uri_string()) ?>" method="POST">

    <div class="form-group">
        <label>Masukan Email</label>
        <input class="form-control" name="email" required="true" />
    </div>
    <div class="form-group">
        <label>Masukan Password</label>
        <input class="form-control" name="password" required="true" />
    </div>
    <div class="form-group">
        <label>Username </label>
        <input class="form-control" name="username" required="true"/>
    </div>
    <div class="form-group">
        <label>Jenis Kelamin</label>
        <select name='gender' class="form-control" required="true">
            <option value="">Gender</option>
            <?php
            $query=$this->db->get('gender'); //ubah jenis kelamin dsi
            foreach($query->result() as $row){
                echo "<option value='$row->id_gender'>$row->gender</option>";
            }
            ?>
        </select>
    </div>
    <div class="form-group">
        <label>Alamat </label>
        <input class="form-control" name="alamat" required="true"/>
    </div>
    <div class='form-group'>
        <button class="btn btn-primary">Simpan</button>
    </div>
</form>