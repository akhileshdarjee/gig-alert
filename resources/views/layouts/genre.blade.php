<div class="panel-body">
	<div class="row">
		<div class="col-md-12" id="genre-details">
			<h4>
				<strong><i class="fa fa-puzzle-piece"></i> Genre Details</strong>
			</h4>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label class="col-md-6 control-label">Avatar</label>
						<div class="col-md-4 media">
							<div class="bg-light pull-left text-center media-large thumb-large">
							@if (isset($form_data['tabGenre']['avatar']) && $form_data['tabGenre']['avatar'])
								<img src="{{ $form_data['tabGenre']['avatar'] }}" alt="{{ $form_data['tabGenre']['name'] }}">
							@else
								<i class="fa fa-user inline fa fa-light fa fa-3x m-t-large m-b-large"></i>
							@endif
							</div>
							<div class="media-body">
								<input type="file" title="Change" name="avatar" id="avatar" class="btn btn-sm btn-primary m-b-small">
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label class="col-md-3 control-label">Status</label>
						<div class="col-md-4">
							<select name="status" id="status" class="form-control" data-mandatory="yes">
								<option value="Active">Active</option>
								<option value="Inactive">Inactive</option>
							</select>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label class="col-md-6 control-label">Name</label>
						<div class="col-md-6">
							<input type="text" name="name" id="name" class="bg-focus form-control" data-mandatory="yes" autocomplete="off">
						</div>
					</div>
				</div>
			</div>
			<div class="line line-dashed m-t-large"></div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12" id="other-details">
			<h4>
				<strong><i class="fa fa-info-circle"></i> Other Details</strong>
			</h4>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label class="col-md-6 control-label">Description</label>
						<div class="col-md-6">
							<textarea rows="5" name="description" id="description" class="input-xlarge form-control" data-mandatory="no" autocomplete="off"></textarea>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>