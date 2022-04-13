<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg ">

                <div class="flex justify-center">
                    <div class="w-80">
                        <br>
                        <form class="flex flex-col"  method="POST" action=" route{{'admin.users.store'}} ">
                            @csrf

                            <div>
                                <x-jet-label for="name" value="{{ __('Nombre') }}" />
                                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                            </div>
                            <div class="mt-4">
                                <x-jet-label for="email" value="{{ __('Correo') }}" />
                                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                            </div>

                            <div class="mt-4">
                                <x-jet-label for="password" value="{{ __('Contraseña') }}" />
                                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                            </div>

                            <div class="mt-4">
                                <x-jet-label for="password_confirmation" value="{{ __('Confirmar Contraseña') }}" />
                                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                            </div>

                            <div class="flex items-center justify-end mt-4">
                                <x-jet-button class="ml-4">
                                    {{ __('Reguistrar Usuario') }}
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
