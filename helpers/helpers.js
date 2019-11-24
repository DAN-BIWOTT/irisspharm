function deleteMe(table_name,table_primary_key,primary_key_variant){
	var data = {'tbname':table_name,'idName':table_primary_key,'pkv':primary_key_variant};

	jQuery.ajax({
		url:'/irisspharm/admin/partials/deleteMe.php',
		method:"POST",
		data:data,
		success:function(data){
			location.reload();
		},
		error:function(){}
	});
}