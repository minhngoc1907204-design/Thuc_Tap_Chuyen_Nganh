@extends('layout/admin')
@section('body')
<div class="card shadow mb-4">
  <div class="card-header py-3 bg-dark text-white d-flex justify-content-between align-items-center">
      <h5 class="m-0 font-weight-bold">Test</h5>
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
                      <th scope="col">View</th>
                      <th scope="col">Edit</th>
                      <th scope="col">Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">id</th>
                      <td>a</td>
                      <td>b</td>
                      <td>c</td>
                      <td><i class="fa-solid fa-eye text-info"></i></td>
                      <td><i class="fa-solid fa-pen-to-square text-warning"></i></td>
                      <td><i class="fa-solid fa-trash text-danger"></i></td>                   
                    </tr>
              </tbody>
          </table>
      </div>
  </div>
</div>

@endsection