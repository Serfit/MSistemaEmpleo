<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Candidatos Vacante') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 border-b border-gray-200 bg_white">
                    <h1 class="my-10 text-2xl font-bold text-center">
                        Candidatos Vacante: {{ $vacante->titulo }}
                    </h1>
                    {{-- {{ __("Formulario Aqui") }} --}}
                    <div class="p-5 md:flex md:justify-center">
                        <ul class="w-full divide-y divide-gray-200">
                            @forelse ($vacante->candidatos as $candidato)
                                <li class="flex items-center p-3">
                                    <div class="flex-1 ">
                                        <p class="text-xl font-medium text-gray-800">{{ $candidato->user->name }}</p>
                                        <p class="text-sm text-gray-600">{{ $candidato->user->email }}</p>
                                        <p class="text-sm font-medium text-gray-600">
                                            Día que postuló: <span class="font-normal">{{ $candidato->created_at->diffForHumans() }}</span>
                                        </p>
                                    </div>
                                    <div>
                                        <a
                                            class="inline-flex item-center shadow-sm px-2.5 py-0.5 border border-x-gray-300 text-sm leading-5 font-medium rounded-full text-gray-700 bg-white hover:bg-gray-50"
                                            href="{{ asset('storage/cv/' . $candidato->cv ) }}"
                                            target="_blank"
                                            rel="noreferrer noopener"
                                        >
                                            Ver CV
                                        </a>
                                    </div>
                                </li>
                            @empty
                                <p class="p-3 text-sm text-center text-gray-600">No Hay Candidatos aún </p>
                            @endforelse
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
