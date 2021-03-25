<?php 

$sql = "SELECT * FROM tb_admin";
$query = mysqli_query($conn,$sql);


?>
<div class="row g-2 justify-content-start justify-content-md-end align-items-center">
							    <div class="col-auto">									
								    <a class="btn app-btn-primary" href="?page=insert"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-upload mr-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd" d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
										<path fill-rule="evenodd" d="M7.646 1.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 2.707V11.5a.5.5 0 0 1-1 0V2.707L5.354 4.854a.5.5 0 1 1-.708-.708l3-3z"/>
										</svg>เพิ่ม Admin</a>
							    </div>	
			            	<hr class="mb-2">
							<h1 class="app-page-title">ตารางผู้ดูแลระบบ</h1>
</div>
<hr class="mb-1">
<div class="row g-4 settings-section">	                
	                <div class="col-12 col-md-12">
		                <div class="app-card app-card-settings shadow-sm p-4">						    
						<table class="table">
										<thead>										
											<tr>
											<th scope="col">Image</th>
											<th scope="col">Username</th>
											<th scope="col">Fisrtname-Lastname</th>
											<th scope="col">Email</th>
											<th scope="col">Tel</th>
											<th scope="col">Status</th>
											<th scope="col">Menu</th>									
											</tr>
										</thead>
										<tbody>
										<?php foreach($query as $data):?>									
											<tr>
											<?php if($data['image']== " "){
											?>
											<td><img src="https://c1.klipartz.com/pngpicture/554/218/sticker-png-circle-silhouette-user-profile-user-interface-black-head-blackandwhite-logo.png" width="100" height="100"></td>
											<td>
												<?=$data['user'] ?>
											</td>
											<td>
												<?=$data['fristname']." ". $data['lastname'] ?>
											</td>
											<td>
												<?=$data['email']?>
											</td>
											<td>
												<?=$data['phone']?>
											</td>
											<td>
												<?=$data['status']?>
											</td>
											<td>
											<a href="" class="btn btn-sm btn-warning">Edit</a><br><br>
											<a href="" class="btn btn-sm btn-danger">Delete</a>
											</td>
											<?php
											}else{
											?>

												<td><img src="upload/admin/<?=$data['image']?>" width="100" height="100"></td>
												<td>
													<?=$data['user'] ?>
												</td>
												<td>
												<?=$data['fristname']." ". $data['lastname'] ?>
												</td>
												<td>
												<?=$data['email']?>
											</td>
											<td>
												<?=$data['phone']?>
											</td>
											<td>
												<?=$data['status']?>
											</td>
											<td>
											<a href="" class="btn btn-sm btn-warning">Edit</a><br><br>											
											<a href="" class="btn btn-sm btn-danger">Delete</a>
											</td>
											<?php	
											}
											?>
											</tr>
										<?php endforeach; ?>
	
										</tbody>
							</table>
						    
						</div><!--//app-card-->
	                </div>
</div><!--//row-->

<?php 
mysqli_close($conn);
?>