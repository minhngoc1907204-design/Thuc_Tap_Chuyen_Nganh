@extends('layout/admin')
@section('body')

<div class="card shadow mb-4">
    <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">
        <h5 class="m-0 font-weight-bold">Customer</h5>
        <a href="#" class="btn btn-success btn-sm">
            <i class="fa-solid fa-plus"></i> Add Customer
        </a>
    </div>

    <div class="card-body bg-light">
      <div class="table-responsive">
          <table class="table table-bordered table-hover text-center align-middle">
              <thead class="table-primary text-dark">
                    <tr>
                        <th scope="col" style="width: 5%;">STT</th>
                        <th scope="col" style="width: 20%;">Full Name</th>
                        <th scope="col" style="width: 20%;">Email</th>
                        <th scope="col" style="width: 15%;">Phone</th>
                        <th scope="col" style="width: 8%;">View</th>
                        <th scope="col" style="width: 8%;">Edit</th>
                        <th scope="col" style="width: 8%;">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($customers as $object)
                    <tr>
                        <th scope="row">{{ $object->id }}</th>
                        <td>{{ $object->name }}</td>
                        <td>{{ $object->email }}</td>
                        <td>{{ $object->phone }}</td>
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
    <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">
        <h5 class="m-0 font-weight-bold">Address</h5>
        <a href="#" class="btn btn-success btn-sm">
            <i class="fa-solid fa-plus"></i> Add Address
        </a>
    </div>

    <div class="card-body bg-light">
      <div class="table-responsive">
          <table class="table table-bordered table-hover text-center align-middle">
              <thead class="table-primary text-dark">
                    <tr>
                        <th scope="col" style="width: 5%;">STT</th>
                        <th scope="col" style="width: 20%;">ID Khách hàng</th>
                        <th scope="col" style="width: 20%;">Tên Người nhận</th>
                        <th scope="col" style="width: 15%;">Phone</th>
                        <th scope="col" style="width: 25%;">Địa chỉ chi tiết</th>
                        <th scope="col" style="width: 10%;">Quận/Huyện</th>
                        <th scope="col" style="width: 10%;">Tỉnh/Thành phố</th>
                        <th scope="col" style="width: 5%;">Mặc định</th>
                        <th scope="col" style="width: 8%;">View</th>
                        <th scope="col" style="width: 8%;">Edit</th>
                        <th scope="col" style="width: 8%;">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($adresses as $object)
                    <tr>
                        <th scope="row">{{ $object->id }}</th>
                        <td>{{ $object->customer_id }}</td>
                        <td>{{ $object->name }}</td>
                        <td>{{ $object->phone }}</td>
                        <td>{{ $object->address_line }}</td>
                        <td>{{ $object->district }}</td>
                        <td>{{ $object->city }}</td>
                        <td>{{ $object->is_default }}</td>
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
