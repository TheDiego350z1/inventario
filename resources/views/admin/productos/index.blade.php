<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <div class="flex justify-center">
                    <div class="w-80">
                        <br>
                        <form class="flex flex-col"  method="POST" action="">
                            @csrf

                            <div class="mt-4">
                                <x-jet-label for="text" value="{{ __('Proveedor') }}" />
                                <x-jet-input id="text" class="block mt-1 w-full" type="text" required autocomplete="" />
                            </div>
                            <div class="mt-4">
                                <x-jet-label for="text" value="{{ __('Marca') }}" />
                                <x-jet-input id="text" class="block mt-1 w-full" type="text" required autocomplete="" />
                            </div>
                            <div class="mt-4">
                                <x-jet-label for="text" value="{{ __('Producto') }}" />
                                <x-jet-input id="text" class="block mt-1 w-full" type="text" name="text" required autocomplete="" />
                            </div>
                            <div class="mt-4">
                                <x-jet-label for="number" value="{{ __('Cantidad') }}" />
                                <x-jet-input id="number" class="block mt-1 w-full" type="number" required autocomplete="" />
                            </div>
                            <div class="mt-4">
                                <x-jet-label for="number" value="{{ __('Costo Unitario') }}" />
                                <x-jet-input id="number" class="block mt-1 w-full" type="number" required autocomplete="" />
                            </div>
                            <div class="mt-4">
                                <x-jet-label for="number" value="{{ __('Costo Total') }}" />
                                <x-jet-input id="number" class="block mt-1 w-full" type="number" required autocomplete="" />
                            </div>


                            <div class="flex items-center justify mt-4">
                                <x-jet-button class="ml-4">
                                    {{ __('Registrar Ingreso de Producto') }}
                                </x-jet-button>
                            </div>
                        </form>
                        <br>
                    </div>
                </div>


            </div>
        </div>
    </div>
</x-app-layout>
