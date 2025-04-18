@extends('dashboard')

@section('content')

<main class="container text-center mt-4">
    <h3 class="fw-bold">Danh sách role: {{ $role->name }}</h3>

    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover text-center align-middle">
            <thead class="table-light">
                <tr>
                    <th>Name</th>
                    <th>Role</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>
                            @foreach($user->roles as $role)
                                <span class="badge bg-primary">{{ $role->name }}</span>
                            @endforeach
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
