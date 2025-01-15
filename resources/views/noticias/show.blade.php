<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Ver noticia
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <dl class="max-w-md text-gray-900 divide-y divide-gray-200 dark:text-white dark:divide-gray-700">
                        <div class="flex flex-col pb-3">
                            <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">
                                Título
                            </dt>
                            <dd class="text-lg font-semibold">
                                {{ $noticia->titulo }}
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
                            <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">
                                Imagen
                            </dt>
                            <dd class="text-lg font-semibold">
                                <img src="{{ $noticia->imagen }}" alt="">
                            </dd>
                        </div>
                        <div class="flex flex-col py-3">
                            <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">
                                URL
                            </dt>
                            <dd class="text-lg font-semibold">
                                <a href="{{ $noticia->url }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                    {{ $noticia->url }}
                                </a>
                            </dd>
                        </div>
                        <div class="flex flex-col py-3">
                            <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">
                                Meneos
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
                        <div class="flex flex-col py-3">
                            <a href="{{ route('noticias.edit', $noticia) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline"> Editar </a>
                        </div>
                    </dl>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
