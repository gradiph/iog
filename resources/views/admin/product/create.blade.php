<div class="modal-header">
	<h4 class="modal-title" id="modal-title">Create Product</h4>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;</button>
</div>
<div class="modal-body">
	<form action="{{ route('products.store') }}" method="post" id="formProductCreate" role="form" enctype="multipart/form-data">
		{{ csrf_field() }}
		<div class="form-group row">
			<label for="inputcode" class="col-4 col-form-label">Code</label>
			<div class="col-8">
				<input type="text" id="inputcode" name="code" class="form-control" required>
			</div>
		</div>
		<div class="form-group row">
			<label for="inputname" class="col-4 col-form-label">Name</label>
			<div class="col-8">
				<input type="text" id="inputname" name="name" class="form-control" required>
			</div>
		</div>
		<div class="form-group row">
			<label for="inputdetail" class="col-4 col-form-label">Detail</label>
			<div class="col-8">
				<textarea name="detail" id="inputdetail" cols="30" rows="5" class="form-control" required></textarea>
			</div>
		</div>
		<div class="form-group row">
			<label for="inputqty" class="col-4 col-form-label">Qty</label>
			<div class="col-8">
				<input type="text" id="inputqty" name="inputqty" class="form-control number" required>
				<input type="hidden" id="qty" name="qty" required>
			</div>
		</div>
		<div class="form-group row">
			<label for="inputprice" class="col-4 col-form-label">Price</label>
			<div class="col-8">
				<input type="text" id="inputprice" name="inputprice" class="form-control number" required>
				<input type="hidden" id="price" name="price" required>
			</div>
		</div>
		<div class="form-group row">
			<label for="inputimage" class="col-4 col-form-label">Image</label>
			<div class="col-8">
				<input type="file" id="inputimage" name="image" required>
			</div>
		</div>
	</form>
</div>
<div class="modal-footer">
	<button type="submit" id="submitbtn" form="formProductCreate" class="btn btn-primary">Submit</button>
	<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
</div>

<script>
	$("#modal").on('shown.bs.modal', function () {
		$(this).attr('aria-label', $("#modal-title").html());
		$("#inputcode").focus();
	});

	$("#formProductCreate").submit(function(e) {
		$("#submitbtn").attr('disabled', 'disabled');
		$("#inputprice").val().replace(",", "");
		$(".loading").show();
	});

	$('input.number').keyup(function(event) {
		$("#qty").val($("#inputqty").val().replace(",", ""));
		$("#price").val($("#inputprice").val().replace(",", ""));

		// skip for arrow keys
		if(event.which >= 37 && event.which <= 40) return;

		// format number
		$(this).val(function(index, value) {
			return value
			.replace(/\D/g, "")
			.replace(/\B(?=(\d{3})+(?!\d))/g, ",")
			;
		});
	});
</script>
