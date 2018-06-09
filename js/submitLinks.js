$('#submit').click(function(){
	var owner = encodeURIComponent( $('#owner').val() );
	var url = encodeURIComponent( $('#url').val() );
	var fonction = "submit";

	$.ajax({

		url : '../php/submitLinksDb.php' ,
		type : 'POST',
		data : 'owner=' + owner + '&url=' + url + '&fonction=' + fonction,

		success: function(data){
			console.log(data);
			var return_sub=JSON.parse(data);

			document.getElementById('return').innerHTML = return_sub.message;
			if(return_sub.success == 1){

				document.getElementById('owner').value = '';
				document.getElementById('url').value = '';

			}



		}

	});
});


function clic(id){
	var fonction = "clic";

	$.ajax({

		url : '../php/submitLinksDb.php' ,
		type : 'POST',
		data : 'fonction=' + fonction + '&id=' + id,

	});
}

function del(id){
	var fonction = "del";

	$.ajax({

		url : '../php/submitLinksDb.php' ,
		type : 'POST',
		data : 'fonction=' + fonction + '&id=' + id,

		success: function(data){

			document.getElementById('returnClic').innerHTML = "<div class='alert alert-success'>Link deleted !</div>";

		}

	});
}
