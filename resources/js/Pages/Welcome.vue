<script setup>
import { Head, Link } from '@inertiajs/vue3';

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
});
</script>

<template>
    <Head title="Log in" />
    <div class="w-full bg-purple-500 p-4 flex justify-end items-center" style="background-color: #ffffff;">
    <img src="/images/logo.png" alt="logo Mobility_ado" class="mx-auto w-30 h-20 ml-10" />
    <div v-if="canLogin">
            <Link v-if="$page.props.auth.user" :href="route('dashboard')" class="ml-4 bg-white text-white hover:bg-indigo-300 hover:text-white py-2 px-4 rounded-full" style="background-color: #993a6b;">Dashboard</Link>
            <template v-else>
              <Link :href="route('login')" class="ml-4 bg-white text-white hover:bg-indigo-300 hover:text-white py-2 px-4 rounded-full" style="background-color: #993a6b;">Log in</Link>
              <Link v-if="canRegister" :href="route('register')" class="ml-4 bg-white text-white hover:bg-indigo-300 hover:text-white py-2 px-4 rounded-full" style="background-color: #993a6b;">Register</Link>
            </template>
        </div>
    </div>
    <div class="text-center">
        <label class="block text-lg font-semibold text-gray-700 mb-2">
            <br>
            <h1>Estatus de Unidades</h1>
          </label>  
        <img src="/images/welcome.png" alt="Imagen welcome" class="w-80 h-80 mx-auto mb-4" /> 
        </div>
            <div class="spacer"></div>
        
    <footer class="bg-purple-500 py-4 text-center text-white mt-4" style="background-color: #5F2167;">
      <div>
          <p>&copy; 2023 Tu Compañía. Todos los derechos reservados.</p>
          <p>Contáctanos: correo@tudominio.com</p>
      </div>
  </footer>
</template>