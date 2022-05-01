@extends('layout.admin')
@section('content')
<?php $page = 'products';?>
  <!-- Content Wrapper. Contains page content -->
  <link rel="stylesheet" href="dist/css/phantrang.css">
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Products</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Products</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Products</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 1%">ID</th>
                      <th style="width: 10%">Name</th>
                      <th style="width: 10%">Image</th>
                      <th style="width: 10%">Price</th>
                      <th style="width: 20%">Description</th>
                      <th style="width: 6%">Protype</th>
                      <th style="width: 6%">Expipy</th>
                      <th style="width: 8%">Action</th>
                  </tr>
              </thead>
              <tbody>
                  @foreach($data as $product)
                  <tr>
                      <td>{{ $product->id }}</td>
                      <td>
                          <a>{{ $product->product_name }}</a>
                      </td>
                      <td><img src="../img/{{ $product->image }}" style="width: 70px" alt=""></td>
                      <td class="project_progress">{{ $product->price }} VND</td>
                      <td class="project_progress">{{ $product->description }}</td>
                      <td class="project_progress">{{ $product->type_id }}</td>
                      <td class="project_progress">{{ $product->expiry }}</td>
                      <td class="project-actions text-right">
                          <a class="btn btn-info btn-sm" href="{{ route('product_edit',['id' => $product->id ]) }}">
                              <i class="fas fa-pencil-alt pr-2 pl-1">
                              </i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-sm" href="{{ route('product_del',['id' => $product->id ]) }}" onclick="return confirm('Bạn có chắc chắn muốn xóa không?')">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </a>
                      </td>
                  </tr>
                  @endforeach
              </tbody>             
          </table>
          <div class="clearfix pt-3 pl-3">
          {{$data->links()}}
          </div>

                
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@stop