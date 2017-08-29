 @foreach($items as $item)
	@if($item->id == $item->id)
	{{ $item->descrition }}
	@endif
@endforeach  