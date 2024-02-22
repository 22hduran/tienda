<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear camiseta</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class=" dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-500">
                    <div class="max-w-md mx-auto">
                        <form action="{{route('camisetas.store')}}" class=" shadow-md rounded px-8 pt-6 pb-8 mb-4"
                            method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-4">
                                <label class="block text-white text-sm font-bold mb-2" for="nombre">
                                    Nombre de la camiseta
                                </label>
                                <input
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    id="camiseta" type="text" placeholder="Nombre de la camiseta" name="camiseta">
                            </div>
                            <div class="mb-4">
                                <label class="block text-white text-sm font-bold mb-2" for="precio">
                                    Precio
                                </label>
                                <input
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    id="precio" type="text" placeholder="Precio" name="precio">
                            </div>
                            <div class="mb-4">
                                <label class="block text-white text-sm font-bold mb-2" for="subir imagen">
                                    Subir imagen
                                </label>
                                <input type="file" name="imagen">
                            </div>
                            <div class="mb-4">
                                <label class="block text-white text-sm font-bold mb-2" for="categoria">
                                    Categoría
                                </label>
                                <select
                                    class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline"
                                    id="idColeccion" name="idColeccion">
                                    <option>Seleccionar categoría</option>
                                    <option value="1">Inazuma Eleven</option>
                                    <option value="2">Blue Lock</option>
                                    <option value="3">Oliver y Benji</option>
                                </select>
                            </div>
                            <div class="flex items-center justify-between">
                                <button
                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                                    type="submit">
                                    Crear Camiseta
                                </button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

</body>
</html>
