@include ('layouts/admin/head')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    @include ('layouts/admin/sidebar')
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
        @include ('layouts/admin/header')
        <!-- Topbar -->

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">หน้า Add Product</h1>
            <form action="{{route('product.c')}}" method="POST" enctype="multipart/form-data">
              @csrf
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="./">Home</a></li>
                <li class="breadcrumb-item">Tables</li>
                <li class="breadcrumb-item active" aria-current="page">หน้า Add Product</li>
              </ol>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <!-- Form Basic -->
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">หน้า Add Product</h6>
                  <td><a href="{{route('productform')}}" class="btn btn-sm btn-secondary">กลับสู่หน้า Product</a></td>
                </div>
                <div class="card-body">
                  <form>

                    <div class="form-group">
                      <label>Add Name</label>
                      <input type="text" class="form-control" id="name" name="name" placeholder="Enter Add Head-Text">
                      @error('name')
                      <span class="text-danger">{{$message}}</span>
                      @enderror
                    </div>

                    <div class="form-group">
                      <label>Add Image</label>
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="image" name="image">
                        <label class="custom-file-label" for="image">Choose file</label>
                        @error('image')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                      </div>
                    </div>

                    <div class="form-group">
                      <label>Add Price</label>
                      <input type="text" class="form-control" id="Price" name="Price" placeholder="Enter Add Price">
                      @error('Price')
                      <span class="text-danger">{{$message}}</span>
                      @enderror
                    </div>

                    <div class="form-group">
                      <label>Add Detail</label>
                      <input type="text" class="form-control" id="Detail" name="Detail" placeholder="Enter Add Detail">
                      @error('Detail')
                      <span class="text-danger">{{$message}}</span>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label>Add Type</label>
                      <select class="form-control" name="category_id">
                        @foreach ($categories as $category)
                        <option value="{{$category->category_id}}">{{$category->name}}</option>
                        @endforeach
                      </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                </div>
              </div>



            </div>


          </div>

          <!--Row-->


        </div>
        <!---Container Fluid-->
      </div>
      <!-- Footer -->
      <!-- Footer -->
      @include ('layouts/admin/footer')
      <!-- Footer -->
    </div>
  </div>
  <script type="text/javascript">
    $(document).ready(function() {
      $('#image').change(function(e) {
        var reader = new FileReader();
        reader.onload = function(e) {
          $('#showImage').attr('src', e.target.result);
        }
        reader.readASDataURL(e.target.files['0']);
      });
    });
  </script>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>


</body>

</html>
