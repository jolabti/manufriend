MAIN-->
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Services / Shopping</li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Shopping</h1>
			</div>
		</div><!--/.row-->

		<div class="panel panel-container">
			<div class="row">
				<div class="col-xs-12 ">
            <table class="table">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Name</th>
                  <!-- <th>Services</th> -->
                  <th>Order Time</th>
                  <th>Order For (Time)</th>
                  <th>Finish Time</th>
                  <th>Duration</th>
                  <th>Hourly Rates</th>
                  <th>Total Price</th>
                  <!-- <th>Action</th> -->
                </tr>
              </thead>
              <tbody>
              	<?php foreach ($values as $key) {
    # code... ?>
               <tr>
                  <td><?= $key->id_trx; ?></td>
                  <td><?= $key->nama_user; ?></td>
                  <!-- <td><?= $key->nama_service; ?></td> -->
                  <td><?= $key->tanggal_trx; ?></td>
                  <td><?= $key->tanggal_order; ?></td>
                  <td><?= $key->tanggal_selesai; ?></td>
                  <td><?= $key->durasi; ?></td>
                  <td><?= $key->harga_service; ?></td>
                  <td><?= $key->total_harga; ?></td>
                  <td></td>
                  <!-- <td>
						<a href="<?= site_url('welcome/api_approve'); ?>/<?= $key->id_trx; ?>" class="btn btn-success">Done</a>
						<a href="#" class="btn btn-danger">Cancel</a>
                  </td> -->
                </tr>
                <?php
} ?>
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
				<p class="back-link">Copyright &copy; 2018</a></p>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main
