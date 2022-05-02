@extends('layout.admin')
@section('content')
<?php $page = 'productadd';?>
<link rel="stylesheet" href="../../plugins/summernote/summernote-bs4.min.css">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Thêm Sản Phẩm</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Project Add</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
    <form action="" method="POST" roles="form" enctype="multipart/form-data">      
        @csrf
        <div class="row">
            <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">        
                <h3 class="card-title">General</h3>
                <div class="card-tools ">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                    </button>
                </div>
                </div>
                <div class="card-body">
                <div class="form-group">
                    <label for="inputName">Tên Sản Phẩm</label>
                    <input type="text" name="product_name" id="inputName" class="form-control" placeholder="Nhập tên sản phẩm" require>
                    @if($errors->has('product_name'))
                        {{ $errors->frist('product_name') }}
                    @endif
                </div>
                <div class="form-group">
                    <label for="inputType">Loại Sản Phẩm</label>
                    <select id="inputType" name="type_id" class="form-control custom-select">
                    <option selected disabled>Select one</option>
                    @foreach($allprotype as $protype)
                        <option value ='{{ $protype -> type_id }}'> {{ $protype -> type_name  }}</option>
                    @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="inputPrice">Giá Sản Phẩm</label>
                    <input type="number" name="price" id="inputPrice" class="form-control" placeholder="Nhập giá sản phẩm" require>
                    @if($errors->has('price'))
                        {{ $errors->frist('price') }}
                    @endif
                </div>
                <div class="form-group">
                    <label for="inputImg">Ảnh Sản Phẩm</label>
                    <input type="file" name="image" id="inputImage" class="form-control">
                </div>
                <div class="form-group">
                    <label for="inputDescription">Mô Tả</label>
                    <textarea id="summernote" name="description" class="form-control" rows="6"></textarea>
                </div>
                <div class="form-group">
                    <label for="inputPrice">Hạn Sử Dụng</label>
                    <input type="number" name="expiry" id="inputExpiry" class="form-control" placeholder="Nhập hạn sử dụng" require>
                </div>
                <div class="form-group">
                    <label for="inputPromotion">Giảm Giá</label>
                    <input type="number" name="promotion" id="inputPromotion" class="form-control" placeholder="Nhập khuyến mãi" require>
                </div>
                </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <a href="{{ route('products') }}" class="btn btn-secondary">Cancel</a>
                <input type="submit" value="Create new Porject" class="btn btn-success float-right" >
            </div>
        </div>
        </form>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@stop