@extends('layouts.index')

@section('styles')

.language {
	
	margin-bottom: 2%;
}

@stop

@section('scripts')

<script>

	$(document).ready(function() {



	

		     $("#registruvanje").click(function(){


			   $('#myModal').modal('show');

			  });

		   //   $("form a").click(function(){


			  //   $("#register").css("display","none");
			  //   $("#login").css("display","none");
			  //   $("#forgot").css("display","block");

			  // });

		     $("form .btn-info").click(function(){


			    $("#register").css("display","block");
			    $("#login").css("display","none");
			    $("#forgot").css("display","none");

			  });

		     
		     $(document).on('change', 'select', function() {
				    var language = $(this).val(); // the selected options’s value

				    // if you want to do stuff based on the OPTION element:
				    var opt = $(this).find('option:selected')[0];
				    // use switch or if/else etc.
				    // console.log(opt);

				    $( "input[name='return']" ).val(language);
				});


		    
});
</script>

@stop

