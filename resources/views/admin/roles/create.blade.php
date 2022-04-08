<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <h2 class="py-2 px-8">Crear nuevo rol</h2>

                {!! Form::open(['route' => 'admin.roles.store']) !!}

                    <div class="container">
                        <div class="py-2 px-8">
                            {!! Form::label('name', 'Nombre') !!}
                            {!! Form::text('name', null, ['class' =>'form-input px-4 py-3 ']) !!}

                            @error('name')
                                <small>{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="container flex justify-end">
                            {!! Form::submit('Crear Rol', ['class' => 'bg-indigo-600 text-white text-sm leading-6 font-medium py-2 px-3 rounded-lg']) !!}
                        </div>
                    </div>

                    <h2>Lista de Permisos</h2>
                    @foreach ($permisions as $permission)
                        <div class="py-2 px-8">
                            <label for="">
                                {!! Form::checkbox('permisions[]', $permission->id, null, ['class' => 'form-checkbox rounded-full px-4 py-3']) !!}
                                {{ $permission->description }}
                            </label>
                        </div>
                    @endforeach

                {!! Form::close() !!}

            </div>
        </div>
    </div>
</x-app-layout>
