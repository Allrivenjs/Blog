<div >
    @foreach($roles as $rol)
        <div >
            <label >
                <div class="flex items-start">
                <div class="flex items-center h-5">
                {!! Form::checkbox('roles[]',$rol->id, null, ['id' => "$rol->id" , 'class' => 'focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded']) !!}
                </div>
                <div class="ml-3 text-sm">
                    <label for="{{$rol->id}}" class="font-medium text-gray-700">{!! $rol->name !!}</label>
                </div>
                </div>

            </label>
        </div>
    @endforeach






</div>



