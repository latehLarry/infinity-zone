<div class="content-sidebar mt-15">
	<div class="notices"  style="overflow-y: auto; height: 180px">
		<span class="notices-header">Your vendors</span>
		<ul class="notices-list">
			@forelse($sellers as $seller)
			<li><a href="{{ route('seller', ['seller' => $seller->seller->username]) }}">{{ $seller->seller->username }}</a></li>
			@empty
			<li style="color: #333">You are not a fan of any vendors yet!</li>
			@endforelse
		</ul>
	</div>
</div>