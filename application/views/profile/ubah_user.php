<?php
if (validation_errors()) {
    echo "<div class='alert alert-danger'>" . validation_errors() . "</div>";
}
if ($this->session->userdata('pesan_error')) {
    echo "<div class='alert alert-danger'>" . $this->session->userdata('pesan_error') . "</div>";
}
if ($this->session->userdata('pesan_sukses')) {
    echo "<div class='alert alert-success'>" . $this->session->userdata('pesan_sukses') . "</div>";
}
?>
<form class="form-group" action="<?= site_url($this->uri->uri_string()) ?>" method="POST">
    <div class="form-group">
        <label>Email</label>
        <input type='hidden' class="form-control" value="<?= $row->email ?>" name="id_user" required="true" />
        <input class="form-control" value="<?= $row->email ?>" name="email" required="true" />
    </div>
    <div class="form-group">
        <label>Nama </label>
        <input class="form-control" name="username" value="<?= $row->username ?>" required="true"/>
    </div>
    <div class="form-group">
        <label>Password</label>
        <input class="form-control" value="" name="password"  />
    </div>
    <div class="form-group">
        <label>Alamat</label>
        <input type='hidden' class="form-control" value="<?= $row->id_user ?>" name="id_user" required="true" />
        <input class="form-control" value="<?= $row->alamat ?>" name="alamat" required="true" />
    </div>
   
   
    <div class="form-group">
        <label>Gender</label>
        <select name='gender' class="form-control" required="true">
            <?php
            $query = $this->db->get('gender');
            foreach ($query->result() as $row1) {
                if ($row1->id_gender == $row->gender) {
                    echo "<option selected value='$row1->id_gender'>$row1->gender</option>";
                } else {
                    echo "<option value='$row1->id_gender'>$row1->gender</option>";
                }
             }
            ?>
        </select>
    </div>
    <div class='form-group'>
        <button class="btn btn-primary">Simpan</button>
    </div>
</form>