var root = 'http://jsonplaceholder.typicode.com';

$(document).ready(function(){

	$("#btn").click(function(){

		$.ajax({
		  url: root + '/posts/1',
		  method: 'GET'
		}).then(function(data) {
		  // console.log(data);
		  data = JSON.stringify(data);
		  $("#data").text(data);
		});
	});
});
