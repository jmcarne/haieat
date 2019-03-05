<?php
include 'header.php';
$project_list = $student_obj->project_list();
?>
<div class="container " > 
    <div class="row content">
        <!--a  href="create-student-info.php"  class="button button-purple mt-12 pull-right">Alta projecte</a--> 
        <h3>Informació extesa projectes</h3>
        <?php
        if (isset($_SESSION['message'])) {
            echo "<p class='custom-alert'>" . $_SESSION['message'] . "</p>";
            unset($_SESSION['message']);
        }
        ?>
        <table class="table">
            <thead>
                <tr>
                    <th>Nom projecte</th>
                    <th>E-mail client</th>
                    <th>Manager</th>
                    <th>Database</th>
					<th>Programation</th>
					<th>ERP</th>
					<th>Devices</th>
                    <th class="text-right">Acció</th>
                </tr>
            </thead>
            <tbody>
<?php
if ($project_list->num_rows > 0) {
  while ($row = $project_list->fetch_assoc()) {
     ?>
             <tr>
                <td><?php echo $row["project_name"] ?></td>
                <td><?php echo $row["email_client"] ?></td>
                <td><?php echo $row["project_manager"] ?></td>
                <td><?php echo $row["database"] ?></td>
				<td><?php echo $row["programation"] ?></td>
				<td><?php echo $row["erp"] ?></td>
				<td><?php echo $row["devices"] ?></td>
                <td class="text-right">
                    <a  href="<?php echo 'delete-student-info.php?id=' . $row["student_id"] ?>" class="button button-red">Borrar</a>  
                    <a  href="<?php echo 'update-student-info.php?id=' . $row["student_id"] ?>" class="button button-blue">Editar</a>  
                    <a href="<?php echo 'read-student-info.php?id=' . $row["student_id"] ?>" class="button button-green">Veure</a>
                </td>
            </tr>
    <?php
    }
}
?>
           </tbody>
        </table>

    </div>
</div>
<?php
include 'footer.php';
?>  

