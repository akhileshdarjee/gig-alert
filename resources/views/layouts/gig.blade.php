<div class="panel-body">
	<div class="row">
		<div class="col-md-12" id="gig-details">
			<h4>
				<strong><i class="fa fa-magic"></i> Gig Details</strong>
			</h4>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label class="col-md-6 control-label">Avatar</label>
						<div class="col-md-4 media">
							<div class="bg-light pull-left text-center media-large thumb-large">
							@if (isset($form_data['tabGig']['avatar']) && $form_data['tabGig']['avatar'])
								<img src="{{ $form_data['tabGig']['avatar'] }}" alt="{{ $form_data['tabGig']['name'] }}">
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
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label class="col-md-6 control-label">Starts At</label>
						<div class="col-md-6">
							<div class="input-group date datetimepicker" id="startsat">
								<input type="text" name="starts_at" id="starts_at" class="form-control" data-mandatory="yes" autocomplete="off">
								<span class="input-group-addon">
									<span class="fa fa-calendar"></span>
								</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label class="col-md-3 control-label">Ends At</label>
						<div class="col-md-6">
							<div class="input-group date datetimepicker" id="endsat">
								<input type="text" name="ends_at" id="ends_at" class="form-control" data-mandatory="yes" autocomplete="off">
								<span class="input-group-addon">
									<span class="fa fa-calendar"></span>
								</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label class="col-md-6 control-label">Venue</label>
						<div class="col-md-6">
							<input type="hidden" name="venue_id" id="venue_id" class="form-control" data-mandatory="no" autocomplete="off" data-target-module="Venue" data-target-field="id">
							<input type="text" name="venue" id="venue" class="form-control autocomplete" data-mandatory="no" autocomplete="off" data-target-module="Venue" data-target-field="name">
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label class="col-md-6 control-label">Organizer</label>
						<div class="col-md-6">
							<input type="hidden" name="organizer_id" id="organizer_id" class="form-control" data-mandatory="no" autocomplete="off" data-target-module="Organizer" data-target-field="id">
							<input type="text" name="organizer" id="organizer" class="form-control autocomplete" data-mandatory="no" autocomplete="off" data-target-module="Organizer" data-target-field="name">
						</div>
					</div>
				</div>
			</div>
			<div class="line line-dashed m-t-large"></div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12" id="gig-artist-details">
			<h4>
				<strong><i class="fa fa-heart"></i> Artist Details</strong>
			</h4>
			<div class="row">
				<div class="col-md-12">
					<div class="form-group">
						<label class="col-md-3 control-label">Artists</label>
						<div class="col-md-7">
							<section class="panel artist_details">
								<header class="panel-heading">
									<ul class="nav nav-pills pull-right">
										<li>
											<a><span class="label bg-info total_badge">0</span></a>
										</li>
									</ul>
									<!-- <span>Genre</span> -->
								</header>
								<div>
									<table class="table table-hover m-b-none" id="artist_details" data-table="tabGigArtistDetails">
										<thead class="text-small">
											<tr>
												<th width="6%" id="sr_no" class="text-center">#</th>
												<th id="action" class="text-center" style="display: none;">Action</th>
												<th id="row_id" class="text-center" style="display: none;">ID</th>
												<th width="20%" data-field-type="link" data-field-name="artist" data-target-module="Artist" data-target-field="name">Artist</th>
												<th data-field-type="text" data-field-name="artist_id" data-target-module="Artist" data-target-field="id" data-hidden="yes" style="display: none;">Artist ID</th>
												<th width="6%" id="remove"></th>
											</tr>
										</thead>
										<tbody>
											<tr class="odd">
												<td valign="middle" align="center" colspan="9">Empty</td>
											</tr>
										</tbody>
									</table>
								</div>
								<footer class="panel-footer">
									<div class="row">
										<div class="col-sm-5 pull-right text-right">
											<a class="btn btn-info btn-xs new_row" data-target="artist_details">
												<i class="fa fa-plus"></i> New Row
											</a>
										</div>
									</div>
								</footer>
							</section>
						</div>
					</div>
				</div>
			</div>
			<div class="line line-dashed m-t-large"></div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12" id="gig-genre-details">
			<h4>
				<strong><i class="fa fa-puzzle-piece"></i> Genre Details</strong>
			</h4>
			<div class="row">
				<div class="col-md-12">
					<div class="form-group">
						<label class="col-md-3 control-label">Genres</label>
						<div class="col-md-7">
							<section class="panel genre_details">
								<header class="panel-heading">
									<ul class="nav nav-pills pull-right">
										<li>
											<a><span class="label bg-info total_badge">0</span></a>
										</li>
									</ul>
									<!-- <span>Genre</span> -->
								</header>
								<div>
									<table class="table table-hover m-b-none" id="genre_details" data-table="tabGigGenreDetails">
										<thead class="text-small">
											<tr>
												<th width="6%" id="sr_no" class="text-center">#</th>
												<th id="action" class="text-center" style="display: none;">Action</th>
												<th id="row_id" class="text-center" style="display: none;">ID</th>
												<th width="20%" data-field-type="link" data-field-name="genre" data-target-module="Genre" data-target-field="name">Genre</th>
												<th data-field-type="text" data-field-name="genre_id" data-target-module="Genre" data-target-field="id" data-hidden="yes" style="display: none;">Genre ID</th>
												<th width="6%" id="remove"></th>
											</tr>
										</thead>
										<tbody>
											<tr class="odd">
												<td valign="middle" align="center" colspan="9">Empty</td>
											</tr>
										</tbody>
									</table>
								</div>
								<footer class="panel-footer">
									<div class="row">
										<div class="col-sm-5 pull-right text-right">
											<a class="btn btn-info btn-xs new_row" data-target="genre_details">
												<i class="fa fa-plus"></i> New Row
											</a>
										</div>
									</div>
								</footer>
							</section>
						</div>
					</div>
				</div>
			</div>
			<div class="line line-dashed m-t-large"></div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12" id="ticket-details">
			<h4>
				<strong><i class="fa fa-ticket"></i> Ticket Details</strong>
			</h4>
			<div class="row">
				<div class="col-md-12">
					<div class="form-group">
						<label class="col-md-3 control-label">Ticket Link</label>
						<div class="col-md-7">
							<input type="text" name="ticket_link" id="ticket_link" class="form-control" data-mandatory="yes" autocomplete="off">
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label class="col-md-6 control-label">Price</label>
						<div class="col-md-6">
							<input type="text" name="price" id="price" class="form-control" data-mandatory="no" autocomplete="off">
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