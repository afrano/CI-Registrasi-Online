<div><center><h1>DATA USER</h1></center></div>
<div class='card'><br>
	<table class='table table-striped'>
		<thead>
			<tr>
				<th>NO</th>
				<th>Email</th>
				<th>Nama</th>
				<th>Alamat</th>
				<th>Status</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			if($data_user->num_rows()>0){
				foreach($data_user->result() as $row){
					if($row->status==0){
	$link="<a  style='color:red'	href='".site_url("user/aktif/$row->id_user")."' > Belum</a>";
					}else{
	$link="<a style='color:blue' href='".site_url("user/aktif/$row->id_user")."' >Disetujui</a>";
					}
					echo "
			<tr>
				<td>$row->id_user</td>
				<td>$row->email</td>
				<td>$row->username</td>
				<td>$row->alamat</td>
				<td >
                                
                                	<a class='glyphicon glyphicon-pencil' 
					href='".site_url("user/ubah/$row->id_user")."' >	</a>
					
					<a class='glyphicon glyphicon-trash' onclick='return confirm(\"Data Akan Di Hapus\")'
					href='".site_url("user/hapus/$row->id_user")."' >	</a>
					
					$link
				
				</td>
			</tr>
					";
				}
			}
			?>
		</tbody>
	</table>
</div>