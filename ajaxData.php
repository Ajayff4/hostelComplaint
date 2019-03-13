<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>

</body>
<script type="text/javascript">
$(document).ready(function(){
    $('#category').on('change',function(){
        var category = $(this).val();
        if(category){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'category='+category,
                success:function(html){
                    $('#subCat').html(html);
                }
            }); 
        }else{
            $('#subCat').html('<option value="">Select category first</option>');
        }
    });
});
</script>
</html>