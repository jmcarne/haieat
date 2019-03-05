<?php
include 'header.php';
if (isset($_GET['id'])) {
    $student_info = $student_obj->view_student_by_student_id($_GET['id']);
    if (isset($_POST['update_student']) && $_GET['id'] === $_POST['id']) {
        $student_obj->update_student_info($_POST);
    }
} else {
    header('Location: index.php');
}
?>
<div class="container " > 
    <div class="row content">
        <a href="index.php"  class="button button-purple mt-12 pull-right">Veure llista projectes</a> 
        <h3>Actualitzar informació projecte</h3>
        <?php
        if (isset($_SESSION['message'])) {
            echo "<p class='custom-alert'>" . $_SESSION['message'] . "</p>";
            unset($_SESSION['message']);
        }
        ?>

        <hr/>
        <form method="post" action="">
            <input type="hidden" name="id" value="<?php if (isset($student_info['student_id'])) {
            echo $student_info['student_id'];
        } ?>" id=""  >
            <div class="form-group">
                <label for="student_name">Projecte:</label>
                <input type="text" name="student_name" value="<?php if (isset($student_info['student_name'])) {
                   echo $student_info['student_name'];
        } ?>" id="student_name" class="form-control" required maxlength="50">
            </div>
            <div class="form-group">
                <label for="email_address">Client/email:</label>
                <input type="email" class="form-control" value="<?php if (isset($student_info['email_address'])) {
            echo $student_info['email_address'];
        } ?>" name="email_address" id="email_address" required maxlength="50">
            </div>
            <div class="form-group">
                <label for="contact">Proveedor:</label>
                <input type="text" class="form-control" value="<?php if (isset($student_info['contact'])) {
            echo $student_info['contact'];
        } ?>" name="contact" id="contact"  maxlength="50">
            </div>
            <div class="form-group">
                <label for="gender">Tipus projecte:</label>
                <select class="form-control" name="gender" id="gender">
                    <option value="">No value</option>
					<option value="SGA">SGA</option>
					<option value="SGALite">SGA Lite</option>
					<option value="MPO">MPO</option>
					<option value="Integra">Integra</option>
					<option value="MDNet">MDNet</option>
                </select>
            </div> 
            <div class="form-group">
                <label for="country">Comercial:</label>
                <input type="text" name="country" value="<?php if (isset($student_info['country'])) {
            echo $student_info['country'];
        } ?>" id="country" class="form-control"  maxlength="50">
            </div>
			<div class="form-group">
                <label for="observacions">Observacions:</label>
                <select class="form-control" name="observacions" id="observacions">
                    <option value=""></option>
					<option value="Visio">Visio</option>
					<option value="Marcatge/Etiquetatge">Marcatge/Etiquetatge</option>
					<option value="RFID">RFID</option>
                </select>
            </div> 
            <input type="submit" class="button button-green  pull-right" name="update_student" value="Actualitzar"/>
        </form> 
    </div>
</div>
<hr/>
<?php
include 'footer.php';
?>

