			@if(session('status'))
			<div class="row justify-content-center mb-0">
				<div class="col-md-6">
					<div class="alert alert-primary text-center">
						{{ session('status') }}
					</div>
				</div>
			</div>
			@endif
