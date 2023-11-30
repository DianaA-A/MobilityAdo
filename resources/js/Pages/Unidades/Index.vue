<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Welcome from '@/Components/Welcome.vue';
import DataTable from 'datatables.net-dt';



</script>

<template>
  <Head title="Tablero" />
  <div class="w-full bg-purple-500 p-4 flex justify-end items-center" style="background-color: #ffffff;">
  <img src="/images/logo.png" alt="logo Mobility_ado" class="mx-auto w-30 h-20 ml-10" />
    </div>
    

      <h1>Tablero de Administración</h1>
      <table id="tablita" class="display" style="width:100%" role="grid">
        <thead>
          <tr>
            <th>ID</th>
            <th>Marca</th>
            <th>Autobús</th>
            <th>Ubicación</th>
            <th>Estatus</th>
            <th>Descripción</th>
            <th>Días FR</th>
            <th>Descripción de Falla</th>
            <th>Acciones</th>
            <th>Fecha</th>
          </tr>
        </thead>
        <tbody>
            <tr v-for="estatusUnidad in estatusUnidades" :key="estatusUnidad.id">
                <td>{{ estatusUnidad.id }}</td>
                <td>{{ estatusUnidad.marca }}</td>
                <td>{{ estatusUnidad.autobus }}</td>
                <td>{{ estatusUnidad.ubicacion }}</td>
                <td>{{ estatusUnidad.estatus }}</td>
                <td>{{ estatusUnidad.descripcion }}</td>
                <td>
                  <p v-if="estatusUnidad.diasfr == 0 ">
                    {{ estatusUnidad.diasfr }} no hAY
                  </p>
                  <p v-if="estatusUnidad.diasfr != 0 ">
                    {{ Math.floor((new Date(estatusUnidad.diasfr).getTime() - new Date().getTime())/ (1000*60*60*24))*-1}}
                  </p>
                </td>
                <!-- <td>{{ new Date(estatusUnidad.diasfr).getTime()}}</td> -->
                <td>{{ estatusUnidad.descripcionfalla }}</td>
                <td><a :href="route('unidades.edit', estatusUnidad.id)">Editar</a></td>
                <td>{{ estatusUnidad.created_at}}</td>
            </tr>
        </tbody>
      </table>      
      <br>
    <div class="spacer">
      <a href="/dashboard" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" style="background-color: #cf5966">
                Regresar
            </a>
    </div>
    <footer class="bg-purple-500 py-4 text-center text-white mt-4" style="background-color: #582963;">
      <div>
          <p>&copy; 2023 Tu Compañía. Todos los derechos reservados.</p>
          <p>Contáctanos: correo@tudominio.com</p>
      </div>
    </footer>
  </template>
 
  <script>
import $ from 'jquery';
import 'datatables.net';
import 'datatables.net-dt/css/jquery.dataTables.css';
import 'datatables.net-buttons';
import 'datatables.net-buttons-dt/css/buttons.dataTables.css';
import 'datatables.net-buttons/js/dataTables.buttons.js';
import 'datatables.net-buttons/js/buttons.html5.js';
import 'datatables.net-buttons/js/buttons.print.js';
import 'datatables.net-buttons/js/buttons.flash.js';
import * as pdfMake from 'pdfmake/build/pdfmake.js';
import * as pdfFonts from 'pdfmake/build/vfs_fonts.js';
import ExcelJS from 'exceljs';
import 'jszip';
import JSZip from 'jszip';

window.JSZip = JSZip;

pdfMake.vfs = pdfFonts.pdfMake.vfs;

export default {
  props: {
    estatusUnidades: Array,
  },
  methods: {
    exportTo(format) {
      // Utiliza la funcionalidad de DataTables para exportar la tabla
      $(`#tablita`).DataTable().buttons.exportData({ format });
    },
    initializeDataTable() {
      $(document).ready(function () {
        const table = $('#tablita').DataTable({
          // Configuración de DataTables
          "ordering": true,
          "searching": true,
          "order": [[9, "desc"]],
          "language": {
          "search": "Buscar:",
          },
          "dom": '<"top"lf>rt<"bottom"ip>B',  // Agregado
          "columnDefs": [
    {
      "targets": [9],  // Indica la posición de la columna de fecha (puede variar según tu estructura)
      "render": function (data, type, row) {
        // Convierte la fecha al formato DD/MM/AA
        if (type === 'display' || type === 'filter') {
          const date = new Date(data);
          const day = date.getDate().toString().padStart(2, '0');
          const month = (date.getMonth() + 1).toString().padStart(2, '0');
          const year = date.getFullYear().toString().slice(2);
          return `${day}/${month}/${year}`;
        }

        // Para otros tipos de datos o en el caso de ordenación
        return data;
      },
    },
  ],
          buttons: [
        {
          text: 'Exportar a PDF',  // Cambia el texto del botón automático
          extend: 'pdf',
          title:'Estatus De Taller',
          className: 'pdf-button',
        },
        {
          extend: 'excel',
          title:'Estatus De Taller',
          text: 'Exportar a Excel',
          className: 'excel-button',
          exportOptions: {
                modifier: {
                  page: 'current'
                }
              }
            }
         ],
        });
      });
    },
  },
  created() {
    this.initializeDataTable();
  },
};
</script>
