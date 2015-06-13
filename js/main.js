(
	function($){
		$(document).ready(function(){
			$('#generateForm' ).submit(function(e){
				e.preventDefault();
				var $newPassword = $('#newPassword');
				var newPassword = $newPassword.val();
				if(newPassword == '')
				{
					newPassword = generateRandomPassword(8);
					$newPassword.val(newPassword);
					$newPassword.addClass('used');
				}
				requestNewHashedPassword(newPassword);

			});
			function generateRandomPassword(plength){
				var keylist="abcdefghijklmnopqrstuvwxyz123456789";
				var temp='';
				for (i=0;i<plength;i++)
					temp+=keylist.charAt(Math.floor(Math.random()*keylist.length))
				return temp;

			}
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
				$resultContainer.fadeIn();
				$hashedPassword.addClass('used');

			}
		});
	}
)(jQuery);