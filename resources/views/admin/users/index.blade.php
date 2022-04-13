<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">


                <h2 class="px-4 py-4">Lista de roles</h2>

                <div class=" flex justify-end">
                    <a class="px-8" href="{{ route('admin.users.create') }}">
                        <button type="button" class="bg-indigo-600 text-white text-sm leading-6 font-medium py-2 px-3 rounded-lg">Crear Usuario</button>
                    </a>
                </div>

                @if (session('info'))
                    <div class="bg-green-400">
                        {{ session('info') }}
                    </div>
                @endif

                <div class="container py-8 flex justify-center">
                    <table class="border-collapse border border-slate-500 ">
                        <thead>
                            <tr>
                                <th class="border boder-gray-400 px-4 py-2 text-gray-800">ID</th>
                                <th class="border boder-gray-400 px-4 py-2 text-gray-800">Nombre</th>
                                <th class="border boder-gray-400 px-4 py-2 text-gray-800">Correo</th>
                                <th class="border boder-gray-400 px-4 py-2 text-gray-800"></th>
                                <th class="border boder-gray-400 px-4 py-2 text-gray-800"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <td class="border boder-gray-400 px-4 py-2 text-gray-800"> {{ $user->id }} </td>
                                <td  class="border boder-gray-400 px-4 py-2 text-gray-800"> {{ $user->name }}  </td>
                                <td  class="border boder-gray-400 px-4 py-2 text-gray-800"> {{ $user->email }}  </td>
                                <td  class="border boder-gray-400 px-4 py-2 text-gray-800">
                                    <a href="{{route('admin.users.update', $user)}}" class="">
                                        <button type="button" class="bg-indigo-600 text-white text-sm leading-6 font-medium py-2 px-3 rounded-lg">Editart</button>
                                    </a>
                                </td>
                                <td  class="border boder-gray-400 px-4 py-2 text-gray-800">
                                    <form action="{{ route('admin.users.destroy', $user) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="bg-red-600 text-white text-sm leading-6 font-medium py-2 px-3 rounded-lg">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
