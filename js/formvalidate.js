 $(document).ready(function(){
			
	/*		$('#sign_up div.label-wrapper img').hover(
			function () {
			  $(this).attr("src","img/fb1.png");
			},
			function () {
			$(this).attr("src","img/fb.png");
			
			});*/
    $("#commentForm").validate({
		rules: { 
            name: { 
                required: true, 
                minlength: 4
            //    remote: "users.php" 
            }, 
			admn: { 
                digits:true,
				minlength:4,
            //    remote: "users.php" 
            }, 
			mobile: { 
                digits:true,
				minlength:10
			//	maxlenght:10
				//exactlength: 10
            //    remote: "users.php" 
            }, 
            email: { 
                required: true, 
                email: true 
           //     remote: "emails.php" 
            }, 
        },
        messages: { 
            name: { 
                required: "Invalid Username", 
                minlength: jQuery.format("Enter at least {0} characters")//, 
               // remote: jQuery.format("{0} is already in use") 
            }, 
			admn	: { 
                required: "Invalid ADMN", 
                minlength: jQuery.format("Enter  {0} digits")
               // remote: jQuery.format("{0} is already in use") 
            }, 
            mobile: { 
                required: "Invalid Number", 
                minlength: jQuery.format("{0} digits is Required") ,
			//	maxlength: jQuery.format("{0} digits is Required") ,
				digits:jQuery.format("Invalid digits")
            }, 
			
            email: { 
                required: "Invalid Email", 
                minlength: "Invalid Email", 
              /*  remote: jQuery.format("{0} is already in use")*/
            } 
        }, 
        // specifying a submitHandler prevents the default submit, good for the demo 
	/* submitHandler: function() { 
           function submit(){ 
		    $('label[for="fb"]').css('visibility','hidden');
			$('#commentForm').submit();
		   }
		   if(document.getElementById("fb").value==1) submit();
		   else {
			  $('label[for="fb"]').css('visibility','visible');
		   }
        }
        // set this class to error-labels to indicate valid fields 
	/*	invalidHandler: function(form, validator) {
        var errors = validator.numberOfInvalids();
        if (errors) {
            alert("error");
        }
		
    }   ,*/ 
    });
  });