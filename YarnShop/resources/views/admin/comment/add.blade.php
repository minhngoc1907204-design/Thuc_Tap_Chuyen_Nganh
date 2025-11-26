@extends('layout/admin')
@section('body')
<div class="container">
    <div class="row">
        <form action="{{ route('admin.comment.store') }}" method="post">
            @csrf

            <div class="mb-3">
                <label for="customer_id" class="form-label">Khách hàng</label>
                <select name="customer_id" id="customer_id" class="form-control" required>
                    <option value="">-- Chọn khách hàng --</option>
                    @foreach($customers as $customer)
                        <option value="{{ $customer->id }}">{{ $customer->name }} (ID: {{ $customer->id }})</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="product_id" class="form-label">Sản phẩm</label>
                <select name="product_id" id="product_id" class="form-control" required>
                    <option value="">-- Chọn sản phẩm --</option>
                    @foreach($products as $product)
                        <option value="{{ $product->id }}">{{ $product->name }} (ID: {{ $product->id }})</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="content" class="form-label">Nội dung bình luận</label>
                <textarea name="content" id="content" class="form-control" rows="3" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Thêm bình luận</button>
        </form>
    </div>
</div>
@endsection
