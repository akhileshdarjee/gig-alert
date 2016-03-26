<div class="panel-body">
	<div class="row">
		<div class="col-md-12" id="artist-details">
			<h4>
				<strong><i class="fa fa-heart"></i> Artist Details</strong>
			</h4>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label class="col-md-6 control-label">Name</label>
						<div class="col-md-6">
							<input type="text" name="name" id="name" class="bg-focus form-control" data-mandatory="yes" autocomplete="off">
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
				<div class="col-md-12">
					<div class="form-group">
						<label class="col-md-3 control-label">Avatar Link</label>
						<div class="col-md-7">
							<input type="text" name="avatar_link" id="avatar_link" class="form-control" data-mandatory="no" autocomplete="off">
						</div>
					</div>
				</div>
			</div>
			<div class="line line-dashed m-t-large"></div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12" id="genre-details">
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
									<table class="table table-hover m-b-none" id="genre_details" data-table="tabArtistGenreDetails">
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
		<div class="col-md-12" id="social-details">
			<h4>
				<strong><i class="fa fa-share-alt"></i> Social Details</strong>
			</h4>
			<div class="row">
				<div class="col-md-12">
					<div class="form-group">
						<label class="col-md-3 control-label">Facebook Link</label>
						<div class="col-md-7">
							<div class="input-group">
								<span class="input-group-addon">
									<span class="fa fa-facebook"></span>
								</span>
								<input type="text" name="facebook_link" id="facebook_link" class="form-control" data-mandatory="no" autocomplete="off">
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="form-group">
						<label class="col-md-3 control-label">Twitter Link</label>
						<div class="col-md-7">
							<div class="input-group">
								<span class="input-group-addon">
									<span class="fa fa-twitter"></span>
								</span>
								<input type="text" name="twitter_link" id="twitter_link" class="form-control" data-mandatory="no" autocomplete="off">
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="form-group">
						<label class="col-md-3 control-label">YouTube Link</label>
						<div class="col-md-7">
							<div class="input-group">
								<span class="input-group-addon">
									<span class="fa fa-youtube-play"></span>
								</span>
								<input type="text" name="youtube_link" id="youtube_link" class="form-control" data-mandatory="no" autocomplete="off">
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="form-group">
						<label class="col-md-3 control-label">SoundCloud Link</label>
						<div class="col-md-7">
							<div class="input-group">
								<span class="input-group-addon">
									<span class="fa fa-soundcloud"></span>
								</span>
								<input type="text" name="soundcloud_link" id="soundcloud_link" class="form-control" data-mandatory="no" autocomplete="off">
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="form-group">
						<label class="col-md-3 control-label">Bandcamp Link</label>
						<div class="col-md-7">
							<div class="input-group">
								<span class="input-group-addon">
									<span class="fa fa-link"></span>
								</span>
								<input type="text" name="bandcamp_link" id="bandcamp_link" class="form-control" data-mandatory="no" autocomplete="off">
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="form-group">
						<label class="col-md-3 control-label">Slug</label>
						<div class="col-md-7">
							<input type="text" name="slug" id="slug" class="form-control" data-mandatory="no" autocomplete="off">
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