<div style="background-image: url('https://cdn.pixabay.com/photo/2017/10/10/21/49/blogger-2838945_1280.jpg')"
class="bg-center bg-cover lg:py-24">
    <div class="inset-0 mx-auto bg-gray-900 bg-opacity-75 md:max-h-56 max-w-7xl">
        <h2 class="pt-5 my-5 mb-5 text-2xl font-extrabold text-center text-white md:text-4xl">Buscar y Filtrar Vacantes</h2>

        <div class="mx-auto ml-5 mr-5 max-w-7xl ">
            <form
                wire:submit.prevent='leerDatosFormulario'
            >
                <div class="gap-5 md:grid md:grid-cols-3">
                    <div class="mb-5">
                        <label
                            class="block mb-1 text-sm font-bold text-white uppercase "
                            for="termino">Término de Búsqueda
                        </label>
                        <input
                            id="termino"
                            type="text"
                            placeholder="Buscar por Término: ej. Laravel"
                            class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                            wire:model="termino"
                            />
                    </div>

                    <div class="mb-5">
                        <label class="block mb-1 text-sm font-bold text-white uppercase">Categoría</label>
                        <select wire:model="categoria" class="w-full p-2 border-gray-300">
                            <option>--Seleccione--</option>

                            @foreach ($categorias as $categoria )
                                <option value="{{ $categoria->id }}">{{ $categoria->categoria }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-5">
                        <label class="block mb-1 text-sm font-bold text-white uppercase">Salario Mensual</label>
                        <select wire:model="salario" class="w-full p-2 border-gray-300">
                            <option>-- Seleccione --</option>
                            @foreach ($salarios as $salario)
                                <option value="{{ $salario->id }}">{{$salario->salario}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="flex justify-end">
                    <input
                        type="submit"
                        class="w-full px-10 py-2 text-sm font-bold text-white uppercase transition-colors bg-indigo-500 rounded cursor-pointer hover:bg-indigo-600 md:w-auto"
                        value="Buscar"
                    />
                </div>
            </form>
        </div>
    </div>
</div>
