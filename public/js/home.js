$(document).ready(function(){
    $(".covbtn").click(function(){
        $(".box").slideToggle(1000);
});
});



$(document).on('click','.update_post',function(){

	var id=$(this).attr('post_id');
	$('#myId').val(id);
	
});

$(document).on('click','.delete_post',function(){

	var id=$(this).attr('del_post_id');
	$('#delId').val(id);
	
});

$(document).ready(function() {
    $('#example').DataTable();
} );