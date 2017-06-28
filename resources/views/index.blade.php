@extends('layouts.index')

@section('scripts')

<script>

	$(document).ready(function() {



	

		     $("#registruvanje").click(function(){


			   $('#myModal').modal('show');

			  });

		     $("form a").click(function(){


			    $("#register").css("display","none");
			    $("#login").css("display","none");
			    $("#forgot").css("display","block");

			  });

		     $("form .btn-info").click(function(){


			    $("#register").css("display","block");
			    $("#login").css("display","none");
			    $("#forgot").css("display","none");

			  });

		     



		    
});
</script>

@stop

