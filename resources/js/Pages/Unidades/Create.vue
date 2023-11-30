<script>    
    export default{
        components: {

        },
        props:{

        },
        data(){
            return {
                form:{
                    marca:'',
                    autobus:'',
                    ubicacion: '',
                    estatus: '',
                    descripcion: 'N/A',
                    diasfr: 0,
                    descripcionfalla:'N/A',

                }
            }
        },
        methods: {
            submit(){
                this.$inertia.post(this.route('unidades.store'), this.form)
            }
        }
    }

</script>

<template>
    <div class="w-full bg-purple-500 p-4 flex justify-end items-center" style="background-color: #ffff;">
    <img src="/images/logo.png" alt="logo Mobility_ado" class="mx-auto w-30 h-20 ml-10" />
    </div>

    <div class="container mt-4">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <a href="/dashboard" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded absolute right-4 top-4" style="background-color: #cf5966">
            Regresar
          </a>

          <h1>Formulario de Unidades</h1>
          <form @submit.prevent="submit">   
      <!-- ComboBox para Marca -->
      <div class="form-group">
        <label for="marca">Marca:</label>
        <select class="form-control" v-model="form.marca" id="marca" name="marca" required>
          <option value="">Seleccione una opción</option>
          <option value="ADO">ADO</option>
          <option value="Conecta">Conecta</option>
          <option value="AU">AU</option>
          <option value="AUTOTUR">AUTOTUR</option>
          <option value="TEPPER">TEPPER</option>
        </select>
      </div>
      <!-- Respuesta Corta para Autobús -->
      <div class="form-group">
        <label for="autobus">Autobús:</label>
        <input type="text" class="form-control" v-model="form.autobus" id="autobus" name="autobus" required>
      </div>
      <!-- ComboBox para Ubicación -->
      <div class="form-group">
        <label for="ubicacion">Ubicación:</label>
        <select class="form-control" v-model="form.ubicacion" id="ubicacion" name="ubicacion" required>
                    <option value="">Seleccione una opción</option>
                    <option value="COV">COV</option>
                    <option value="VEV">VEV</option>
                    <option value="VHT">VHT</option>
                    <option value="CCK">CCK</option>
                    <option value="MEY">MEY</option>
                    <option value="CQQ">CQQ</option>
                    <option value="SCO">SCO</option>
                    <option value="OHO">OHO</option>
                    <option value="TXO">TXO</option>
                    <option value="LCV">LCV</option>
          
        </select>
      </div>
      <!-- ComboBox para Estatus -->
      <div class="form-group">
        <label for="estatus">Estatus:</label>
        <select class="form-control" v-model="form.estatus" id="estatus" name="estatus" required>
          <option value="">Seleccione una opción</option>
          <option value="Taller">Taller</option>
          <option value="Disponible">Disponible</option>
        </select>
      </div>
      <!-- Segmento Adicional: Se mostrará si se selecciona "Taller" -->
      <div id="segmentoAdicional" class="form-group" v-if="form.estatus === 'Taller'">
        <h4>Segmento Adicional para Estatus "Taller"</h4>
        <!-- ComboBox para Descripción -->
        <div class="form-group">
          <label for="descripcion">Descripción:</label>
          <select class="form-control" v-model="form.descripcion" id="descripcion" name="descripcion" required>
            <option value="">Seleccione una opción</option>
            <option value="correctivo">Correctivo</option>
            <option value="preventivo">Preventivo</option>
            <option value="mm">Mantenimiento Mayor</option>
            <option value="pt">Paro Técnico</option>
            <option value="x3">Accidentado</option>
            <option value="det">Tramite Juridicos</option>
          </select>
        </div>
        
        <!-- Respuesta Corta para Descripción de Falla -->
        <div class="form-group">
          <label for="descripcionfalla">Descripción de la Falla:</label>
          <input type="text" class="form-control" v-model="form.descripcionfalla" id="descripcionfalla" name="descripcionfalla" required>
        </div>
      </div>
      <!-- Botón de Envío -->
      <button type="submit" class="btn btn-primary">Enviar Respuestas</button>
        </form>
      <div class="spacer">
      </div>
    </div>
    </div>
  </div>
  <footer class="bg-purple-500 py-4 text-center text-white mt-4" style="background-color: #582963;">
      <div>
          <p>&copy; 2023 Tu Compañía. Todos los derechos reservados.</p>
          <p>Contáctanos: correo@tudominio.com</p>
      </div>
  </footer>
</template>
