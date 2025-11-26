@extends('layout/admin')
@section('body')

<div class="card shadow mb-4">
    <div class="card-header py-3 bg-dark text-white d-flex justify-content-between align-items-center">
        <h5 class="m-0 font-weight-bold">Cart</h5>
        <a href="#" class="btn btn-success btn-sm">
            <i class="fa-solid fa-plus"></i> Add Cart
        </a>
    </div>

    <div class="card-body bg-light">
      <div class="table-responsive">
          <table class="table table-bordered table-hover text-center align-middle">
              <thead class="table-primary text-dark">
                    <tr>
                        <th scope="col" style="width: 5%;">STT</th>
                        <th scope="col" style="width: 20%;">ID Khách hàng</th>
                        <th scope="col" style="width: 15%;">Ngày tạo</th>
                        <th scope="col" style="width: 10%;">Cập nhật lần cuối</th>
                        <th scope="col" style="width: 7%;">View</th>
                        <th scope="col" style="width: 7%;">Edit</th>
                        <th scope="col" style="width: 7%;">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($carts as $object)
                    <tr>
                        <th scope="row">{{ $object->id }}</th>
                        <td>{{ $object->customer_id }}</td>
                        <td>{{ $object->created_at }}</td>
                        <td>{{ $object->updated_at }}</td>
                        <td><i class="fa-solid fa-eye text-info"></i></td>
                        <td><i class="fa-solid fa-pen-to-square text-warning"></i></td>
                        <td><i class="fa-solid fa-trash text-danger"></i></td>
                    </tr>
                    @empty
                        <h1>chua du lieu</h1>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="card shadow mb-4">
    <div class="card-header py-3 bg-dark text-white d-flex justify-content-between align-items-center">
        <h5 class="m-0 font-weight-bold">Order</h5>
        <a href="#" class="btn btn-success btn-sm">
            <i class="fa-solid fa-plus"></i> Add Order
        </a>
    </div>

    <div class="card-body bg-light">
      <div class="table-responsive">
          <table class="table table-bordered table-hover text-center align-middle">
              <thead class="table-primary text-dark">
                    <tr>
                        <th scope="col" style="width: 5%;">STT</th>
                        <th scope="col" style="width: 20%;">Customer ID</th>
                        <th scope="col" style="width: 15%;">Total_price</th>
                        <th scope="col" style="width: 10%;">Status</th>
                        <th scope="col" style="width: 7%;">View</th>
                        <th scope="col" style="width: 7%;">Edit</th>
                        <th scope="col" style="width: 7%;">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($orders as $order)
                    <tr>
                        <th scope="row">{{ $order->id }}</th>
                        <td>{{ $order->customer_id }}</td>
                        <td>{{ $order->total_price }}</td>
                        <td>{{ $order->status }}</td>
                        <td><i class="fa-solid fa-eye text-info"></i></td>
                        <td><i class="fa-solid fa-pen-to-square text-warning"></i></td>
                        <td><i class="fa-solid fa-trash text-danger"></i></td>
                    </tr>
                    @empty
                        <h1>chua du lieu</h1>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="card shadow mb-4">
    <div class="card-header py-3 bg-dark text-white d-flex justify-content-between align-items-center">
        <h5 class="m-0 font-weight-bold">Order_Item</h5>
        <a href="#" class="btn btn-success btn-sm">
            <i class="fa-solid fa-plus"></i> Add Order_Item
        </a>
    </div>

   <div class="card-body bg-light">
      <div class="table-responsive">
          <table class="table table-bordered table-hover text-center align-middle">
              <thead class="table-primary text-dark">
                    <tr>
                        <th scope="col" style="width: 5%;">STT</th>
                        <th scope="col" style="width: 20%;">Customer ID</th>
                        <th scope="col" style="width: 15%;">Total_price</th>
                        <th scope="col" style="width: 10%;">Status</th>
                        <th scope="col" style="width: 7%;">View</th>
                        <th scope="col" style="width: 7%;">Edit</th>
                        <th scope="col" style="width: 7%;">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($orders as $order)
                    <tr>
                        <th scope="row">{{ $order->id }}</th>
                        <td>{{ $order->customer_id }}</td>
                        <td>{{ $order->total_price }}</td>
                        <td>{{ $order->status }}</td>
                        <td><i class="fa-solid fa-eye text-info"></i></td>
                        <td><i class="fa-solid fa-pen-to-square text-warning"></i></td>
                        <td><i class="fa-solid fa-trash text-danger"></i></td>
                    </tr>
                    @empty
                        <h1>chua du lieu</h1>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="card shadow mb-4">
    <div class="card-header py-3 bg-dark text-white d-flex justify-content-between align-items-center">
        <h5 class="m-0 font-weight-bold">Payment</h5>
        <a href="#" class="btn btn-success btn-sm">
            <i class="fa-solid fa-plus"></i> Add Payment
        </a>
    </div>

    <div class="card-body bg-light">
      <div class="table-responsive">
          <table class="table table-bordered table-hover text-center align-middle">
              <thead class="table-primary text-dark">
                    <tr>
                        <th scope="col" style="width: 5%;">STT</th>
                        <th scope="col" style="width: 20%;">Customer ID</th>
                        <th scope="col" style="width: 15%;">Total_price</th>
                        <th scope="col" style="width: 10%;">Status</th>
                        <th scope="col" style="width: 7%;">View</th>
                        <th scope="col" style="width: 7%;">Edit</th>
                        <th scope="col" style="width: 7%;">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($orders as $order)
                    <tr>
                        <th scope="row">{{ $order->id }}</th>
                        <td>{{ $order->customer_id }}</td>
                        <td>{{ $order->total_price }}</td>
                        <td>{{ $order->status }}</td>
                        <td><i class="fa-solid fa-eye text-info"></i></td>
                        <td><i class="fa-solid fa-pen-to-square text-warning"></i></td>
                        <td><i class="fa-solid fa-trash text-danger"></i></td>
                    </tr>
                    @empty
                        <h1>chua du lieu</h1>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="card shadow mb-4">
    <div class="card-header py-3 bg-dark text-white d-flex justify-content-between align-items-center">
        <h5 class="m-0 font-weight-bold">Delivery</h5>
        <a href="#" class="btn btn-success btn-sm">
            <i class="fa-solid fa-plus"></i> Add Delivery
        </a>
    </div>

    <div class="card-body bg-light">
      <div class="table-responsive">
          <table class="table table-bordered table-hover text-center align-middle">
              <thead class="table-primary text-dark">
                    <tr>
                        <th scope="col" style="width: 5%;">STT</th>
                        <th scope="col" style="width: 20%;">Customer ID</th>
                        <th scope="col" style="width: 15%;">Total_price</th>
                        <th scope="col" style="width: 10%;">Status</th>
                        <th scope="col" style="width: 7%;">View</th>
                        <th scope="col" style="width: 7%;">Edit</th>
                        <th scope="col" style="width: 7%;">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($orders as $order)
                    <tr>
                        <th scope="row">{{ $order->id }}</th>
                        <td>{{ $order->customer_id }}</td>
                        <td>{{ $order->total_price }}</td>
                        <td>{{ $order->status }}</td>
                        <td><i class="fa-solid fa-eye text-info"></i></td>
                        <td><i class="fa-solid fa-pen-to-square text-warning"></i></td>
                        <td><i class="fa-solid fa-trash text-danger"></i></td>
                    </tr>
                    @empty
                        <h1>chua du lieu</h1>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="card shadow mb-4">
    <div class="card-header py-3 bg-dark text-white d-flex justify-content-between align-items-center">
        <h5 class="m-0 font-weight-bold">Discount</h5>
        <a href="#" class="btn btn-success btn-sm">
            <i class="fa-solid fa-plus"></i> Add Discount
        </a>
    </div>

    <div class="card-body bg-light">
      <div class="table-responsive">
          <table class="table table-bordered table-hover text-center align-middle">
              <thead class="table-primary text-dark">
                    <tr>
                        <th scope="col" style="width: 5%;">STT</th>
                        <th scope="col" style="width: 20%;">Customer ID</th>
                        <th scope="col" style="width: 15%;">Total_price</th>
                        <th scope="col" style="width: 10%;">Status</th>
                        <th scope="col" style="width: 7%;">View</th>
                        <th scope="col" style="width: 7%;">Edit</th>
                        <th scope="col" style="width: 7%;">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($orders as $order)
                    <tr>
                        <th scope="row">{{ $order->id }}</th>
                        <td>{{ $order->customer_id }}</td>
                        <td>{{ $order->total_price }}</td>
                        <td>{{ $order->status }}</td>
                        <td><i class="fa-solid fa-eye text-info"></i></td>
                        <td><i class="fa-solid fa-pen-to-square text-warning"></i></td>
                        <td><i class="fa-solid fa-trash text-danger"></i></td>
                    </tr>
                    @empty
                        <h1>chua du lieu</h1>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
