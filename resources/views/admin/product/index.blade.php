@extends('layouts.dashboard')

@section('style')
<style>

</style>
@endsection

@section('sidebar')
@include('layouts.nav.admin')
@endsection

@section('header')
<h1>Product Management</h1>
@endsection

@section('main')
<div class="row">
	<div class="col-9 col-md-8 col-lg-6">
		<form id="form">
			<div class="input-group">
				<input type="text" id="inputsearch" class="form-control" placeholder="Search code, name, price, or detail" autofocus autocomplete="off">
				<span class="input-group-btn">
					<button type="submit" id="inputsearchbtn" class="btn btn-secondary"><span class="fa fa-search"></span></button>
				</span>
			</div>
		</form>
	</div>
	<div class="col-3 col-md-4 offset-lg-3 col-lg-3">
		<button type="button" id="newbtn" class="btn btn-primary btn-block"><span class="fa fa-plus"></span> <span class="hidden-sm-down">New Product</span></button>
	</div>
</div>
<div id="data" class="mt-3"></div>
@endsection

@section('script')
<script>
	ajaxLoad('{{ route('products.list') }}', 'data');

	$("#form").submit(function(e) {
		e.preventDefault();
		ajaxLoad('{{ route('products.list') }}?oksearch=1&search=' + $("#inputsearch").val(), 'data');
	});

	$("#newbtn").click(function() {
		$(".loading").show();
        $("#modal").modal('show').find('.modal-content').empty().load("{{ route('products.create') }}", function() {
			$(".loading").hide();
		});
	});
</script>
@endsection
