@extends('layout.admin')
@section('content')
<?php $page = 'customers';?>
  <!-- Content Wrapper. Contains page content -->
  <link rel="stylesheet" href="dist/css/phantrang.css">
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>List of Customer</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active">List of Customer</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content p-1">

      <!-- Default box -->
      <div class="card ">
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 1%">ID</th>
                      <th style="width: 20%">Name</th>
                      <th style="width: 20%">Email</th>
                      <th style="width: 20%">Phone</th>
                      <th style="width: 20%">Address</th>
                      <th style="width: 9%">Action</th>
                  </tr>
              </thead>
              <tbody>
                  @foreach($customers as $customer)
                  <tr>
                      <td>{{ $customer->id }}</td>
                      <td>
                          <a>{{ $customer->customer_name }}</a>
                      </td>
                      <td>
                          <a>{{ $customer->email }}</a>
                      </td>
                      <td>
                          <a>{{ $customer->phone }}</a>
                      </td>
                      <td>
                          <a>{{ $customer->address }}</a>
                      </td>
                      <td class="project-actions text-right">
                          <a class="btn btn-danger btn-sm" href="{{ route('customer_del',['id' => $customer->id ]) }}" onclick="return confirm('Bạn có chắc chắn muốn xóa không?')">
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
          {{$customers->links()}}
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