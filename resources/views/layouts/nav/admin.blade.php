{{-- SIDEBAR BRAND --}}
<a href="{{ route('admin') }}" class="list-group-item d-inline-block collapsed" data-parent="#sidebar" style="background-color: rgb(117, 147, 230)">
	<span class="hidden-sm-up"><span class="fa fa-dashboard"></span></span>
	<span class="hidden-sm-down"><h1><span class="fa fa-dashboard"></span> <strong>Admin <span class="hidden-md-down">Panel</span></strong></h1></span>
</a>

{{-- SIDEBAR NAVIGATION --}}
<a href="{{ route('products.index') }}" class="list-group-item d-inline-block collapsed" data-parent="#sidebar">
	<span class="fa fa-cube"></span> <span class="hidden-sm-down">Product <span class="hidden-md-down">Management</span></span>
</a>
<a href="{{ url('/') }}" class="list-group-item d-inline-block collapsed" data-parent="#sidebar">
	<span class="fa fa-home"></span> <span class="hidden-sm-down">Back To Welcome <span class="hidden-md-down">Page</span></span>
</a>
