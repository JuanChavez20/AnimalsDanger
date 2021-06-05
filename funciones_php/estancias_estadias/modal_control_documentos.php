 

 <div class="modal fade" tabindex="-1" role="dialog" id="editEmpresaModal">
 	<div class="modal-dialog" role="document">

 		<div class="modal-content">
 		<div class="modal-header">

 			<h4 class="modal-title"> Editar Empresa </h4>
 			<button type="button" class="close" data-dismiss="modal" arial-label="close"><span arial-hidder="true">&times;</span>
 			</button>
 		</div>
 		<div class="modal-body">
 			<form name="edit_alumno" id="edit_alumno">


 				<div class="form-group label-floating">
 					<!-- <label class="control-label">Nombre empresa</label> -->
 					<input class="form-control" type="text" id="edit_nombreEM" name="edit_nombreEM">
 					<input type="hidden" name="id_doc" id="id_doc"/>
 				</div>

 				

 				<div class="form-group label">
 					<!-- <label class="control-label">Direccion</label> -->
 					<input type="text" class="form-control" id="edit_direccionEM" name="edit_direccionEM" ></input>
 				</div>

 				<div class="form-group label-floating">
 					<!-- <label class="control-label">Correo</label> -->
 					<input class="form-control" type="email" id="edit_email_userEM" name="edit_email_userEM">
 				</div>

 				<div class="form-group label-floating">
 					<!-- <label class="control-label">Telefono</label> -->
 					<input class="form-control" type="text" id="edit_telefonoEM"  name="edit_telefonoEM">
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

 