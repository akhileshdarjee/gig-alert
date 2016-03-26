<form method="POST" action="/app/settings" name="settings" id="settings" class="form-horizontal" enctype="multipart/form-data">
	{!! csrf_field() !!}
	<div class="panel-body">
		<!-- <div class="row">
			<div class="col-md-12" id="social-settings">
				<h4>
					<strong><i class="fa fa-share-alt"></i> Social Login</strong>
				</h4>
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<label class="col-md-2 control-label">Social Login</label>
							<div class="col-md-2">
								<select name="social_login" id="social_login" class="form-control" data-mandatory="yes">
									<option value="Active">Active</option>
									<option value="Inactive">Inactive</option>
								</select>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-2">&nbsp;</div>
					<div class="col-md-6">
						<div class="form-group">
							<label class="col-md-3 control-label">Facebook Login</label>
							<div class="col-md-4">
								<select name="facebook_login" id="facebook_login" class="form-control" data-mandatory="yes">
									<option value="Active">Active</option>
									<option value="Inactive">Inactive</option>
								</select>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-2">&nbsp;</div>
					<div class="col-md-6">
						<div class="form-group">
							<label class="col-md-3 control-label">Google Login</label>
							<div class="col-md-4">
								<select name="google_login" id="google_login" class="form-control" data-mandatory="yes">
									<option value="Active">Active</option>
									<option value="Inactive">Inactive</option>
								</select>
							</div>
						</div>
					</div>
				</div>
				<div class="line line-dashed m-t-large"></div>
			</div>
		</div> -->
		<div class="row">
			<div class="col-md-12" id="email-settings">
				<h4>
					<strong><i class="fa fa-at"></i> Email Settings</strong>
				</h4>
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<label class="col-md-2 control-label">Email</label>
							<div class="col-md-2">
								<select name="email" id="email" class="form-control" data-mandatory="yes">
									<option value="Active">Active</option>
									<option value="Inactive">Inactive</option>
								</select>
							</div>
						</div>
					</div>
				</div>
				<div class="line line-dashed m-t-large"></div>
			</div>
		</div>
		<!-- <div class="row">
			<div class="col-md-12" id="sms-settings">
				<h4>
					<strong><i class="fa fa-envelope"></i> SMS Settings</strong>
				</h4>
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<label class="col-md-2 control-label">SMS</label>
							<div class="col-md-2">
								<select name="sms" id="sms" class="form-control" data-mandatory="yes">
									<option value="Active">Active</option>
									<option value="Inactive">Inactive</option>
								</select>
							</div>
						</div>
					</div>
				</div>
				<div class="line line-dashed m-t-large"></div>
			</div>
		</div> -->
		<div class="row">
			<div class="col-md-12" id="home-settings">
				<h4>
					<strong><i class="fa fa-home"></i> Home</strong>
				</h4>
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<label class="col-md-2 control-label">Home Page</label>
							<div class="col-md-2">
								<select name="home_page" id="home_page" class="form-control" data-mandatory="yes">
									<option value="reports">Reports</option>
									<option value="modules">Modules</option>
								</select>
							</div>
						</div>
					</div>
				</div>
				<div class="line line-dashed m-t-large"></div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12" id="list-view-settings">
				<h4>
					<strong><i class="fa fa-list"></i> List View</strong>
				</h4>
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<label class="col-md-2 control-label">Record(s) per page</label>
							<div class="col-md-1">
								<input type="text" name="list_view_records" id="list_view_records" class="form-control" data-mandatory="yes" autocomplete="off">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>