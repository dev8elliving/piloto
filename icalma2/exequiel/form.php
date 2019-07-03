  <!-- Modal formulario -->
  <div class="modal fade" id="modal_formulario">
    <div class="modal-dialog form-mod modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="container-fluid header-form">
          <button class="close-m" data-dismiss="modal" aria-label="Close">x</button>
<!--           <div>
            <h4 class="titulo-form">SOLICITA MÁS INFORMACIÓN</h4>
          </div> -->
        </div>
        <div class="modal-body">
          <form id="formu">
            <div class="form-group">
              <label for="rut_txt">Rut</label>
              <input type="text" maxlength="12" class="form-control" name="rut_txt" id="rut_txt" placeholder="15.123.524-3">
            </div>
            <div class="form-group">
              <label for="nombre_txt">Nombre y Apellido</label>
              <input type="text" class="form-control" name="nombre_txt" id="nombre_txt" placeholder="Ej: Orlando Sepúlveda">
            </div>
            <div class="form-group">
              <label for="telefono_txt">Teléfono</label>
              <input type="text" maxlength="12" class="form-control" name="telefono_txt" id="telefono_txt" placeholder="Ej: +56953421254">
            </div>
            <div class="form-group">
              <label for="email_txt">Email</label>
              <input type="text" class="form-control" name="email_txt" id="email_txt" placeholder="Ej: Icalma@sistema.cl">
            </div>
            <div class="form-group">
              <label for="proyecto_txt">Proyecto</label>
              <select class="form-control" name="proyecto_txt" id="proyecto_txt">
                <option value="ICALMA EXEQUIEL">ICALMA EXEQUIEL</option>
              </select>
            </div>
            <button type="button" class="btn btn-purp-big enviar-form">Enviar</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- fin Modal formulario -->

  <!-- modal mensaje form -->
  <div class="modal-mensaje">
    <div class="shadow-modal"></div>
    <div class="cont-modal-mensaje">
      <p id="msj-server">Enviando Mensaje</p>
    </div>    
  </div>
  <!-- fin modal mensaje form -->

  <!-- formulario btn  fixed -->
  <a onclick="ga('send', 'event', 'btn', 'click', 'btn_cotiza_aqui_fixed');" href="#modal_formulario" data-toggle="modal" class="btn btn-blu-sm btn-fixed">
    <span>Cotiza Aquí</span>
  </a>
  <!-- fin btn formulario -->