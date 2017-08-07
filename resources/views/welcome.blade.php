@extends('layouts.app')

@section('style')
<style>
	section#contact {
		background: rgb(193, 255, 198);
	}
</style>
@endsection

@section('nav')
	@include('layouts.nav.welcome')
@endsection

@section('header')
	@include('layouts.header.welcome')
@endsection

@section('main')
<section id="products" class="py-5">
	<article id="blouses">
		<div class="container">
			<hr>
			<h1 class="text-center">Blouse</h1>
			<hr>
			<div class="row">
				@foreach($blouses as $blouse)
					<div class="col-12 col-sm-6 col-lg-4 col-xl-3">
						<div class="card mb-3">
							<img class="card-img-top img-fluid" src="{{ route('img.product', ['image' => $blouse->image]) }}" alt="{{ $blouse->code }}">
							<div class="card-block">
								<h4 class="card-title">{{ $blouse->name }}</h4>
								<p class="card-text">{!! $blouse->detail !!}</p>
								<p class="card-text"><small class="text-muted">Last updated {{ date('d-m-Y H:i', strtotime($blouse->updated_at)) }}</small></p>
							</div>
						</div>
					</div>
				@endforeach
			</div>
		</div>
	</article>
	<article id="dresses">
		<div class="container">
			<hr>
			<h1 class="text-center">Dress</h1>
			<hr>
			<div class="row">
				@foreach($dresses as $dress)
					<div class="col-12 col-sm-6 col-lg-4 col-xl-3">
						<div class="card mb-3">
							<img class="card-img-top img-fluid" src="{{ route('img.product', ['image' => $dress->image]) }}" alt="{{ $dress->code }}">
							<div class="card-block">
								<h4 class="card-title">{{ $dress->name }}</h4>
								<p class="card-text">{!! $dress->detail !!}</p>
								<p class="card-text"><small class="text-muted">Last updated {{ date('d-m-Y H:i', strtotime($dress->updated_at)) }}</small></p>
							</div>
						</div>
					</div>
				@endforeach
			</div>
		</div>
	</article>
	<article id="top_bustiers">
		<div class="container">
			<hr>
			<h1 class="text-center">Top Bustier</h1>
			<hr>
			<div class="row">
				@foreach($top_bustiers as $top_bustier)
					<div class="col-12 col-sm-6 col-lg-4 col-xl-3">
						<div class="card mb-3">
							<img class="card-img-top img-fluid" src="{{ route('img.product', ['image' => $top_bustier->image]) }}" alt="{{ $top_bustier->code }}">
							<div class="card-block">
								<h4 class="card-title">{{ $top_bustier->name }}</h4>
								<p class="card-text">{!! $top_bustier->detail !!}</p>
								<p class="card-text"><small class="text-muted">Last updated {{ date('d-m-Y H:i', strtotime($top_bustier->updated_at)) }}</small></p>
							</div>
						</div>
					</div>
				@endforeach
			</div>
		</div>
	</article>
</section>

<section id="contact" class="py-5">
	<div class="container text-center">
		<h1 class="display-1 mb-5">Contact Us</h1>
		<div class="row">
			<div class="col-12 text-center mb-3">
				<strong>Gradiyanto Putera H.</strong> (WA: +62 813-9501-5265)
			</div>
			<div class="col-12 text-center mb-3">
				<strong>Fanny Rantelinggi</strong> (WA: +82 10-4683-2141)
			</div>
			<div class="col-12">
				<p></p>
			</div>
			<div class="col-5 text-right mb-3">
				Instagram
			</div>
			<div class="col-1 text-right mb-3">
				:
			</div>
			<div class="col-6 mb-3 text-left">
				<a href="https://www.instagram.com/iog.indonesia" target="_blank">@iog.indonesia</a>
			</div>
			<div class="col-5 text-right mb-3">
				LINE@App (LINEat)
			</div>
			<div class="col-1 text-right mb-3">
				:
			</div>
			<div class="col-6 mb-3 text-left">
				@cmo3184m
			</div>
			<div class="col-5 text-right mb-3">
				Facebook Page
			</div>
			<div class="col-1 text-right mb-3">
				:
			</div>
			<div class="col-6 mb-3 text-left">
				<a href="https://www.facebook.com/iog.indonesia" target="_blank">www.facebook.com/iog.indonesia</a>
			</div>
			<div class="col-5 text-right mb-3">
				Tokopedia
			</div>
			<div class="col-1 text-right mb-3">
				:
			</div>
			<div class="col-6 mb-3 text-left">
				<a href="https://www.tokopedia.com/iog" target="_blank">Ireum Eomneun Gage</a>
			</div>
		</div>
	</div>
</section>
@endsection

@section('footer')
	@include('layouts.footer.welcome')
@endsection


@section('script')
<script>
	$("#homeBtn").click(function(e) {
		e.preventDefault();
		$('html, body').animate({
			scrollTop: $("header").offset().top - 54
		}, 1000);
	});

	$("#blouseBtn").click(function(e) {
		e.preventDefault();
		$('html, body').animate({
			scrollTop: $("article#blouses").offset().top - 55
		}, 1000);
	});

	$("#dressBtn").click(function(e) {
		e.preventDefault();
		$('html, body').animate({
			scrollTop: $("article#dresses").offset().top - 55
		}, 1000);
	});

	$("#topBustierBtn").click(function(e) {
		e.preventDefault();
		$('html, body').animate({
			scrollTop: $("article#top_bustiers").offset().top - 55
		}, 1000);
	});

	$("#contactBtn").click(function(e) {
		e.preventDefault();
		$('html, body').animate({
			scrollTop: $("section#contact").offset().top - 54
		}, 1000);
	});
</script>
@endsection
