$("#bodytable td").dblclick(function(){
	addinput($(this));
});

function saveinput(obj){
	var string = obj.val();
	parentobj = obj.parent();
	if(obj.parent().hasClass('tadata')){
		if($.trim(string) == ''){
			parentobj.html("<div class='divimage'></div><div class='divdata'>--&nbsp; &nbsp; &nbsp; &nbsp;</div>");
		}else{
			parentobj.html("<div class='divimage'></div><div class='divdata'>"+string+"</div>");
		}	
	}else{
		parentobj.html(string);
	}
}

function addinput(obj){
	var inputlength = obj.children('input').length
	if(inputlength > 0){
		return false;
	}
	if(obj.hasClass('tadata')){
		var string = obj.children('.divdata').html();
	}else{
		var string = obj.html();
	}
	var length = parseInt(obj.width())-10;
	var color = obj.css('background-color');
	obj.html('<input type="text" style="border:0px solid #666666;font-size:13px;font-family: 宋体;height:15px;background-color:'+color+';width:'+length+'px;"  id="editinput" value="'+string+'" onblur="saveinput($(this))" />');
	$("#editinput").focus();
}