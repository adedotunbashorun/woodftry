<script type="text/javascript">
	$(document).ready(function(){
	fadeout(function(){
		$('#success').alert('close');
	},5000);
});
</script>

@if ($flash = session('message'))
	<div class="form-group" >
		<div id="success" class="alert alert-success text-center" role="alert">
		<button class='close' data-dismiss='alert'>&times;</button>
			{{ $flash }}
		</div>
	</div>
@endif