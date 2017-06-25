@extends('layouts.index')

@section('scripts')

<script>

	$(document).ready(function() {



		    setTimeout(function() {

		      $('#myModal').modal('show');
		    }, 3000); // milliseconds

		     $("form a").click(function(){


			    $("#register").css("display","none");
			    $("#forgot").css("display","block");

			  });



		    
});
</script>

@stop