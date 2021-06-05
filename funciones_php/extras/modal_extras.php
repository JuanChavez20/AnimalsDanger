 

<div class="modal fade" tabindex="-1" role="dialog" id="editAlumnoModal">
	<div class="modal-dialog" role="document">

		<div class="modal-content">
			<div class="modal-header">

				<h4 class="modal-title"> Editar un Alumno </h4>
				<button type="button" class="close" data-dismiss="modal" arial-label="close"><span arial-hidder="true">&times;</span>
				</button>
			</div>
			<div class="modal-body"> 
				<form id="editAlumnoh" name="editAlumnoh">
					<div class="form-group label-floating">
						<label class="control-label">fechas</label>
						<input class="form-control" type="Date" id="fechasT" name="fechasT"/>
						<input class="form-control" type="hidden" id="id_alumno" name="id_alumno"/>
					</div>
					<div class="form-group label-floating">
						<label class="control-label">carrera</label>
						<select class="form-control" id="carreraT" name="carreraT"/>
						<option>Tecnogias de la informacion y comunicacion</option>
						<option>Biotecnoogia</option>
						<option>Gastronomia</option>
					</select>
					</div>
					<div class="form-group label-floating">
						<label class="control-label">materia</label>
						<select class="form-control" id="materiaT" name="materiaT"/>
						<option>Integradora</option>
						<option>Diseño</option>
						<option>Formacion</option>
						<option>Aplicaciones web</option>
						<option>Estructura de datos</option>
						<option>English</option>
					</select>
					</div>
					<div class="form-group">
						<label class="control-label">cuatrimestre</label>
						<select class="form-control" id="cuatrimestreT" name="cuatrimestreT"/>
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
						<option>6</option>
						<option>7</option>
						<option>8</option>
						<option>9</option>
						<option>10</option>

					</select>
				</div>

			</form>
		</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="CANCELAR"/>
					<input type="submit" class="btn btn-info btn-raised btn-sm actualizar"  value="GUARDAR CAMBIOS"/>
				</div>


	</div>
</div>

