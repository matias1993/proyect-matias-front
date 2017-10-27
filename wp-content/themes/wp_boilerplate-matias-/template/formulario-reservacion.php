
<!--- formulario -->

<form class="reserva-contacto" method="post" class="form-group">
    <h2 style="color:white;">Realiza una reservación</h2>
      <div class="campo">
     	<input type="text" name="nombre" placeholder="Nombre" required style="color:white;">
       </div>

      <div class="campo">

       <input type="datatime-local" name="fecha" placeholder="Fecha" required style="color:white;">
         </div>

        <div class="campo">

            <input type="email" name="correo" placeholder="Correo" required style="color:white;">
         </div>


         <div class="campo">

                <input type="tel" name="telefono" placeholder="Telefono" required style="color:white;">
          </div>

         <div class="campo">

             <textarea name="mensaje" placeholder="mensaje" required style="color:#ffffff;"></textarea>
           </div>
             
              <button type="button" class="btn btn-secondary btn-lg" style=" background-color:#FF831B; color:white;">Enviar</button>
    </form>