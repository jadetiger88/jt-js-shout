$(document).ready(function() {
	$("#submit").on("click", function() {
		var name = $("#name").val(); 
		var shout = $("#shout").val();

		if (name == "" || shout == "") {
			alert("Please fill in name and shout");
			return false; 
		}


		var date = getDate(); 
		var sqlString = "name=" + name + "&shout=" + shout + "&date=" + date;

		$.ajax({
			type:"POST", 
			url:"../js-shout/shout.php",
			data:sqlString, 
			cache:false,
			success:function(html) {
				$("#shouts").prepend(html);
			}
		});

		return false; 
	});
});

function getDate() {
	var date;
	    date = new Date();
	    date = date.getUTCFullYear() + '-' +
	            ('00' + (date.getUTCMonth() + 1)).slice(-2) + '-' +
	            ('00' + date.getUTCDate()).slice(-2) + ' ' +
	            ('00' + date.getUTCHours()).slice(-2) + ':' +
	            ('00' + date.getUTCMinutes()).slice(-2) + ':' +
	            ('00' + date.getUTCSeconds()).slice(-2);     

	return date;

 }
