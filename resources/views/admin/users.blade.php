<!DOCTYPE html>
<html lang="en">

@include('admin.adminhead')

<body>
    <div class="container-scroller">

        @include('admin.navbar')

        <div class="center">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Users Table</h4>
                    </p>
                    <div class="table-responsive">
                      <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Type</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($users as $user)
                          <tr>
                            <td class="text-success">{{ $user->name }}</td>
                            <td class="text-success">{{ $user->email }}</td>
                            <td class="text-danger">{{ $user->usertype=='1'?'Admin':'User' }}</td>
                            @if ($user->usertype == '1')
                                <td><label class="badge badge-danger">Not Allowed</label></td>
                            @else
                                <td><a href="{{url('/deleteuser', $user->id)}}"><label class="badge badge-danger">Delete</label></a>
                            @endif
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
        </div>
    </div>

    @include('admin.adminscript')

    </div>
</body>

</html>
