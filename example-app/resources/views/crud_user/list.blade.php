@extends('dashboard')

@section('content')
<div class="mb-3 card-header text-center">
    <a href="{{ route('user.list') }}" class="text-decoration-none text-dark mx-2">Danh sách người dùng</a> |
    <a href="{{ route('signout') }}" class="text-decoration-none text-dark fw-bold mx-2">Đăng xuất</a>
</div>

<main class="container text-center mt-4">
    <h3 class="fw-bold">Danh sách người dùng</h3>

    <div class="table-responsive">
        <table class="table table-bordered text-center align-middle">
            <thead class="table-light">
                <tr>
                    <th>#</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $index => $user)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            @foreach($user->roles as $role)
                                <span class="badge bg-primary">
                                <a href="{{ route('users.byRole', ['role' => $role->name]) }}" class="text-white">{{ $role->name }}</a>

                                </span>
                            @endforeach
                        </td>
                        <td>
                            <a href="{{ route('user.updateUser', ['id' => $user->id]) }}" class="text-dark">Edit</a> |
                            <a href="{{ route('user.readUser', ['id' => $user->id]) }}" class="text-dark">View</a> |
                            <a href="{{ route('user.deleteUser', ['id' => $user->id]) }}" class="text-dark">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="mt-3 d-flex justify-content-center">
        {{ $users->links('pagination::bootstrap-5') }}
    </div>

    <div class="mt-3 text-center card-header">
        <p class="text-muted">Lập trình web © 01/2024</p>
    </div>
</main>
@endsection
