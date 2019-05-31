@include('head')
</br>
<form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputDateTime1">Fecha y Hora de inicio</label>
      <input type="datetime-local" class="form-control" id="inputDateTime1">
    </div>
    <div class="form-group col-md-6">
      <label for="inputDateTime2">Fecha y Hora de fin</label>
      <input type="datetime-local" class="form-control" id="inputDateTime2">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCompania">Compañía Aerea</label>
        <select class="form-control" id="inputcompania">
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
        </select>
      </div>
      <div class="form-group col-md-6">
        <label for="inputHandling">Handling</label>
          <select class="form-control" id="inputHandling">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
          </select>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputTipoIncidencia">Tipo de incidenca</label>
      <select class="form-control" id="inputTipoIncidencia">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
      </select>
    </div>
    <div class="form-group col-md-4">
      <label for="inputCausante">Causante</label>
      <select class="form-control" id="inputCausante">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
      </select>
    </div>
    <div class="form-group col-md-4">
      <label for="inputTipoCausante">Tipo Causante</label>
      <select class="form-control" id="inputTipoCausante">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
      </select>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputObservaciones">Observaciones</label>
      <textarea class="form-control" rows="5" id="inputObservaciones"></textarea>
    </div>
    <div class="form-group col-md-6">
      <label for="inputSolucion">Solución</label>
      <textarea class="form-control" rows="5" id="inputSolucion"></textarea>
    </div>
  </div>
  <center>
    <button type="submit" class="btn btn-primary">Guardar</button>
    <a href="{{ url('/coordinador/listar/incidencia/')}}" class="btn btn-secondary" role="button">Cancelar</a>
  </center>
</form>

@include('footer')
