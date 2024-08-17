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
                    <div>
                        <img src="{{ $thread -> user -> avatar() }}" alt="{{ $thread -> user -> name }}" class="rounded-full">
                    </div>
                    <div class="w-full">
                        <h2 class="mb-4 flex items-start justify-between">
                            <a href="" class="text-xl font-semibold text-white/90">
                                {{ $thread -> title }}
                            </a>
                            <span class="rounded-full text-xs py-2 px-4 capitalize" style="color: {{ $thread -> category -> color }}; border: 1px solid {{ $thread -> category -> color }};">
                                {{ $thread -> category -> name }}
                            </span>
                        </h2>
                        <p class="flex items-center justify-between w-full text-xs">
                            <span class="text-blue-600 font-semibold">
                                {{ $thread -> user -> name }}
                                <span class="text-white/90">
                                    {{$thread -> created_at -> diffForHumans()}}
                                </span>
                            </span>
                            <span class="flex items-center gap-1 text-slate-700">
                                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="currentColor" class="h-4">
                                    <path d="M361-177q-41.85 0-69.42-28.48Q264-233.95 264-275v-77h499v-350h76.77q41.01 0 69.12 28.19Q937-645.63 937-605v437q0 42-39.5 58.5T828-124l-54-53H361ZM193-424l-62 61q-30 30-69 14.03T23-408v-440q0-40.63 28.19-68.81Q79.38-945 120-945h473.01q41.32 0 69.65 28.19Q691-888.63 691-848v327q0 40.62-28.47 68.81Q634.05-424 593-424H193Z"/>
                                </svg>
                                {{ $thread -> replies_count }}
                                respuesta{{$thread -> replies_count !== 1 ? 's' : '' }}
                                
                                | <a href="" class="hover:text-white">Editar</a>
                            </span>
                        </p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
