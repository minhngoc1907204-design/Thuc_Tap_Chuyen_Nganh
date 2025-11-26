@extends('layout/admin')
@section('body')
<div class="card shadow mb-4">
  <div class="card-header py-3 bg-dark text-white d-flex justify-content-between align-items-center">
      <h5 class="m-0 font-weight-bold">Category</h5>
      <a href="{{ route('admin.category.create') }}" class="btn btn-primary btn-sm">
          <i class="fa-solid fa-plus"></i> Add
      </a>
  </div>

  <div class="card-body bg-light">
      <div class="table-responsive">
          <table class="table table-bordered table-hover text-center align-middle">
              <thead class="table-primary text-dark">
                  <tr>
                      <th scope="col">STT</th>
                      <th scope="col">Tên</th>
                      <th scope="col">Mô tả</th>
                      <th scope="col">View</th>
                      <th scope="col">Edit</th>
                      <th scope="col">Delete</th>
                  </tr>
              </thead>
              <tbody>
                  @forelse($categories as $object)
                  <tr>
                      <th scope="row">{{ $object->id }}</th>
                      <td>{{$object->name}}</td>
                      <td>{{$object->description}}</td>
                      <td><i class="fa-solid fa-eye text-info"></i></td>
                      <td><a href="{{ route('admin.category.edit',['category'=>$object->id]) }}" class="fa-solid fa-pen-to-square text-warning"></a>
                        </i></td>
                      <td><a href="{{route('admin.category.destroy',['category'=>$object->id])}}" title="Delete {{$object->name}}" onclick="event.preventDefault();window.confirm('Bạn đã chắc chắn xóa '+ '{{$object->name}}' +' chưa?') ?document.getElementById('category-delete-{{ $object->id }}').submit() :0;" class="fa-solid fa-trash text-danger"></i>
                              <form action="{{ route('admin.category.destroy', ['category' => $object->id]) }}" method="post" id="category-delete-{{ $object->id }}">
                                  {{ csrf_field() }}
                                  {{ method_field('delete') }}
                              </form>
                          </a>
                      </i></td>
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
