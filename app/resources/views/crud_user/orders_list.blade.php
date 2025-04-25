<!-- resources/views/crud_user/orders_list.blade.php -->

@extends('dashboard')

@section('content')
<main class="container text-center mt-4">
    <h3 class="fw-bold">Danh sách đơn hàng của {{ $user->name }}</h3>

    <div class="table-responsive">
        <table class="table table-bordered text-center align-middle">
            <thead class="table-light">
                <tr>
                    <th>#</th>
                    <th>Mã đơn hàng</th>
                    <th>Sản phẩm</th>
                </tr>
            </thead>
            <tbody>
                @foreach($user->orders as $order)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $order->id }}</td>
                        <td>
                            <!-- Hiển thị các sản phẩm trong đơn hàng -->
                            @foreach($order->products as $product)
                                <div>{{ $product->name }}</div>
                            @endforeach
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="mt-3 text-center card-header">
        <p class="text-muted">Lập trình web © 01/2024</p>
    </div>
</main>
@endsection
