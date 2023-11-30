<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Welcome from '@/Components/Welcome.vue';
</script>

<template>
    
    <AppLayout title="Dashboard">
        <template #header>
            
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Home
            </h2>
        </template>
        <br>
        <img src="/images/dashboard.png" alt="Imagen dashboard" class="w-80 h-80 mx-auto mb-4" />
        <!-- Agrega los botones como enlaces -->
        <div class="flex justify-center items-center h-32">
            
            <a href="/unidades/create" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-6 px-8 rounded">
                Capturar
            </a>
            <a href="/unidades" class="bg-green-500 hover:bg-green-700 text-white font-bold py-6 px-8 rounded ml-4">
                Visualizar
            </a>
        </div>
        <!-- Fin de los botones -->
        
    </AppLayout>
    <footer class="bg-purple-500 py-4 text-center text-white mt-4" style="background-color: #582963;">
      <div>
          <p>&copy; 2023 Tu Compañía. Todos los derechos reservados.</p>
          <p>Contáctanos: correo@tudominio.com</p>
      </div>
  </footer>
</template>
