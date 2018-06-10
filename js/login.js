$("#login").click(function(){
	var email = encodeURIComponent( $("#emailR").val() );
	var password = encodeURIComponent( $("#passwordR").val() );
	var username = encodeURIComponent( $("#usernameR").val() );
	console.log(email);
	console.log(password);
	console.log("-----");

	$.ajax({

		url : "php/verif.php" ,
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
