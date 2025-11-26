@extends('layout/admin')
@section('body')
<div class="card shadow mb-4">
  <div class="card-header py-3 bg-dark text-white d-flex justify-content-between align-items-center">
      <h5 class="m-0 font-weight-bold">Danh mục sản phẩm</h5>
      <a href="{{ route('admin.products_management.create') }}" class="btn btn-primary btn-sm">
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
                      <td><a href="{{ route('admin.products_management.edit',['products_management'=>$object->id]) }}" class="fa-solid fa-pen-to-square text-warning"></a>
                        </i></td>
                      <td><a href="{{route('admin.products_management.destroy',['products_management'=>$object->id])}}" title="Delete {{$object->name}}" onclick="event.preventDefault();window.confirm('Bạn đã chắc chắn xóa '+ '{{$object->name}}' +' chưa?') ?document.getElementById('products_management-delete-{{ $object->id }}').submit() :0;" class="fa-solid fa-trash text-danger"></i>
                              <form action="{{ route('admin.products_management.destroy', ['products_management' => $object->id]) }}" method="post" id="products_management-delete-{{ $object->id }}">
                                  {{ csrf_field() }}
                                  {{ method_field('delete') }}
                              </form>
                          </a>
                      </td>                   
                    </tr>
                    @empty
                        <h1>chua du lieu</h1>
                    @endforelse
              </tbody>
              </tbody>
          </table>
      </div>
  </div>
</div>


<div class="card shadow mb-4">
  <div class="card-header py-3 bg-dark text-white d-flex justify-content-between align-items-center">
      <h5 class="m-0 font-weight-bold">Comment</h5>
      <a href="{{ route('admin.comment.create') }}" class="btn btn-primary btn-sm">
          <i class="fa-solid fa-plus"></i> Add
      </a>
  </div>

  <div class="card-body bg-light">
      <div class="table-responsive">
          <table class="table table-bordered table-hover text-center align-middle">
              <thead class="table-primary text-dark">
                 <tr>
                      <th scope="col">STT</th>
                      <th scope="col">Mã Khách Hàng</th>
                      <th scope="col">Mã Sản Phẩm</th>
                      <th scope="col">Nội Dung Bình Luận</th>
                      <th scope="col">View</th>
                      <th scope="col">Edit</th>
                      <th scope="col">Delete</th>
                    </tr>
                  </thead>
              <tbody>
                     @forelse($comments as $object)
                    <tr>
                      <th scope="row">{{ $object->id }}</th>
                      <td>{{ $object->customer_id }}</td>
                      <td>{{ $object->product_id }}</td>
                      <td>{{ $object->content }}</td>
                      <td><i class="fa-solid fa-eye text-info"></i></td>
                      <td><a href="{{ route('admin.comment.edit',['comment'=>$object->id]) }}" class="fa-solid fa-pen-to-square text-warning"></a>
                        </i></td>
                      <td><a href="{{route('admin.comment.destroy',['comment'=>$object->id])}}" title="Delete {{$object->name}}" onclick="event.preventDefault();window.confirm('Bạn đã chắc chắn xóa '+ '{{$object->name}}' +' chưa?') ?document.getElementById('comment-delete-{{ $object->id }}').submit() :0;" class="fa-solid fa-trash text-danger"></i>
                              <form action="{{ route('admin.comment.destroy', ['comment' => $object->id]) }}" method="post" id="comment-delete-{{ $object->id }}">
                                  {{ csrf_field() }}
                                  {{ method_field('delete') }}
                              </form>
                          </a>
                      </td>           
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
      <h5 class="m-0 font-weight-bold">Đánh giá</h5>
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
                      <th scope="col">ID Khách hàng</th>
                      <th scope="col">ID Sản phẩm</th>
                      <th scope="col">Điểm đánh giá(Score)</th>
                      <th scope="col">Nội dung (Comment)</th>
                      <th scope="col">View</th>
                      <th scope="col">Edit</th>
                      <th scope="col">Delete</th>
                    </tr>
                  </thead>
              <tbody>
                     @forelse($ratings as $object)
                    <tr>
                      <th scope="row">{{ $object->id }}</th>
                      <td>{{ $object->customer_id }}</td>
                      <td>{{ $object->product_id }}</td>
                      <td>{{ $object->score }}</td>
                      <td>{{ $object->comment }}</td>
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