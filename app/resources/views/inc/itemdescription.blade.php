@if($order->item_type == "SOF" && $order->item_size == 1)  {{ strtoupper("1 Seater") }}
	@elseif($order->item_type == "SOF" && $order->item_size == 2)  {{ strtoupper("2 Seater") }}
	@elseif($order->item_type == "SOF" && $order->item_size == 3)  {{ strtoupper("3 Seater") }}
	@elseif($order->item_type == "SOF" && $order->item_size == 4)  {{ strtoupper("4 Seater") }}
	@elseif($order->item_type == "DINTBL" && $order->item_size == 1)  {{ strtoupper("1 Seater") }}
	@elseif($order->item_type == "DINTBL" && $order->item_size == 2)  {{ strtoupper("2 Seater") }}
	@elseif($order->item_type == "DINTBL" && $order->item_size == 3)  {{ strtoupper("3 Seater") }}
	@elseif($order->item_type == "DINTBL" && $order->item_size == 4)  {{ strtoupper("4 Seater") }}
	@elseif($order->item_type == "DINTBL" && $order->item_size == 5)  {{ strtoupper("5 Seater") }}
	@elseif($order->item_type == "DINTBL" && $order->item_size == 6)  {{ strtoupper("6 Seater") }}
	@elseif($order->item_type == "DINTBL" && $order->item_size == 7)  {{ strtoupper("7 Seater") }}
	@elseif($order->item_type == "DINTBL" && $order->item_size == 8)  {{ strtoupper("8 Seater") }}
	@elseif($order->item_type == "DINTBL" && $order->item_size == 9)  {{ strtoupper("9 Seater") }}
	@elseif($order->item_type == "DINTBL" && $order->item_size == 10)  {{ strtoupper("10 Seater") }}
	@elseif($order->item_type == "DINTBL" && $order->item_size == 11)  {{ strtoupper("11 Seater") }}
	@elseif($order->item_type == "DINTBL" && $order->item_size == 12)  {{ strtoupper("12 Seater") }}
	@elseif($order->item_type == "BED" && $order->item_size == 1)  {{ strtoupper("Single") }}
	@elseif($order->item_type == "BED" && $order->item_size == 2)  {{ strtoupper("Queen") }}
	@elseif($order->item_type == "BED" && $order->item_size == 3)  {{ strtoupper("King") }}
	@elseif($order->item_type == "BED" && $order->item_size == 4)  {{ strtoupper("Super King") }}
	@else
		{{ $order->item_size }}
@endif