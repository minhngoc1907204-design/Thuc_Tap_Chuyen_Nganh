@extends('layout/admin')
@section('body')
<div class="card shadow mb-4">
  <div class="card-header py-3 bg-dark text-white d-flex justify-content-between align-items-center">
      <h5 class="m-0 font-weight-bold">Category</h5>
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
                      <th scope="col">First</th>
                      <th scope="col">Last</th>
                      <th scope="col">Handle</th>
                      <th scope="col">View</th>
                      <th scope="col">Edit</th>
                      <th scope="col">Delete</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                      <th scope="row">1</th>
                      <td>Mark</td>
                      <td>Otto</td>
                      <td>@mdo</td>
                      <td><i class="fa-solid fa-eye text-info"></i></td>
                      <td><i class="fa-solid fa-pen-to-square text-warning"></i></td>
                      <td><i class="fa-solid fa-trash text-danger"></i></td>
                  </tr>
                  <tr class="table-light">
                      <th scope="row">2</th>
                      <td>Jacob</td>
                      <td>Thornton</td>
                      <td>@fat</td>
                      <td><i class="fa-solid fa-eye text-info"></i></td>
                      <td><i class="fa-solid fa-pen-to-square text-warning"></i></td>
                      <td><i class="fa-solid fa-trash text-danger"></i></td>
                  </tr>
                  <tr class="table-secondary">
                      <th scope="row">3</th>
                      <td>John</td>
                      <td>Doe</td>
                      <td>@social</td>
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
