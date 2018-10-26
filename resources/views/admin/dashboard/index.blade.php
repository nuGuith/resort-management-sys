@extends('admin.default')

@section('page-header')
    Admin <small>DASHBOARD</small>
@endsection

@section('content')

	<div class="row gap-20">
		<!-- #Total Visits ==================== -->
		<div class='col-md-4'>
			<div class="layers bd bgc-white p-20">
				<div class="layer w-100 mB-10">
					<h6 class="lh-1">Total Visits</h6>
				</div>
				<div class="layer w-100">
					<div class="peers ai-sb fxw-nw">
						<div class="peer peer-greed">
							<span id="sparklinedash"></span>
						</div>
						<div class="peer">
							<span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-green-50 c-green-500">1, 234
							</span>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- #Total Accepted Reservations ==================== -->
		<div class='col-md-4'>
			<div class="layers bd bgc-white p-20">
				<div class="layer w-100 mB-10">
					<h6 class="lh-1">Total Accepted Reservations</h6>
				</div>
				<div class="layer w-100">
					<div class="peers ai-sb fxw-nw">
						<div class="peer peer-greed">
							<span id="sparklinedash2"></span>
						</div>
						<div class="peer">
							<span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-red-50 c-red-500">-7%</span>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- #Total Sales ==================== -->
		<div class='col-md-4'>
			<div class="layers bd bgc-white p-20">
				<div class="layer w-100 mB-10">
					<h6 class="lh-1">Total Sales</h6>
				</div>
				<div class="layer w-100">
					<div class="peers ai-sb fxw-nw">
						<div class="peer peer-greed">
							<span id="sparklinedash3"></span>
						</div>
						<div class="peer">
							<span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-purple-50 c-purple-500">~12%</span>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="masonry-item col-md-12">
			<div class="bgc-white p-20 bd">
				<h6 class="c-grey-900">Sales Growth</h6>
				<div class="mT-30">
					<canvas id="line-chart" height="220"></canvas>
				</div>
			</div>
		</div>

	</div>



@endsection