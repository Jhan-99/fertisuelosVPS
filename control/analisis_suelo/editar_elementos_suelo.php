 <?php  
 //insert.php  
include('../../db/dbconnect.php');
if(isset($_POST["column_name"]))  
 {  
 
	$id = $_POST["id"];  
	$text = $_POST["text"];  
	$column_name = $_POST["column_name"];  
	$sql = "UPDATE ana_suelo_elementos SET ".$column_name."='".$text."' WHERE id_ana_elementos='".$id."'";  
	if(mysqli_query($conexion, $sql))  
	{  
		echo 'Dato actualizado';  
	}  
  
 }  

 ?>

<script>
 $(document).ready(function(){
        $('.tabs').tabs();
        $(document).on('click', '#get_tab_for_var_e', function(){   
        $('#vars_s').removeClass('disabled');
        $('ul.tabs').tabs('select_tab', 'vars_sign');
    });
     
  });     
</script>
