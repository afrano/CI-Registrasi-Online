<?php
if (validation_errors()) {
    echo "<div class='alert alert-danger'>" . validation_errors() . "</div>";
}
?>
<form class="form-group" action="<?= site_url($this->uri->uri_string()) ?>" method="POST">
    <div class="form-group">
        <label>Email</label>
        <input class="form-control" value="<?= $row->email ?>" name="email" required="true" />
    </div>
     <div class="form-group">
        <label>Password</label>
        <input class="form-control" name="password" value="<?= $row->password ?>" required="true"/>
    </div>
    <div class="form-group">
        <label>Nama User</label>
        <input class="form-control" name="username" value="<?= $row->username ?>" required="true"/>
    </div>
     <div class="form-group">
        <label>Alamat</label>
        <input class="form-control" name="alamat" value="<?= $row->alamat ?>" required="true"/>
    </div>
    <div class="form-group">
        <label>Gender</label>
        <select name='gender' class="form-control" required="true">
            <option value="">gender</option>
            <?php
            $query = $this->db->get('gender');
            foreach ($query->result() as $row1) {
                if ($row1->id_akses == $row->hak_akses) {
                    echo "<option selected value='$row1->id_gender'>$row1->gender</option>";
                } else {
                    echo "<option value='$row1->id_gender'>$row1->gender</option>";
                }
            }
            ?>
        </select>
    </div>
    <div class="form-group">
        <label>Status</label>
        <select name='status' class="form-control" required="true">
            <option value="">Pilih Status User</option>
            <option value="1" <?php if($row->status==1)echo "selected"?> >Disetujui</option>
            <option value="0" <?php if($row->status==0)echo "selected"?> >Belum Disetujui</option>
        </select>
    </div>
    <div class='form-group'>
        <button class="btn btn-primary">Simpan</button>
    </div>
</form>