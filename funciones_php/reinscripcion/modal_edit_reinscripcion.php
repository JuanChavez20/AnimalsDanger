 

 <div class="modal fade" tabindex="-1" role="dialog" id="editAlumnoModal">
 	<div class="modal-dialog" role="document">

 		<div class="modal-content">
 		<div class="modal-header">

 			<h4 class="modal-title"> Modificar Información </h4>
 			<button type="button" class="close" data-dismiss="modal" arial-label="close"><span arial-hidder="true">&times;</span>
 			</button>
 		</div>
 		<div class="modal-body">
 			<form name="edit_alumno" id="edit_alumno">


 				<div class="form-group label-floating">
 					<label class="modal-title">Matricula</label>
 					<input class="form-control" type="text" id="edit_matriculaT" name="edit_matriculaT" disabled="disabled">
 					<input type="hidden" name="id_alumno" id="id_alumno"/>
 				</div>

 				<div class="form-group label-floating">
  					<label class="modal-title">Correo</label> 
 					<input class="form-control" type="text" id="edit_emailT" name="edit_emailT">
 				</div>

 			
 				<div class="form-group label-floating">
					<label class="modal-title">Carrera</label>
  					<input type="text" class="form-control" id="edit_carreraT" name="edit_carreraT" disabled="disabled">
 				</div>

 				<div class="form-group label-floating">
  					<label class="modal-title">Cuatrimestre</label>
 					<input class="form-control" type="text" id="edit_cuatrimestreT" name="edit_cuatrimestreT">
 				</div>

 				<div class="form-group label-floating">
  					<label class="modal-title">No Folio</label>
 					<input class="form-control" type="text" id="edit_folioT" name="edit_no_folioT" disabled="disabled">
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

 