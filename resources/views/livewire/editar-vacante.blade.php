<form method="POST"  class="space-y-5 md:w-1/2" wire:submit.prevent='editarVacante'>

    <div>
        <x-input-label for="titulo" :value="__('Titulo Vacante')" />
        <x-text-input
            id="titulo"
            class="block w-full mt-1"
            type="text"
            wire:model="titulo"
            :value="old('titulo')"
            placeholder="Titulo Vacante"
        />
        @error('titulo')
            <livewire:mostrar-alerta :message="$message"/>
        @enderror
    </div>



    <div>
        <x-input-label for="salario" :value="__('Salario Mensual')" />
        <select
            id="salario"
            wire:model="salario"
            class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
        >
            <option value="">-- Seleccione --</option>
            @foreach ($salarios as $salario )
            <option value="{{ $salario->id }}">{{ $salario->salario }}</option>
            @endforeach
        </select>
        @error('salario')
            <livewire:mostrar-alerta :message="$message"/>
        @enderror
    </div>


    <div>
        <x-input-label for="categoria" :value="__('Categoria')" />
        <select
            id="categoria"
            wire:model="categoria"
            class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
        >
            <option value="">-- Seleccione --</option>
            @foreach ($categorias as $categoria )
            <option value="{{ $categoria->id }}">{{ $categoria->categoria }}</option>
            @endforeach
        </select>
        @error('categoria')
            <livewire:mostrar-alerta :message="$message"/>
        @enderror
    </div>


    <div>
        <x-input-label for="empresa" :value="__('Empresa')" />
        <x-text-input
            id="empresa"
            class="block w-full mt-1"
            type="text"
            wire:model="empresa"
            :value="old('empresa')"
            placeholder="Empresa: ej. Netflix, Uber, Ripley"
        />
    </div>
    @error('empresa')
        <livewire:mostrar-alerta :message="$message"/>
    @enderror

    <div>
        <x-input-label for="ultimo_dia" :value="__('Último Día para postularse')" />
        <x-text-input
            id="ultimo_dia"
            class="block w-full mt-1"
            type="date"
            wire:model="ultimo_dia"
            :value="old('ultimo_dia')"
        />
        @error('ultimo_dia')
            <livewire:mostrar-alerta :message="$message"/>
        @enderror
    </div>


    <div>
        <x-input-label for="descripcion" :value="__('Descripción Puesto')" />
        <textarea
            wire:model="descripcion"
            placeholder="Descripción general del puesto, experiencia"
            class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 h-72"
        >

        </textarea>
        @error('descripcion')
            <livewire:mostrar-alerta :message="$message" />
        @enderror
    </div>

    <div>
        <x-input-label for="imagen" :value="__('Imagen')" />
        <x-text-input
            id="imagen"
            class="block w-full mt-1"
            type="file"
            wire:model="imagen_nueva"
            accept="image/*"
        />

        <div class="my-5 w-80">
            <x-input-label :value="__('Imagen Actual')" />

            <img src="{{ asset('storage/vacantes/' . $imagen) }}" alt="{{ 'Imagen Vacante' . $titulo }}">
        </div>

        {{-- Mostrar imagen en preview --}}
        <div class="my-5 w-80">
            @if ($imagen_nueva)
                Imagen Nueva:
                <img src="{{ $imagen_nueva->temporaryUrl() }}">
            @endif
        </div>

        @error('imagen_nueva')
            <livewire:mostrar-alerta :message="$message" />
        @enderror
    </div>


    <x-primary-button class="justify-center w-full">
        {{ __('Guardar Cambios') }}
    </x-primary-button>
</form>

