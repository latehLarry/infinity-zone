@extends('master.main')

@section('title', 'Notifications')

@section('content')

<div class="content-browsing">
	<div class="h2 mb-15">Notifications ({{ auth()->user()->totalUnreadNotifications() }})</div>
	<form action="{{ route('delete.notifications') }}" method="post" class="mb-10">
		@csrf
		@method('delete')
		<button type="submit">clear</button>
	</form>
	<table class="zebra table-space">
		<thead>
			<tr>
				<th class="text-left">notification</th>
			</tr>
		</thead>
		<tbody>
			@forelse($notifications as $notification)
			<tr>
				<td style="text-align: left;">{!! $notification->label !!}</td>
			</tr>
			@empty
			<tr>
				<td colspan="2">Hmm... Looks like you don't have any notifications!</td>
			</tr>
			@endforelse
			<tr>
				<td colspan="2">{{ $notifications->links('includes.components.pagination') }}</td>
			</tr>
		</tbody>
	</table>
</div>

@stop