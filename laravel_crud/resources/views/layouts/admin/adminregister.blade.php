@extends('layouts.admin.dashboard')

@section('content')
<section class="vh-100 bg-image">
    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
      <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12 col-md-9 col-lg-7 col-xl-6">
            <div class="card" style="border-radius: 15px;">
              <div class="card-body p-5">
                <h2 class="text-uppercase text-center mb-5">Admin Kayıt</h2>
                <form action="{{ route('admin.register') }}" method="post">
                  @csrf
                  <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label" for="email">E-posta</label>
                    <input type="email" id="email" name="email" class="form-control form-control-lg" placeholder="E-posta" required />
                  </div>
                  <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label" for="password">Şifre</label>
                    <input type="password" id="password" name="password" class="form-control form-control-lg" placeholder="Şifre" required />
                  </div>
                  <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Kayıt Ol</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>
@endsection
