
<div class="modal fade" tabindex="-1" role="dialog" id="editMaestroModal">
 	<div class="modal-dialog" role="document">

 		<div class="modal-content">
 		<div class="modal-header">

 			<h4 class="modal-title"> Editar un Alumno </h4>
 			<button type="button" class="close" data-dismiss="modal" arial-label="close"><span arial-hidder="true">&times;</span>
 			</button>
 		</div>
 		<div class="modal-body">
 			<form name="edit_maestro" id="edit_maestro">


 				<div class="form-group label-floating">
 					<!-- <label class="control-label">Name</label> -->
 					<input class="form-control" type="text" id="edit_nombreT" name="edit_nombreT">
 					
 					<input type="hidden" name="id_alumno" id="id_alumno"/> 
 				</div>

 				<div class="form-group label-floating">
<!--  					<label class="control-label">Last Name Pattern</label> -->
						
 					<input class="form-control" type="text" id="edit_apellidopT" name="edit_apellidopT">
 				</div>

 				<div class="form-group label-floating">
<!--  					<label class="control-label">Last Name Mattern</label>
 --> 					
 						<input class="form-control" type="text" id="edit_apellidomT" name="edit_apellidomT">
 				</div>

 				<div class="form-group label-floating">
<!--  					<label class="control-label">Email</label>
 --> 					
 						<input class="form-control" type="text" id="edit_direccionT" name="edit_direccionT">
 				</div>

 				<div class="form-group label-floating">
<!--  					<label class="control-label">Phone</label>
 --> 					
 						<input class="form-control" type="number" id="edit_telefonoT" name="edit_telefonoT">
 				</div>
 				<div class="form-group label-floating">
<!--  					<label class="control-label">Phone</label>
 --> 					
 						<input class="form-control" type="email" id="edit_correoT" name="edit_correoT">
 				</div>
 				<div class="form-group label-floating">
<!--  					<label class="control-label">Phone</label>
 --> 					
 						<input class="form-control" type="text" id="edit_sexoT" name="edit_sexoT">

 				</div>
 				<div class="form-group label-floating">
<!--  					<label class="control-label">Phone</label>
 --> 					
 						<input class="form-control" type="text" id="edit_especialidadT" name="edit_especialidadT">
 				</div>
 				
 				

		</div>
		<div class="modal-footer">
			<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar"/>
			<input type="submit" class="btn btn-info btn-raised btn-sm actualizar"  value="GUARDAR Cambios"/>
		</div>
	</form>


		</div>

 	</div>
 </div>

 