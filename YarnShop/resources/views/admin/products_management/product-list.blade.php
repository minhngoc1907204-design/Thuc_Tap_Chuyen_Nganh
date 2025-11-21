@extends('layout/admin')
@section('body')
<div class="card shadow mb-4">
  <div class="card-header py-3 bg-dark text-white d-flex justify-content-between align-items-center">
      <h5 class="m-0 font-weight-bold">Product</h5>
      <a href="#" class="btn btn-primary btn-sm">
          <i class="fa-solid fa-plus"></i> Add
      </a>
  </div>

  <div class="card-body bg-light">
      <div class="table-responsive">
          <table class="table table-bordered table-hover text-center align-middle">
              <thead class="table-primary text-dark">
                 <tr>
                      <th scope="col">STT</th>
                      <th scope="col">Tên Sản Phẩm</th>
                      <th scope="col">Giá</th>
                      <th scope="col">Số Lượng</th>
                      <th scope="col">Hình</th>
                      <th scope="col">View</th>
                      <th scope="col">Edit</th>
                      <th scope="col">Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                     @forelse($products as $object)
                    <tr>
                      <th scope="row">{{ $object->id }}</th>
                      <td>{{ $object->name }}</td>
                      <td>{{ $object->price }}</td>
                      <td>{{ $object->stock }}</td>
                      <td><img src="{{ asset('images/' . $object->image) }}" alt="{{ $object->name }}" width="50"></td>
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