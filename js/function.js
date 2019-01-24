
$(document).ready(function(){
	$('.text-field').change(function(){
		var myusername = $('.text-field').val();
			console.log(myusername);

			$.ajax({
				type: 'POST',
				url: "alspok/mvc/index.php/posts/test",
				data: {myusername: myusername},
				cach: false,
				success: function(data){
					$('.text-field').val(data);
					$('body').css('background-color', 'blue').delay(500);
			}
		});
	});
});
