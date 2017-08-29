@if($stock->type == "SOF" && $stock->size == 1)  {{ strtoupper("1 Seater") }}
	@elseif($stock->type == "SOF" && $stock->size == 2)  {{ strtoupper("2 Seater") }}
	@elseif($stock->type == "SOF" && $stock->size == 3)  {{ strtoupper("3 Seater") }}
	@elseif($stock->type == "SOF" && $stock->size == 4)  {{ strtoupper("4 Seater") }}
	@elseif($stock->type == "DINTBL" && $stock->size == 1)  {{ strtoupper("1 Seater") }}
	@elseif($stock->type == "DINTBL" && $stock->size == 2)  {{ strtoupper("2 Seater") }}
	@elseif($stock->type == "DINTBL" && $stock->size == 3)  {{ strtoupper("3 Seater") }}
	@elseif($stock->type == "DINTBL" && $stock->size == 4)  {{ strtoupper("4 Seater") }}
	@elseif($stock->type == "DINTBL" && $stock->size == 5)  {{ strtoupper("5 Seater") }}
	@elseif($stock->type == "DINTBL" && $stock->size == 6)  {{ strtoupper("6 Seater") }}
	@elseif($stock->type == "DINTBL" && $stock->size == 7)  {{ strtoupper("7 Seater") }}
	@elseif($stock->type == "DINTBL" && $stock->size == 8)  {{ strtoupper("8 Seater") }}
	@elseif($stock->type == "DINTBL" && $stock->size == 9)  {{ strtoupper("9 Seater") }}
	@elseif($stock->type == "DINTBL" && $stock->size == 10)  {{ strtoupper("10 Seater") }}
	@elseif($stock->type == "DINTBL" && $stock->size == 11)  {{ strtoupper("11 Seater") }}
	@elseif($stock->type == "DINTBL" && $stock->size == 12)  {{ strtoupper("12 Seater") }}
	@elseif($stock->type == "BED" && $stock->size == 1)  {{ strtoupper("Single") }}
	@elseif($stock->type == "BED" && $stock->size == 2)  {{ strtoupper("Queen") }}
	@elseif($stock->type == "BED" && $stock->size == 3)  {{ strtoupper("King") }}
	@elseif($stock->type == "BED" && $stock->size == 4)  {{ strtoupper("Super King") }}
	@else
		{{ $stock->size }}
@endif