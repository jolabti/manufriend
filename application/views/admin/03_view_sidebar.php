<!--SIDEBAR-->
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name"><?= $valemail; ?></div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<!-- <li class="active"> -->
			<li><a href="index.html"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
			<li ><a href="<?= site_url('welcome/user')?>"><em class="fa fa-toggle-off">&nbsp;</em> User</a></li>
			<!-- <li class="parent "><a data-toggle="collapse" href="#sub-item-1">
				<em class="fa fa-navicon">&nbsp;</em> Users <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li><a class="" href="#">
						<span class="fa fa-arrow-right">&nbsp;</span> Customer
					</a></li>
					<li><a class="" href="#">
						<span class="fa fa-arrow-right">&nbsp;</span> Agent
					</a></li>
					<li><a class="" href="#">
						<span class="fa fa-arrow-right">&nbsp;</span> Admin
					</a></li>
				</ul>
			</li> -->
			<li class="parent "><a data-toggle="collapse" href="<?= site_url('welcome/transaction')?>">
				<em class="fa fa-navicon">&nbsp;</em> Transaction <span data-toggle="collapse" href="#sub-item-2" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-2">
					<li><a class="" href="<?= site_url('welcome/request')?>">
						<span class="fa fa-arrow-right">&nbsp;</span> Request
					</a></li>
					<li><a class="" href="<?= site_url('welcome/ongoing')?>">
						<span class="fa fa-arrow-right">&nbsp;</span> On Going
					</a></li>
					<li><a class="" href="<?= site_url('welcome/done')?>">
						<span class="fa fa-arrow-right">&nbsp;</span> Done
					</a></li>
				</ul>
			</li>
			<li class="parent "><a data-toggle="collapse" href="#sub-item-3">
				<em class="fa fa-navicon">&nbsp;</em> Services <span data-toggle="collapse" href="#sub-item-3" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-3">
					<li><a class="" href="<?= site_url('welcome/hang_out')?>">
						<span class="fa fa-arrow-right">&nbsp;</span> Hang Out
					</a></li>
					<li><a class="" href="<?= site_url('welcome/shopping')?>">
						<span class="fa fa-arrow-right">&nbsp;</span> Shopping
					</a></li>
					<li><a class="" href="<?= site_url('welcome/chit_chat')?>">
						<span class="fa fa-arrow-right">&nbsp;</span> Chit Chat
					</a></li>
					<li><a class="" href="<?= site_url('welcome/sport')?>">
						<span class="fa fa-arrow-right">&nbsp;</span> Sport
					</a></li>
					<li><a class="" href="<?= site_url('welcome/attending_party')?>">
						<span class="fa fa-arrow-right">&nbsp;</span> Attending a Party
					</a></li>
				</ul>
			</li>
			<li class="parent "><a data-toggle="collapse" href="#sub-item-4">
				<em class="fa fa-navicon">&nbsp;</em> Report <span data-toggle="collapse" href="#sub-item-4" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-4">
					<li><a class="" href="#">
						<span class="fa fa-arrow-right">&nbsp;</span> Daily
					</a></li>
					<li><a class="" href="#">
						<span class="fa fa-arrow-right">&nbsp;</span> Weekly
					</a></li>
					<li><a class="" href="#">
						<span class="fa fa-arrow-right">&nbsp;</span> Yearly
					</a></li>
				</ul>
			</li>
	<!-- 		<li><a href="widgets.html"><em class="fa fa-calendar">&nbsp;</em> Widgets</a></li>
			<li><a href="charts.html"><em class="fa fa-bar-chart">&nbsp;</em> Charts</a></li>
			<li><a href="elements.html"><em class="fa fa-toggle-off">&nbsp;</em> UI Elements</a></li>
			<li><a href="panels.html"><em class="fa fa-clone">&nbsp;</em> Alerts &amp; Panels</a></li>
			<li class="parent "><a data-toggle="collapse" href="#sub-item-1">
				<em class="fa fa-navicon">&nbsp;</em> Multilevel <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li><a class="" href="#">
						<span class="fa fa-arrow-right">&nbsp;</span> Sub Item 1
					</a></li>
					<li><a class="" href="#">
						<span class="fa fa-arrow-right">&nbsp;</span> Sub Item 2
					</a></li>
					<li><a class="" href="#">
						<span class="fa fa-arrow-right">&nbsp;</span> Sub Item 3
					</a></li>
				</ul>
			</li> -->
			<li><a href="<?= site_url('welcome/logout')?>"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
	</div><!--/.sidebar-->