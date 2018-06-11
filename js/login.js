$("#register").click(function(){
	var email = encodeURIComponent( $("#emailR").val() );
	var password = encodeURIComponent( $("#passwordR").val() );
	var username = encodeURIComponent( $("#usernameR").val() );

	$.ajax({

		url : "php/register.php" ,
		type : "POST",
		data : "email=" + email + "&password=" + password + "&username=" + username,

		success: function(data){
			console.log(data);
			var return_sub=JSON.parse(data);

			document.getElementById("return").innerHTML = return_sub.message;
			if(return_sub.success == 1){

				document.getElementById("emailR").value = "";
				document.getElementById("passwordR").value = "";

			}



		}

	});
});

$("#login").click(function(){
	var password = encodeURIComponent( $("#passwordL").val() );
	var username = encodeURIComponent( $("#usernameL").val() );

	$.ajax({

		url : "php/login.php" ,
		type : "POST",
		data : "username=" + username + "&password=" + password,

		success: function(data){
			console.log(data);
			var return_sub=JSON.parse(data);

			document.getElementById("return").innerHTML = return_sub.message;
			if(return_sub.success == 1){

				document.getElementById("emailL").value = "";
				document.getElementById("passwordL").value = "";

			}



		}

	});
});

