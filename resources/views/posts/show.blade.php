<x-app-layout>

    <div class="container py-8">
        <h1 class="text-4xl font-bold text-gray-600">{{$post->name}}</h1>
        <div class="text-lg text-gray-500 mb-2">
            {!! $post->extract !!}
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">


            {{--Contenido principal--}}
            <div class="flex-column lg:col-span-2">
                <figure>
                    @if($post->image)
                        <img class="w-full h-80 object-cover object-center" src="{{Storage::url($post->image->url)}}" alt="{{$post->image->url}}">
                    @else
                        <img class="w-full h-80 object-cover object-center" src="https://cdn.pixabay.com/photo/2020/04/06/13/37/coffee-5009730_960_720.png" alt="Tasa de cafe">
                    @endif

                </figure>
                <div class="mt-2 text-justify overflow-clip text-base text-gray-500">
                    {!! $post->body !!}
                </div>
            </div>

            {{--Contenido relacionado--}}
            <aside>
                <h1 class="text-2xl font-bold text-gray-600 mb-4">Mas en {{$post->category->name}}</h1>
                <ul>
                    @foreach($similares as $similar)
                        <li class="mb-4">
                            <a class="flex" href="{{route('posts.show', $similar )}}">
                                @if($similar->image)
                                    <img class="w-36 h-20 object-cover object-center" src="{{Storage::url($similar->image->url)}}" alt="{{$similar->image->url}}">
                                @else
                                    <img class="w-36 h-20 object-cover object-center" src="https://cdn.pixabay.com/photo/2020/04/06/13/37/coffee-5009730_960_720.png" alt="Tasa de cafe">
                                @endif


                                <span class="ml-4 text-gray-600">{{$similar->name}}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </aside>
        </div>


    </div>

</x-app-layout>
