<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                {!! Form::open(['route' => 'admin.users.store']) !!}
                    <div class="container flex flex-col">
                        {!! Form::label('name', 'Nombre', [null]) !!}
                        {!! Form::text('name', null, ['class' =>'form-input px-4 py-3']) !!}

                        {!! Form::label('email', 'Correo', [null]) !!}
                        {!! Form::email('email', null, ['class' =>'form-input px-4 py-3']) !!}

                        {!! Form::label('password', 'Contraseña', [null]) !!}
                        {!! Form::password('password', ['class' =>'form-input px-4 py-3']) !!}

                        {!! Form::label('password', 'Contraseña', [null]) !!}
                        {!! Form::password('password_confirm', ['class' =>'form-input px-4 py-3']) !!}

                        <div class="flex justify-end">
                            {!! Form::submit('Crear Usuario', ['class' => 'bg-indigo-600 text-white text-sm leading-6 font-medium py-2 px-3 rounded-lg']) !!}
                        </div>
                    </div>



                {!! Form::close() !!}

            </div>
        </div>
    </div>
</x-app-layout>
