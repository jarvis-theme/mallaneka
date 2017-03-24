<!-- Page title -->
<div class="page-title">
	<div class="container">
		<h2><i class="icon-desktop color"></i> Service <small></small></h2>
		<hr />
	</div>
</div>
<!-- Page title -->

<!-- Page content -->
<div class="faq">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="panel-group" id="accordion">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
									Kebijakan Layanan
								</a>
							</h4>
						</div>
						<div id="collapseOne" class="panel-collapse collapse in">
							<div class="panel-body">
								{{$service->tos}}
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
									Kebijakan Pengembalian
								</a>
							</h4>
						</div>
						<div id="collapseTwo" class="panel-collapse collapse">
							<div class="panel-body">{{$service->refund}}</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Kebijakan Privasi</a>
							</h4>
						</div>
						<div id="collapseThree" class="panel-collapse collapse">
							<div class="panel-body">{{$service->privacy}}</div>
						</div>
					</div>
				</div>
			</div>
			<div class="sep-bor"></div>
		</div>
	</div>
</div>