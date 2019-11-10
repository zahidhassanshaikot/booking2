@extends('admin.master')
@section('title')
Home
@endsection
@section('body')


<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Admin Panel</h1>
	</div>
	<!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">





	<div class="col-lg-3 col-md-6">
		<div class="panel panel-yellow">
			<div class="panel-heading">
				<div class="row">
					<div class="col-xs-3">
						<!-- <i class="fa fa-spinner fa-5x"></i> -->
						<i class="fa fa-hourglass-end fa-5x"></i>

						<!-- <i class="fa fa-comments fa-5x"></i> -->
					</div>
					<div class="col-xs-9 text-right">
						<div class="huge">{{ $totalWaiting }}</div>
						<div>New Request!</div>
					</div>
				</div>
			</div>
			<a href="{{ route('view-booking-request-by-admin') }}">
				<div class="panel-footer">
					<span class="pull-left">View Details</span>
					<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
					<div class="clearfix"></div>
				</div>
			</a>
		</div>
	</div>
	<div class="col-lg-3 col-md-6">
		<div class="panel panel-green">
			<div class="panel-heading">
				<div class="row">
					<div class="col-xs-3">
						<i class="fa fa-check fa-5x"></i>
						<!-- <i class="fa fa-tasks fa-5x"></i> -->
					</div>
					<div class="col-xs-9 text-right">
						<div class="huge">{{ $totalAccept }}</div>
						<div>Accepted Request!</div>
					</div>
				</div>
			</div>
			<a href="{{ route('view-accepted-booking-request-by-admin') }}">
				<div class="panel-footer">
					<span class="pull-left">View Details</span>
					<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
					<div class="clearfix"></div>
				</div>
			</a>
		</div>
	</div>
	<div class="col-lg-3 col-md-6">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<div class="row">
					<div class="col-xs-3">
						<i class="fa fa-thumbs-up fa-5x"></i>
						<!-- <i class="fa fa-shopping-cart fa-5x"></i> -->
					</div>
					<div class="col-xs-9 text-right">
						<div class="huge">{{ $totalCheckout}}</div>
						<div>Checkout Request!</div>
					</div>
				</div>
			</div>
			<a href="{{ route('view-Checkout-booking-request-by-admin') }}">
				<div class="panel-footer">
					<span class="pull-left">View Details</span>
					<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
					<div class="clearfix"></div>
				</div>
			</a>
		</div>
	</div>
	<div class="col-lg-3 col-md-6">
		<div class="panel panel-red">
			<div class="panel-heading">
				<div class="row">
					<div class="col-xs-3">
						<i class="fa fa-times fa-5x"></i>
						<!-- <i class="fa fa-support fa-5x"></i> -->
					</div>
					<div class="col-xs-9 text-right">
						<div class="huge">{{ $totalReject }}</div>
						<div>Rejected Request!</div>
					</div>
				</div>
			</div>
			<a href="{{ route('view-rejected-booking-request-by-admin') }}">
				<div class="panel-footer">
					<span class="pull-left">View Details</span>
					<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
					<div class="clearfix"></div>
				</div>
			</a>
		</div>
	</div>
</div>
<!-- /.row -->
@endsection