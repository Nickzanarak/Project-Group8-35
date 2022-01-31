@include('layouts.admin.head')

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    @include('layouts.admin.sidebar')
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
        @include('layouts.admin.header')
        <!-- Topbar -->

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">หน้า Edit User</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item">Tables</li>
              <li class="breadcrumb-item active" aria-current="page">Edit Add User</li>
            </ol>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <!-- Form Basic -->
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">หน้า Edit User</h6>
                  <td><a href="{{route('user.index')}}" class="btn btn-sm btn-secondary">กลับสู่หน้า User</a></td>
                </div>
                <div class="card-body">
                  <form action="{{url('admin/user/update/'.$users->id)}}" method="POST">
                      @csrf
                    <div class="form-group">
                      <label for="name">Name</label>
                      <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" value="{{$users->name}}">
                    </div>

                    <div class="form-group">
                      <label for="phone">Phone</label>
                      <input type="text" class="form-control" id="phone" name="phone" aria-describedby="emailHelp" value="{{$users->phone}}">
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
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
      @include('layouts.admin.footer')
      <!-- Footer -->
    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>


</body>

</html>
