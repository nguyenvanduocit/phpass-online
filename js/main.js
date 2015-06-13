(
	function($){
		$(document).ready(function(){
			$('#generateForm' ).submit(function(e){
				e.preventDefault();
				var $newPassword = $('#newPassword');
				var newPassword = $newPassword.val();
				requestNewHashedPassword(newPassword);

			});
			function requestNewHashedPassword(newPassword){
				$.ajax({
					url:'ajax.php',
					type: 'POST',
					dataType: 'json',
					data:{password:newPassword},
					beforeSend:function(){
						showResult('Generating ...');
					},
					success: function( resp ) {
						console.log( resp );
						if(resp.success){
							showResult(resp.data);
						}
						else
						{
							showResult(resp.msg);
						}
					},
					error: function( req, status, err ) {
						showResult( 'something went wrong', status, err );
						console.log(status, err);
					}
				});
			}
			function showResult(result){
				var $resultContainer =$('#resultContainer');
				var $hashedPassword = $resultContainer.find('#hashedPassword');
				$hashedPassword.val(result);
				$resultContainer.slideDown();

			}
		});
	}
)(jQuery);