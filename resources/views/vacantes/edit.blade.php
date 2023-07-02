<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Editar Vacantes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 border-b border-gray-200 bg_white">
                    <h1 class="my-10 text-2xl font-bold text-center">
                        Editar Vacante: {{ $vacante->titulo }}
                    </h1>
                    <div class="md:flex md:justify-center">
                        <livewire:editar-vacante
                            :vacante="$vacante"
                        />
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
