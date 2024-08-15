<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex gap-10 py-12 text-white">
    <div class="w-64">
        <a href="" class="w-full py-4 mb-10 bg-gradient-to-r from-blue-600 to-blue-700 hover:to-blue-600 font-bold text-xs rounded-md items-center justify-center flex gap-2 text-gray-200 hover:text-white">
            <span class="material-symbols-rounded">quiz</span>
            Preguntar
        </a>
        <ul>
            @foreach ($categories as $category)
            <li class="mb-2">
                <a href="" class="p-2 rounded-md flex bg-slate-800 items-center gap-2 font-smibold text-xs capitalize text-gray-300 hover:text-white">
                    <span class="material-symbols-rounded text-base" style="color: {{ $category -> color }};">category</span>
                    {{ $category -> name }}
                </a>
            </li>
            @endforeach
            
            <li>
                <a href="" class="p-2 rounded-md flex bg-slate-800 items-center gap-2 font-smibold text-xs capitalize text-gray-300 hover:text-white">
                    <span class="material-symbols-rounded text-black text-base">manage_search</span>
                    Todos los resultados
                </a>
            </li>
        </ul>
    </div>
    <div class="w-full">
        @foreach ($threads as $thread)
            <div class="rounded-md bg-gradient-to-r from-slate-800 to-slate-900 hover:to-slate-800 mb-4">
                <div class="p-4 flex gap-4">
                    <div>Image, avatar</div>
                    <div class="w-full">
                        <h2 class="mb-4 flex items-start justify-between">
                            <a href="" class="text-xl font-semibold text-white/90">
                                {{ $thread -> title }}
                            </a>
                            <span class="rounded-full text-xs py-2 px-4 capitalize" style="color: #00aced; border: 1px solid #00aced">
                                Categoria
                            </span>
                        </h2>
                        <p class="flex items-center justify-between w-full text-xs">
                            <span class="text-blue-600 font-semibold">Usuario
                                <span class="text-white/90">
                                    {{$thread->created_at->diffForHumans()}}
                                </span>
                            </span>
                            <span class="text-slate-700">Respuestas y boton</span>
                        </p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
