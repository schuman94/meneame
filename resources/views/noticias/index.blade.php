<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Noticias
        </h2>
    </x-slot>


@foreach ($noticias as $noticia)
<div class="py-6">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                <dl class="max-w-md text-gray-900 divide-y divide-gray-200 dark:text-white dark:divide-gray-700">
                    <div class="flex flex-col pb-3">
                        <dd class="text-lg font-semibold">
                            <a href="{{ $noticia->url }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                {{ $noticia->titulo }}
                            </a>
                        </dd>
                    </div>
                    <div class="flex flex-col py-3">
                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">
                            Descripción
                        </dt>
                        <dd class="text-lg font-semibold">
                            {{ $noticia->descripcion }}
                        </dd>
                    </div>
                    <div class="flex flex-col py-3">
                        <dd class="text-lg font-semibold">
                            <img src="{{ $noticia->imagen }}" alt="">
                        </dd>
                    </div>
                    <div class="flex flex-col py-3">
                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">
                            <div class="mt-6">
                                <form method="POST" action="{{ route('noticias.menear', $noticia) }}">
                                    @csrf
                                    @method('PUT')
                                    <a href="{{ route('noticias.menear', $noticia) }}">
                                        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                            Menear
                                        </button>
                                    </a>
                                </form>
                            </div>
                        </dt>
                        <dd class="text-lg font-semibold">
                            {{ $noticia->meneos }}
                        </dd>
                    </div>
                    <div class="flex flex-col py-3">
                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">
                            Usuario
                        </dt>
                        <dd class="text-lg font-semibold">
                            {{ $noticia->user->name }}
                        </dd>
                    </div>
                    <div class="flex flex-col py-3">
                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">
                            Categoria
                        </dt>
                        <dd class="text-lg font-semibold">
                            {{ $noticia->categoria->nombre }}
                        </dd>
                    </div>

                </dl>
            </div>
        </div>
    </div>
</div>
@endforeach

<div class="mt-6 text-center">
    <a href="{{ route('noticias.create') }}"
        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
        Crear una nueva noticia
    </a>
</div>

</x-app-layout>
