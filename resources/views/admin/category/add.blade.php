@include ('layouts/admin/head')

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
            <h1 class="h3 mb-0 text-gray-800">หน้า Add Type Product</h1>
            <form action="{{route('create')}}" method="post">
              {{csrf_field()}}
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="./">Home</a></li>
                <li class="breadcrumb-item">Tables</li>
                <li class="breadcrumb-item active" aria-current="page">หน้า Add Type Product</li>
              </ol>
          </div>
          <div class="row">
            <div class="col-lg-12">

              <!-- Form Basic -->
              <div class="card mb-4">

                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">หน้า Add Type-Product</h6>
                  <td><a href="{{route('category')}}" class="btn btn-sm btn-secondary">กลับสู่หน้า Type Product</a></td>
                </div>
                <div class="card-body">
                  <form>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Add Type Product</label>
                      <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp" placeholder="Enter Add Type Product">
                      @error('name')
                      <span class="text-danger">{{$message}}</span>
                      @enderror
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
      @include ('layouts/admin/footer')
      <!-- Footer -->
    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>


</body>

</html>