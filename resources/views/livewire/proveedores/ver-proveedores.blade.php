<div>



    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">


                <h2 class="text-xl mx-4">Consulta / Creación de Proveedores</h2>


                <div class="flex justify-end px-8">
                    @livewire('proveedores.crear-proveedores')
                </div>

                <div class="flex justify-center">
                    <div class="w-1/2">
                        <x-jet-label for="name" value="{{ __('Buscar Proveedor') }}" />
                        <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" wire:model="buscar" />
                    </div>
                </div>

                <div class="container py-8 flex justify-center">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>NIT</th>
                                <th>RUC</th>
                                <th>DUI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($proveedores as $proveedor)

                                <tr>
                                    <td> {{$proveedor->nombre}} </td>
                                    <td> {{$proveedor->dui}} </td>
                                    <td> {{$proveedor->ruc}} </td>
                                    <td> {{$proveedor->nit}} </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                {{$proveedores->links()}}



            </div>
        </div>
    </div>
</div>
