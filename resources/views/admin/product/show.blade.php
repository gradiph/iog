<div class="modal-header">
	<h4 class="modal-title" id="modal-title">Product <strong>{{ $product->code }}</strong></h4>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;</button>
</div>
<div class="modal-body">
	<div class="row">
		<div class="col-12 col-lg-8">
			<table>
				<tr>
					<td>Name</td>
					<td>&nbsp; : &nbsp;</td>
					<td>{{ $product->name }}</td>
				</tr>
				<tr>
					<td>Detail</td>
					<td>&nbsp; : &nbsp;</td>
					<td>{!! $product->detail !!}</td>
				</tr>
				<tr>
					<td>Qty</td>
					<td>&nbsp; : &nbsp;</td>
					<td>{{ $product->qty }}</td>
				</tr>
				<tr>
					<td>Price</td>
					<td>&nbsp; : &nbsp;</td>
					<td>{{ number_format($product->price) }}</td>
				</tr>
			</table>
		</div>
		<div class="col">
			<a href="{{ url('images/product') . '/' . $product->image }}" target="_blank">
				<img src="{{ url('images/product') . '/' . $product->image }}" alt="Product {{ $product->code }}" class="img-fluid">
			</a>
		</div>
	</div>
	<p></p>
	<div class="row">
		<div class="col">
			<button id="editBtn" class="btn btn-warning btn-block"><span class="fa fa-pencil"></span> Edit</button>
		</div>
		<div class="col">
			<button id="deleteBtn" class="btn btn-danger btn-block"><span class="fa fa-trash"></span> Delete</button>
			<form id="formProductDelete" action="{{ route('products.destroy', ['product' => $product->id]) }}" method="post" hidden>
				{{ csrf_field() }}
				{{ method_field('delete') }}
			</form>
		</div>
	</div>
</div>
<script>
	$("#modal").on('shown.bs.modal', function () {
		$(this).attr('aria-label', $("#modal-title").html());
	});

    $("#editBtn").click(function(e) {
		$(".loading").show();
        $("#modal").find('.modal-content').empty().load("{{ route('products.edit', ['product' => $product->id]) }}", function() {
			$(".loading").hide();
		});
    });

	$("#deleteBtn").click(function(e) {
		var d = confirm("Confirm Delete?");
		if(d) {
			$("#formProductDelete").submit();
		}
	});
</script>
