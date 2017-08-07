@if(count($wss) > 0)
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="5000">
		<ol class="carousel-indicators">
			@foreach($wss as $ws)
				 <li data-target="#carouselExampleIndicators" data-slide-to="{{ $loop->index }}" @if($loop->first) class="active" @endif></li>
			@endforeach
		</ol>
		<div class="carousel-inner" role="listbox">
			@foreach($wss as $ws)
				<div class="carousel-item @if($loop->first) active @endif">
					<img class="d-block img-fluid" src="{{ route('img.welcomeSlider', ['image' => $ws->image]) }}" alt="{{ $ws->caption_title }}">
					<div class="carousel-caption d-none d-md-block">
						<h3>{{ $ws->caption_title }}</h3>
						<p>{{ $ws->caption_description }}</p>
					</div>
				</div>
			@endforeach
		</div>
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
@endif
