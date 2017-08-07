<div class="table-responsive">
	<table class="table table-hover table-bordered table-striped text-center">
		<thead>
			<th class="text-center">#</th>
			<th class="text-center">CODE</th>
			<th class="text-center">NAME</th>
			<th class="text-center">QTY</th>
			<th class="text-center hidden-xs-down">PRICE</th>
			<th class="text-center hidden-sm-down">DETAIL</th>
			<th class="text-center">BUTTON</th>
		</thead>
		<tbody>
			@php $i = ($products->currentPage() - 1) * $products->perpage(); @endphp
			@foreach($products as $product)
				<tr>
					<td>{{ ++$i }}</td>
					<td>{{ $product->code }}</td>
					<td>{{ $product->name }}</td>
					<td>{{ $product->qty }}</td>
					<td class="hidden-xs-down">{{ number_format($product->price) }}</td>
					<td class="hidden-sm-down">{{ substr($product->detail, 0, 20) . (strlen($product->detail) > 20 ? '...' : '') }}</td>
					<td>
						<button class="btn btn-sm btn-primary showBtn" data-id="{{ $product->id }}">Show</button>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
</div>
<div class="row">
    <div class="col-4">
        Total data : {{ $products->total() }}
    </div>
    <div class="col-8 text-right">
        {{ $products->links() }}
    </div>
</div>
<script>
    $('.pagination a').on('click', function (event) {
        event.preventDefault();
        ajaxLoad($(this).attr('href'), 'data');
    });

    $(".showBtn").click(function(e) {
        e.preventDefault();
		$(".loading").show();
        $("#modal").modal('show').find('.modal-content').empty().load("{{ url('admin/products') }}/" + $(this).data("id"), function() {
			$(".loading").hide();
		});
    });
</script>
