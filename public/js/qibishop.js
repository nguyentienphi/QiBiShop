$(document).ready(function(){
	$('.delete').click(function(){
		var result = confirm('Bạn có muốn xóa');
		if(result)
		{
			return true;
		} else {
			return false;
		}
	});
	$('#cart_online').hide();
	$('#tructuyen').click(function(){
		$('#cart_online').show();
	});
	$('#tainha').click(function(){
		$('#cart_online').hide();
	});
});