<?php
 include 'header.php';
 

 if(isset($_GET['id'])){
  $student_info=$student_obj->view_student_by_student_id($_GET['id']);
  


     
 }else{
  header('Location: index.php');
 }
 
 
 ?>
<div class="container " > 
    
  <div class="row content">

             <a  href="index.php"  class="button button-purple mt-12 pull-right">Veure llistat projectes</a> 
     
 <h3>Veure informació projecte</h3>
       
     <hr/>
   
    <label >Nom projecte:</label>
   <?php  if(isset($student_info['student_name'])){echo $student_info['student_name']; }?>

<br/>
    <label>Client/email:</label>
  <?php  if(isset($student_info['email_address'])){echo $student_info['email_address'];} ?>
    
    <br/>
    <label >Proveedor:</label>
      <?php  if(isset($student_info['contact'])){echo $student_info['contact'];} ?>
    <br/>

  <label >Tipus projecte:</label>
   <?php  if(isset($student_info['gender'])){echo $student_info['gender'];} ?>
  <br/>
    <label >Comercial:</label>
      <?php  if(isset($student_info['country'])){echo $student_info['country'];} ?>
    <br/>
	<label >Observacions:</label>
      <?php  if(isset($student_info['observacions'])){echo $student_info['observacions'];} ?>
    <br/>
          

    <a href="<?php echo 'update-student-info.php?id='.$student_info["student_id"] ?>" class="button button-blue">Editar</a>

   
  
     
   
  </div>
     
</div>
<hr/>
 <?php
 include 'footer.php';
 ?>

