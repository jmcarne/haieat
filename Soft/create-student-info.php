<?php
include 'header.php';
if (isset($_POST['create_student'])) {
    $student_obj->create_student_info($_POST);
}
?>
<div class="container"> 
    <div class="row content">
        <a  href="index.php"  class="button button-purple mt-12 pull-right">Veure llista projectes</a> 
        <h3>Crear info Projecte</h3>
        <hr/>
        <form method="post" action="">
            <div class="form-group">
                <label for="student_name">Nom projecte:</label>
                <input type="text" name="student_name" id="student_name" class="form-control" required maxlength="50">
            </div>
            <div class="form-group">
                <label for="email_address">Client/email:</label>
                <input type="email" class="form-control" name="email_address" id="email_address" required maxlength="50">
            </div>
            <div class="form-group">
                <label for="contact">Proveedor:</label>
                <!--<input type="text" class="form-control" name="contact" id="contact"  maxlength="50">-->
				<select class="form-control" name="contact" id="contact">
                    <option value="P00160" selected>Selba</option>
					<option value="P01583">JPradas</option>
                    <option value="P02906" >Auctus</option>
                    <option value="P01879" >Tracestore</option>
					<option value="P01597" >Novatec</option>
					<option value="P02673" >Incod</option>
					<option value="P02002" >Ingimec</option>
					<option value="P01190" >Divilop</option>
                </select>
			</div>
            <div class="form-group">
                <label for="gender">Tipus projecte:</label>
                <select class="form-control" name="gender" id="gender">
                    <option value="SGA" selected>SGA</option>
					<option value="SGALite">SGA Lite</option>
                    <option value="MPO" >MPO</option>
                    <option value="Integra" >Integra</option>
					<option value="Marcatge/Etiquetatge" >Marcatge/Etiquetatge</option>
					<option value="Tracabilitat" >Tracabilitat</option>
					<option value="Integra" >Integra</option>
					<option value="MDNet" >MDNet</option>
                </select>
            </div> 
            <div class="form-group">
                <label for="country">Comercial:</label>
                <!--input type="text" name="country" id="country" class="form-control"  maxlength="50"-->
				<select class="form-control" name="country" id="country">
                    <option value="DC" selected>Direcció Comercial</option>
					<option value="JPE" >Jordi Espachs</option>
                    <option value="RHE" >Rafael Hernández</option>
					<option value="" >Albert Boladeras</option>
					<option value="RHE" >Rafael Hernández</option>
					<option value="RHE" >Rafael Hernández</option>
                </select>
            </div>
			<div class="form-group">
                <label for="observacions">Observacions:</label>
                <!--input type="text" name="country" id="country" class="form-control"  maxlength="50"-->
				<select class="form-control" name="observacions" id="observacions">
                    <option value="" selected></option>
					<option value="Visio" >Visio</option>
                    <option value="RFID" >RFID</option>
                </select>
            </div>
            <input type="submit" class="button button-green  pull-right" name="create_student" value="Submit"/>
        </form> 
    </div>
</div>
<hr/>
<?php
include 'footer.php';
?>

