<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Welcome from '@/Components/Welcome.vue';
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
  <h1>Formulario Para Modificar Registros</h1>
    <form @submit.prevent="submit" class="edit-form">
      <!-- ComboBox - Marca -->
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
  
      <!-- Respuesta Corta - Autobús -->
      <div class="form-group">
        <label for="autobus">Autobús:</label>
        <input type="text" class="form-control" v-model="form.autobus" id="autobus" name="autobus" required>
      </div>
  
      <!-- ComboBox - Ubicación -->
      <div class="form-group">
        <label for="ubicacion">Ubicación:</label>
        <select class="form-control" v-model="form.ubicacion" id="ubicacion" name="ubicacion" required>
          <option value="">Seleccione una opción</option>
          <!-- ... otras opciones ... -->
                    <option value="NA">N/A</option>
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
  
      <!-- ComboBox - Estatus -->
      <div class="form-group">
        <label for="estatus">Estatus:</label>
        <select class="form-control" v-model="form.estatus" id="estatus" name="estatus" required>
          <option value="">Seleccione una opción</option>
          <option value="Taller">Taller</option>
          <option value="Disponible">Disponible</option>
        </select>
      </div>
  
      
      <!-- Segmento Adicional: Se mostrará si se selecciona "Taller" -->
      <div id="segmentoAdicional" v-if="form.estatus === 'Taller'" class="additional-segment">
        <h4>Segmento Adicional para Estatus "Taller"</h4>
  
        <!-- ComboBox para Descripción -->
        <div class="form-group">
          <label for="descripcion">Descripción:</label>
          <select class="form-control" v-model="form.descripcion" id="descripcion" name="descripcion" required>
            <option value="">Seleccione una opción</option>
            <option value="disponible">Disponible</option>
            <option value="correctivo">Correctivo</option>
            <option value="preventivo">Preventivo</option>
            <option value="mm">Mantenimiento Mayor</option>
            <option value="pt">Paro Técnico</option>
            <option value="x3">Accidentado</option>
            <option value="det">Tramite Juridicos</option>
          </select>
        </div>
  
        <div class="form-group">
          <label for="descripcionfalla">Descripción de la Falla:</label>
          <input type="text" class="form-control" v-model="form.descripcionfalla" id="descripcionfalla" name="descripcionfalla" required>
        </div>
      </div>
  
      <!-- Botón -->
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
      Enviar Respuestas
    </button>
    </form>
    </div>
    </div>
    </div>
  </template>
  
  <style scoped>
  /* Estilos CSS específicos del componente Show.vue */
  .edit-form {
    max-width: 600px; /* Ajusta el ancho según tus necesidades */
    margin: auto;
  }

  .additional-segment {
    border: 1px solid #ccc;
    border-radius: 5px;
  }
</style>
  

<script>
    export default{
        components: {

        },
        props:{
            estatusUnidades:Array,
            auth:Object,
        },
        data(){
            return {
                form:{
                    marca:this.estatusUnidades[0].marca,
                    autobus:this.estatusUnidades[0].autobus,
                    ubicacion:this.estatusUnidades[0].ubicacion,
                    estatus:this.estatusUnidades[0].estatus,
                    descripcion:this.estatusUnidades[0].descripcion,
                    diasfr:this.estatusUnidades[0].diasfr,
                    descripcionfalla:this.estatusUnidades[0].descripcionfalla,

                }
            }
        },
        methods: {
            submit(){
                this.$inertia.put(this.route('unidades.update', this.estatusUnidades[0].id), this.form)
            }
        }
    }
</script>

