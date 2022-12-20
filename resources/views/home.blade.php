<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> inicio de secion </title>
    
    <!-- Tailwind CSS Link -->
    <link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">
  </head>
  <body class="bg-gray-100 text-gray-800">

    <nav class="flex py-5 bg-indigo-500 text-white">
      <div class="w-1/2 px-12 mr-auto">
        <p class="text-2xl font-bold">Logistica</p>
      </div>

      <ul class="w-1/2 px-16 ml-auto flex justify-end pt-1">
        <li class="mx-6">
          <a href="" class="font-semibold 
          hover:bg-indigo-700 py-3 px-4 rounded-md">ingresar</a>
        </li>
        <li>
      </ul>
    </nav>

    <div class="block mx-auto my-12 p-8 bg-white w-1/3 border border-gray-200 
rounded-lg shadow-lg">

  <h1 class="text-3xl text-center font-bold">Inicio de secion</h1>

  <form class="mt-4" method="POST" action="">
    @csrf

    <input type="usuario" class="border border-gray-200 rounded-md bg-gray-200 w-full
    text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Email"
    id="usuario" name="usuario">
    <input type="contraseña" class="border border-gray-200 rounded-md bg-gray-200 w-full
    text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Password"
    id="contraseña" name="contraseña">
    <button  class="rounded-md bg-indigo-500 w-full text-lg
    text-white font-semibold p-2 my-3 hover:bg-indigo-600" >Enviar</button>
  </form>
</div>
  </body>
</html>