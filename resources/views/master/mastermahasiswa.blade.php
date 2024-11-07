
@extends("layout.main")
@section('title','Master Mahasiswa')

@section('page-title'.'Master Mahasiswa')

@section('page-breadcrumb')
    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
    <li class="breadcrumb-item">Mahasiswa</li>
    <li class="breadcrumb-item active">Master Mahasiswa</li>
@endsection

@section('extra-css')

@endsection

@section('page-content')
<div class="row">
        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Master Mahasiswa</h5>
              <p>This is an examle page with no contrnt. You can use it as a starter for your custom pages.</p>
            </div>
          </div>

        </div>

</div>
<div class="card-body">
<form>
                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">email</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                  <div class="col-sm-10">
                    <input type="password" class="form-control">
                  </div>
                </div>
</form>
</div>

@endsection

@section('page-js')

@endsection