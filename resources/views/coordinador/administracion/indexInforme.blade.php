@include('headCoordinador')
</br>
<div class="panel-heading">
    <h2>Generar informe mensual</h2>
</div>
<center>
  <form method="post" action="/coordinador/administracion/informe" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="form-group col-md-4">
      <label>Seleccione el Año</label>
      <select class="form-control" id="anio" name="anio">
        <option value="2019">2019</option>
        <option value="2020">2020</option>
        <option value="2021">2021</option>
        <option value="2022">2022</option>
        <option value="2023">2023</option>
        <option value="2024">2024</option>
        <option value="2025">2025</option>
      </select>
    </div>
    <div class="form-group col-md-4">
      <label>Seleccione el Mes</label>
      <select class="form-control" id="mes" name="mes">
        <option value="enero">Enero</option>
        <option value="febrero">Febrero</option>
        <option value="marzo">Marzo</option>
        <option value="abril">Abril</option>
        <option value="mayo">Mayo</option>
        <option value="junio">Junio</option>
        <option value="julio">Julio</option>
        <option value="agosto">Agosto</option>
        <option value="septiembre">Septiembre</option>
        <option value="octubre">Octubre</option>
        <option value="noviembre">Noviembre</option>
        <option value="diciembre">Diciembre</option>
      </select>
    </div>

      <button type="submit" class="btn btn-primary">Generar</button>
  </form>
</center>
@include('footer')
