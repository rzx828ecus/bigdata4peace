window.onload = function(){
	//$('#username_input').fadeOut();
	
}


Onuser = {
	loginShow: function(){
		$('#regis-btn').fadeOut();
		$('#login-btn').fadeOut();
		$('#login-form').append('<div class="input-group" id="password_input">'+
			'<input type="password" id="login-pw-data" class="form-control" placeholder="Password">'+
		'</div>');
		$('#login-form').append('<div class="input-group" id="username_input">'+
		  '<input type="text" id="login-name-data" class="form-control" placeholder="Username">'+
		'</div>');
		$('#login-form').append('<div id="usual" onclick="Onuser.sendRequest(\'login\')" class="btn-group"><button type="button" class="btn btn-default">Login</button></div>');
		$('#login-form').append('<span id="answer"></span>');
	},
	registerShow: function(){
		$('#regis-btn').fadeOut();
		$('#login-btn').fadeOut();
		$('#login-form').append('<div class="input-group" id="password_input">'+
			'<input type="password" id="regis-pw-data" class="form-control" placeholder="Password">'+
		'</div>');
		$('#login-form').append('<div class="input-group" id="username_input">'+
		  '<input type="text" id="regis-name-data" class="form-control" placeholder="Username">'+
		'</div>');
		$('#login-form').append('<div id="usual" onclick="Onuser.sendRequest(\'regis\')" class="btn-group"><button type="button" class="btn btn-default">Register</button></div>');
		$('#login-form').append('<span id="answer"></span>');
	},
	sendRequest: function(kind){
		if(kind == "login"){
			var pw = $('#login-pw-data').val(),
			name = $('#login-name-data').val(),
			url = "login.php";
		}else{
			var pw = $('#regis-pw-data').val(),
			name = $('#regis-name-data').val();
			url = "regis.php";
		}
    var request = {
    		kind: kind,
        name: name,
        pw: pw
    }

    $('#answer').html('sending..');

    $('#login-form').append('<form style="display: none" action="'+url+'" method="post">'+
		'<input id="name" type="text" name="login_name" value="'+name+'" placeholder="name"></input>'+
		'<input id="password" type="password" name="login_pw" value="'+pw+'" placeholder="password"></input>'+
		'<input id="login-submit" type="submit" value="Login"></input>'+
	'</form>');

    $("#login-submit").click();
	}
}

// // event listeners
// $("#login-btn").click(function(){
// 	preventDefault();
// 	$('#login-form').fadeOut();
// });