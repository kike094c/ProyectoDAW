@include('headCoordinador')
</br>
<form method="post" action="/coordinador/insertar/incidencia" enctype="multipart/form-data">
  {!! csrf_field() !!}
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="fecha1">Fecha y Hora de inicio</label>
      <input type="datetime-local" class="form-control" name="fecha1" id="fecha1">
    </div>
    <div class="form-group col-md-4">
      <label for="fecha2">Fecha y Hora de fin</label>
      <input type="datetime-local" class="form-control" name="fecha2" id="fecha2">
    </div>
    <div class="form-group col-md-4">
      <label for="ubicacion">Mostrador/Puerta</label>
      <select class="form-control" id="ubicacion" name="ubicacion">
        <option>Selecciona mostrador o puerta</option>
        <option value="M02">Mostrador 2</option>
        <option value="M03">Mostrador 3</option>
        <option value="M04">Mostrador 4</option>
        <option value="M05">Mostrador 5</option>
        <option value="M06">Mostrador 6</option>
        <option value="M07">Mostrador 7</option>
        <option value="M08">Mostrador 8</option>
        <option value="M09">Mostrador 9</option>
        <option value="M10">Mostrador 10</option>
        <option value="M11">Mostrador 11</option>
        <option value="M12">Mostrador 12</option>
        <option value="M13">Mostrador 13</option>
        <option value="M14">Mostrador 14</option>
        <option value="M15">Mostrador 15</option>
        <option value="M16">Mostrador 16</option>
        <option value="M17">Mostrador 17</option>
        <option value="M18">Mostrador 18</option>
        <option value="M19">Mostrador 19</option>
        <option value="M20">Mostrador 20</option>
        <option value="M21">Mostrador 21</option>
        <option value="M22">Mostrador 22</option>
        <option value="M23">Mostrador 23</option>
        <option value="M24">Mostrador 24</option>
        <option value="M25">Mostrador 25</option>
        <option value="M26">Mostrador 26</option>
        <option value="M27">Mostrador 27</option>
        <option value="M28">Mostrador 28</option>
        <option value="M29">Mostrador 29</option>
        <option value="M30">Mostrador 30</option>
        <option value="M31">Mostrador 31</option>
        <option value="M36">Mostrador 36</option>
        <option value="M37">Mostrador 37</option>
        <option value="M38">Mostrador 38</option>
        <option value="M39">Mostrador 39</option>
        <option value="M40">Mostrador 40</option>
        <option value="M41">Mostrador 41</option>
        <option value="M42">Mostrador 42</option>
        <option value="M43">Mostrador 43</option>
        <option value="M44">Mostrador 44</option>
        <option value="M45">Mostrador 45</option>
        <option value="M46">Mostrador 46</option>
        <option value="M47">Mostrador 47</option>
        <option value="M48">Mostrador 48</option>
        <option value="M49">Mostrador 49</option>
        <option value="M50">Mostrador 50</option>
        <option value="M51">Mostrador 51</option>
        <option value="M52">Mostrador 52</option>
        <option value="M53">Mostrador 53</option>
        <option value="M54">Mostrador 54</option>
        <option value="M55">Mostrador 55</option>
        <option value="M56">Mostrador 56</option>
        <option value="M57">Mostrador 57</option>
        <option value="M58">Mostrador 58</option>
        <option value="M59">Mostrador 59</option>
        <option value="M60">Mostrador 60</option>
        <option value="M61">Mostrador 61</option>
        <option value="M62">Mostrador 62</option>
        <option value="M63">Mostrador 63</option>
        <option value="M64">Mostrador 64</option>
        <option value="M65">Mostrador 65</option>
        <option value="P01">Puerta 1</option>
        <option value="P02">Puerta 2</option>
        <option value="P03">Puerta 3</option>
        <option value="P04">Puerta 4</option>
        <option value="P05">Puerta 5</option>
        <option value="P06">Puerta 6</option>
        <option value="P07">Puerta 7</option>
        <option value="P08">Puerta 8</option>
        <option value="P09">Puerta 9</option>
        <option value="P10">Puerta 10</option>
        <option value="P11">Puerta 11</option>
        <option value="P12">Puerta 12</option>
        <option value="P13">Puerta 13</option>
        <option value="P14">Puerta 14</option>
        <option value="P15">Puerta 15</option>
        <option value="P16">Puerta 16</option>
        <option value="P17">Puerta 17</option>
        <option value="P18">Puerta 18</option>
        <option value="P19">Puerta 19</option>
        <option value="P20">Puerta 20</option>
        <option value="P21">Puerta 21</option>
        <option value="P22">Puerta 22</option>
        <option value="P23">Puerta 23</option>
        <option value="P24">Puerta 24</option>
        <option value="T02">Tránsito 2</option>
        <option value="T04">Tránsito 4</option>
      </select>
    </div>
  </div>
    <div class="form-row">
      <div class="form-group col-md-4">
        <label for="" class="control-label">Compañía</label>
        <select class="form-control" id="compania" name="compania">
          <option>Selecciona compañía</option>
            @foreach($companias as $compania)
            <option value="{{$compania->id}}">{{$compania->nombre}}</option>
            @endforeach
        </select>
          </div>
          <div class="form-group col-md-4">
            <label for="" class="control-label">Handling</label>
            <select class="form-control" id="handling" name="handling">
              <option>Selecciona handling</option>
            </select>
            </div>
          <div class="form-group col-md-4">
            <label for="" class="control-label">Acreditación</label>
              <input type="text" class="form-control" id="tarjeta" name="tarjeta">
          </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-4">
        <label for="inputTipoIncidencia">Tipo de incidenca</label>
        <select class="form-control" id="tipoIncidencia" name="tipoIncidencia">
          <option>Selecciona Tipo Incidencia</option>
          <option value="hdw">HARDWARE</option>
          <option value="sfw">SOFTWARE</option>
          <option value="usr">USUARIO</option>
        </select>
      </div>
      <div class="form-group col-md-4">
        <label for="inputCausante">Causante</label>
        <select class="form-control" id="causante" name="causante">
          <option>Selecciona causante</option>
        </select>
      </div>
      <div class="form-group col-md-4">
        <label for="inputTipoCausante">Tipo Causante</label>
        <select class="form-control" id="tipoCausante" name="tipoCausante">
          <option>Selecciona tipo causante</option>
        </select>
      </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="observaciones">Observaciones</label>
      <textarea class="form-control" rows="5" id="observaciones" name="observaciones"></textarea>
    </div>
    <div class="form-group col-md-6">
      <label for="solucion">Solución</label>
      <textarea class="form-control" rows="5" id="solucion" name="solucion"></textarea>
    </div>
  </div>
  <center>
    <button type="submit" class="btn btn-primary">Guardar</button>
    <a href="{{ url('/coordinador/listar/incidencia/')}}" class="btn btn-secondary" role="button">Cancelar</a>
  </center>
</form>
{!! Html::script('js/jquery-2.1.0.min.js') !!}
{!! Html::script('js/dropdown.js') !!}
@include('footer')
