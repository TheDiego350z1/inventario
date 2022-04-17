<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <h2 class="text-xl mx-4">Editar de Proveedor</h2>

                <div class="flex justify-center">
                    <div class="w-1/2">

                        <form class="flex flex-col my-8"  method="POST" action=" route{{'admin.productos.store'}} ">
                            @csrf

                            <div>
                                <x-jet-label for="nombre" value="{{ __('Nombre') }}" />
                                <x-jet-input id="nombre" class="block mt-1 w-full" type="text" name="nombre" :value="old('nombre')" required autofocus autocomplete="nombre" />
                            </div>

                            <div>
                                <x-jet-label for="nit" value="{{ __('NIT') }}" />
                                <x-jet-input id="nit" class="block mt-1 w-full" type="text" name="nit" :value="old('nit')" required autofocus autocomplete="nit" />
                            </div>

                            <div>
                                <x-jet-label for="ruc" value="{{ __('RUC') }}" />
                                <x-jet-input id="ruc" class="block mt-1 w-full" type="text" name="ruc" :value="old('ruc')" required autofocus autocomplete="ruc" />
                            </div>

                            <div>
                                <x-jet-label for="dui" value="{{ __('DUI') }}" />
                                <x-jet-input id="dui" class="block mt-1 w-full" type="text" name="dui" :value="old('dui')" required autofocus autocomplete="dui" />
                            </div>

                            <div>
                                <x-jet-label for="description" value="{{ __('Descripción') }}" />
                                <x-jet-input id="description" class="block mt-1 w-full" type="text" name="description" :value="old('description')" required autofocus autocomplete="description" />
                            </div>

                            {{-- Existencias por default se crean en CERO --}}

                            <div class="flex items-center justify-end mt-4">
                                <x-jet-button class="ml-4">
                                    {{ __('Crear Proveedor') }}
                                </x-jet-button>
                            </div>

                        </form>

                    </div>

                </div>

            </div>
        </div>
    </div>
</x-app-layout>
