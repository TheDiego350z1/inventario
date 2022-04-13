<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <div class="flex justify-center">
                    <div class="w-80">
                        <br>
                        <form action="{{route('admin.roles.store')}}" method="POST" class="flex flex-col">

                            @csrf

                            <div>
                                <x-jet-label for="name" value="{{ __('Nombre') }}" />
                                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                            </div>

                            <div class="flex items-center justify-end mt-4">
                                <x-jet-button class="ml-4">
                                    {{ __('Crear Rol') }}
                                </x-jet-button>
                            </div>

                            <h2>Lista de Permisos</h2>
                            @foreach ($permisions as $permission)
                                <div class="py-2 px-8">
                                    <label for=""> {{$permission->description}} </label>
                                    <input type="checkbox" name="{{ $permission->name }}" value="1" class="form-checkbox rounded text-pink-500" />
                                </div>
                            @endforeach
                        </form>
                        <br>
                    </div>
                </div>


            </div>
        </div>
    </div>
</x-app-layout>
