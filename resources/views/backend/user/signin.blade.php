@extends('layout.login')

@section('extra-css')
<!-- DataTables -->
<link rel="stylesheet" href="{{ URL('public/iCheck/square/blue.css') }}">
@endsection

@section('content')
<div class="hold-transition login-page-wrapper">
  <div class="login-box-kemhan">
    <div class="login-logo">
      <a href="#" title="Kementerian Pertahanan"><img class="img-responsive" src="{{ URL('public/images/') }}/logo.png"/>
          </a>
    </div>
    <div class="login-label text-center">
      <span class="a-mon">Sistem Monitoring Administrasi Pelaksanaan Anggaran</span><br>
      <span class="k-per">Kementerian Pertahanan Republik Indonesia</span>
    </div>

    <!-- /.login-logo -->
    <div class="login-box-body-page">
      <p class="login-box-msg">Login</p>

      <form action='{{URL("/cms/user/signin")}}' method="POST">
        {{ csrf_field() }}
        <div class="form-group has-feedback">
          <input type="text" name="username" class="form-control" placeholder="Username">
          <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input type="password" name="password" class="form-control" placeholder="Password">
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <select name="level" class="form-control">
            <option value="">Pilih Level User</option>
            <option value="1">Kemhan</option>
            <option value="2">Unit Organisasi</option>
            <option value="3">Kotama</option>
            <option value="4">Satuan Kerja</option>
          </select>
        </div>
        <div class="row">
          <div class="col-xs-8">
            <div class="checkbox icheck">
              <label>
                <input type="checkbox"> Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-xs-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <a href="#">I forgot my password</a><br>
      <a href="register.html" class="text-center">Register a new membership</a>

    </div>
    <!-- /.login-box-body -->
  </div>
  <!-- /.login-box -->
</div>
@endsection

@section('extra-js')
<!-- iCheck -->
<script src="{{ URL('public/iCheck/icheck.min.js') }}"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
@endsection