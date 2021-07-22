<div >
    @if(session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif

    <div class="card">

        <div class="card-header">
            <input wire:model="search" type="text" class="form-control" placeholder="Enter post name">
        </div>
        @if($users->count())
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>

                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>


                            <td width="10px">
                                <a class="btn btn-primary btn-sm" href="{{route('admin.users.edit',$user)}}">Edit</a>
                            </td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>

            <div class="card-footer" >
                {{$users->links()}}
            </div>
        @else
            <div class="card-body">
                <strong>There is no record...</strong>
            </div>
        @endif
    </div>
</div>
