
@extends("layout.main")
@section('title','Judul Tag')

@section('page-title'.'Halaman Hello World')

@section('page-breadcrumb')
    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
    <li class="breadcrumb-item">Pages</li>
    <li class="breadcrumb-item active">Blank</li>
@endsection

@section('extra-css')

@endsection

@section('page-content')
<div class="row">
        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Example Card</h5>
              <p>This is an examle page with no contrnt. You can use it as a starter for your custom pages.</p>
            </div>
          </div>

        </div>

        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Example Card</h5>
              <p>This is an examle page with no contrnt. You can use it as a starter for your custom pages.</p>
            </div>
          </div>

        </div>
      </div>
@endsection

@section('page-js')

@endsection