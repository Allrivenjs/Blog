<div>
    <div class="grid grid-cols-6 gap-6">
        <div class="col-span-6 sm:col-span-4">
            {!! Form::label('name','Name:', ['class' => 'block text-sm font-medium text-gray-700']) !!}
            {!! Form::text('name',null, ['class'=>'mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md', 'placeholder' => 'Enter the role name']) !!}
            @error('name')
            <small class="text-danger">
                {{$message}}
            </small>
            @enderror
        </div>

        <fieldset class="col-span-6 sm:col-span-4">
        <h3 class="text-lg font-medium text-gray-900 mb-2">Permission list</h3>
            <div class="mt-4 space-y-2">
                @foreach($permissions as $permission)
                    <div class="flex items-start col-span-6 sm:col-span-3">
                        <div class="flex items-center h-5">
                            {!! Form::checkbox('permissions[]', $permission->id, null, [ 'id' => "$permission->id", 'class'=> 'focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded']) !!}
                        </div>
                        <div class="ml-3 text-sm">
                            <label for="{{ $permission->id}}" class="font-medium text-gray-700">{{$permission->description}}</label>
                        </div>
                    </div>
                @endforeach
            </div>
        </fieldset>
    </div>
</div>
