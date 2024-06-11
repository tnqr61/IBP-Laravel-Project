@extends('layouts.admin.dashboard')

@section('content')
<section class="vh-100 bg-image">
    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
      <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12 col-md-9 col-lg-7 col-xl-6">
            <div class="card" style="border-radius: 15px;">
              <div class="card-body p-5">
                <h2 class="text-uppercase text-center mb-5">Doktor Kayıt</h2>
                <form action="{{ route('doctor.store') }}" method="post">
                  @csrf
                  <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label" for="name">Ad Soyad</label>
                    <input type="text" id="name" name="name" class="form-control form-control-lg" placeholder="İsim" required />
                  </div>
                  <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label" for="department">Uzmanlık Alanı</label>
                    <select id="department" name="department" class="form-control form-control-lg" required>
                      <option value="">Bir uzmanlık alanı seçin</option>
                      <option value="Kardiyoloji">Kardiyoloji</option>
                      <option value="Nöroloji">Nöroloji</option>
                      <option value="Ortopedi">Ortopedi</option>
                      <option value="Pediatri">Pediatri</option>
                      <option value="Genel Cerrahi">Genel Cerrahi</option>
                      <option value="Dermatoloji">Dermatoloji</option>
                      <option value="Psikiyatri">Psikiyatri</option>
                      <option value="Gastroenteroloji">Gastroenteroloji</option>
                      <option value="Onkoloji">Onkoloji</option>
                      <option value="Göz Hastalıkları">Göz Hastalıkları</option>
                      <option value="Göz Hastalıkları">Üroloji</option>
                    </select>
                  </div>
                  <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label" for="emailAddress">E-posta</label>
                    <input type="email" id="email" name="email" class="form-control form-control-lg" placeholder="E-posta" required />
                  </div>
                  <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label" for="password">Şifre</label>
                    <input type="password" id="password" name="password" class="form-control form-control-lg" placeholder="Şifre" required />
                  </div>
                  <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Kayıt Et</button>
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
