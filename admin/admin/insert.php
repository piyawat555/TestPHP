<div class="row g-2 justify-content-start justify-content-md-end align-items-center">
							    <div class="col-auto">									
								    <a class="btn app-btn-primary" href="?page=admin">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-90deg-left" viewBox="0 0 16 16">
									<path fill-rule="evenodd" d="M1.146 4.854a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 4H12.5A2.5 2.5 0 0 1 15 6.5v8a.5.5 0 0 1-1 0v-8A1.5 1.5 0 0 0 12.5 5H2.707l3.147 3.146a.5.5 0 1 1-.708.708l-4-4z"/>
									</svg>  กลับ</a>
							    </div>	
			            	<hr class="mb-2">
							<h1 class="app-page-title">เพิ่มข้อมูลผู้ดูแล</h1>
</div>
<hr class="mb-1">
<div class="row g-4 settings-section">	                
	                <div class="col-12 col-md-12">
		                <div class="app-card app-card-settings shadow-sm p-4">						    
						    <div class="app-card-body">
								<?php
										if(isset($_POST) && !empty($_POST)){
											$user= $_POST['user'];
											$password = $_POST['password'];
											$fristname = $_POST['fristname'];
											$lastname = $_POST['lastname'];
											$email = $_POST['email'];
											$phone = $_POST['phone'];
											if(isset($_FILES['image']['name']) && !empty($_FILES['image']['name'])){
												$extension = array("jpeg","png","jpg");//เช็คประเภทไฟล์
												$target = 'upload/admin/';
												$filename = $_FILES['image']['name'];
												$filetmp = $_FILES['image']['tmp_name'];
												$ext = pathinfo($filename,PATHINFO_EXTENSION);
													if(in_array($ext,$extension)){
														 if(!file_exists($target.$filename)){
															 if(move_uploaded_file($filetmp,$target.$filename)){
																 $filename = $filename;
															 }else{
																 echo 'เพิ่มไฟล์เข้า folder ไม่สำเร็จ';
															 }
														 }else{
															$newfilename = time().$filename;	
																if(move_uploaded_file($filetmp,$target.$newfilename)){
																	$filename = $newfilename;
																}else{
																	echo 'เพิ่มไฟล์เข้า folder ไม่สำเร็จ';
																}
															}
													}else{
													echo 'ประเภทไฟล์ไม่ถูกต้อง';
													}
											}else{
												$filename = ' ';
											}
											// echo $filename;
											// exit();
											$sql = "INSERT INTO tb_admin (fristname,lastname,email,phone,image,user,password)
											VALUE ('$fristname','$lastname','$email','$phone','$filename','$user','$password')";

											if(mysqli_query($conn,$sql)){
													echo "เพิ่มข้อมูลสำเร็จ";
											}else{
												echo "เพิ่มข้อมูลไม่สำเร็จ" . mysqli_error($conn);
											}
											mysqli_close($conn);
										}
								?>
							    <form action="" method="post" enctype="multipart/form-data">
										
								<div class="mb-3">
									    <label class="form-label">รูปภาพ</label>
										<div>
										<img id="preview" width="150" height="150" src="https://c1.klipartz.com/pngpicture/554/218/sticker-png-circle-silhouette-user-profile-user-interface-black-head-blackandwhite-logo.png">
										</div>										
										<hr class="mb-2 mt-2">
										
									    <input type="file" class="form-control" name="image" id="image">
								</div>
								    <div class="mb-3">
									    <label class="form-label">ชื่อผู้ใช้<span class="ml-2" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="ไม่สามารถใช้ชื่อซ้ำกันได้"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-info-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
										<path d="M8.93 6.588l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588z"/>
										<circle cx="8" cy="4.5" r="1"/>										
									</svg></span></label>
									    <input type="text" class="form-control" name="user"  placeholder="ชื่อผู้ใช้ : admin" required>
									</div>

									<div class="mb-3">
									    <label class="form-label">รหัสผ่าน</label>
									    <input type="password" class="form-control" name="password" placeholder="รหัสผ่าน : 123456" required>
									</div>
									<hr class="mb-4 mt-5">		
									<div class="mb-3">
									    <label class="form-label">ชื่อ</label>
									    <input type="text" class="form-control" name="fristname" placeholder="ชื่อ" required>
									</div>

									<div class="mb-3">
									    <label class="form-label">นามสกุล</label>
									    <input type="text" class="form-control" name="lastname" placeholder="นามสกุล" required>
									</div>
									
									<div class="mb-3">
									    <label class="form-label">อีเมลล์</label>
									    <input type="email" class="form-control" name="email" placeholder="อีเมลล์" required>
									</div>

									<div class="mb-3">
									    <label class="form-label">เบอร์โทรศัพท์</label>
									    <input type="text" class="form-control" name="phone" placeholder="เบอร์โทรศัพท์" required>
									</div>
									<button type="submit" class="btn app-btn-primary" >บันทึก</button>
							    </form>
						    </div><!--//app-card-body-->
						    
						</div><!--//app-card-->
	                </div>
</div><!--//row-->

<script type="text/javascript">
	function readURL(input) {
				if (input.files && input.files[0]) {
				var reader = new FileReader();
				reader.onload = function(e) {
				$('#preview').attr('src', e.target.result);
				}
			reader.readAsDataURL(input.files[0]); // convert to base64 string
        }
	}
		$("#image").change(function() {
			readURL(this);
		});
</script>