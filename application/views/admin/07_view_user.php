<!--MAIN-->
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Users </li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">User</h1>
			</div>
		</div><!--/.row-->
		

		<div class="panel panel-default">
            <div class="panel-heading">
                Input Data
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                 <?php //value='$sp[merk]'
                    echo "
                      <form role='form' action='' method='post' enctype='multipart/form-data'>
                            <div class='form-group'>
                                <label>Name</label>
                                <input class='form-control' type='text' name='name' required='' value=''> 
                            </div>
                            <div class='form-group'>
                                <label>Email</label>
                                <textarea class='form-control ckeditor' name='email' required='' ></textarea>
                            </div>
                            <div class='form-group'>
                                <label>Password</label>
                                <textarea class='form-control ckeditor' name='password' required='' ></textarea>
                            </div>
                            <div class='form-group'>
                                <label>Phone Number</label>
                                <input class='form-control' type='text' name='phone-number' required='' value=''>
                            </div>
                            <div class='form-group'>
                                <label>Address</label>
                                <textarea class='form-control ckeditor' name='address' required='' ></textarea>
                            </div>
                            <div class='form-group'>
                                <label>Gender</label>
                                <input class='form-control' type='text' name='gender' required='' value=''>
                            </div>
                            
                            <div class='form-group'>
	                            <label>Date of Birth</label>
	                            <td>
	                            	<input name='ttl_user'>&nbsp;
	                            		<a href='javascript:void(0)' onClick='if(self.gfPop)gfPop.fPopCalendar(document.formbiodata.ttl_user);return false;' ><img name='popcal' align='absmiddle' src='calender/calbtn.gif' width='34' height='22' border='0' alt=''>
	                            		</a>
	                            </td>
							<iframe width=174 height=189 name='gToday:normal:agenda.js' id='gToday:normal:agenda.js' src='calender/ipopeng.htm' scrolling='no' frameborder='0' style='visibility:visible; z-index:999; position:absolute; top:-500px; left:-500px;'>
							</iframe>
							</div>
                            
                            <div class='form-group'>
                                <label>Role</label>
	                            <select class='form-control' name='role_user' required='' style='background-color: #F5F5F5; color: #95a5a6;' >
	                                  <option value='' selected>Choose one</option>
	                                  <option value='1'>1</option>
	                                  <option value='2'>2</option>
	                                  <option value='3'>3</option>
	                            </select>
							</div>

                            <div class='form-group'>
                                <label>Image</label>
                                <input type='file' name='file'>
                            </div>
                            <input class='form-control' type='hidden' name='id' required='' value=''>
                            <button type='submit' name='update' class='btn btn-success'>Save</button>
                            <button type='reset' class='btn btn-warning'>Reset</button>
                        </form>";
                 ?>
                </div>
            </div>
		</div>
		</div>

		<div class="panel panel-container">
			<div class="row">
				<div class="col-xs-12 ">
            <table class="table">
              <thead>
                <tr>			
				  <th>No.</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone Number</th>
				  <th>Address</th>
				  <th>Gender</th>
				  <th>Date of Birth</th>
				  <th>Category</th>
				  <th>Action</th>
                </tr>
              </thead>
              <tbody>
              	<?php foreach ($values as $key) {
              		# code...
              	?>
               <tr>
                  <td><?= $key->id_user; ?></td>
                  <td><?= $key->nama_user; ?></td>
                  <td><?= $key->email_user; ?></td>
                  <td><?= $key->telepon_user; ?></td>
                  <td><?= $key->alamat_user; ?></td>
                  <td><?= $key->gender_user; ?></td>
                  <td><?= $key->ttl_user; ?></td>
                  <td><?= $key->role_user; ?></td>
                  <td>
						<a href="<?= site_url('welcome/user');?>/<?= $key->id_user; ?>" class="btn btn-success">Update</a>
						<a href="#" class="btn btn-danger">Delete</a>
                  </td>
                </tr> 
                
                <?php } ?>
              </tbody>
            </table>
					<!-- <div class="panel panel-teal panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-shopping-cart color-blue"></em>
							<div class="large">120</div>
							<div class="text-muted">New Orders</div>
						</div>
					</div> -->
				</div>
				<!-- <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-blue panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-comments color-orange"></em>
							<div class="large">52</div>
							<div class="text-muted">Comments</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-orange panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-users color-teal"></em>
							<div class="large">24</div>
							<div class="text-muted">New Users</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-red panel-widget ">
						<div class="row no-padding"><em class="fa fa-xl fa-search color-red"></em>
							<div class="large">25.2k</div>
							<div class="text-muted">Page Views</div>
						</div>
					</div>
				</div> -->
			</div><!--/.row-->
		</div>
			<div class="col-sm-12">
				<p class="back-link">Copyright &copy; 2018<a href="#"></a></p>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->