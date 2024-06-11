@extends('layouts.admin.dashboard')
@section('content')
<section class="vh-100 bg-image">
    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
      <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12 col-md-9 col-lg-7 col-xl-6">
            <div class="card" style="border-radius: 15px;">
              <div class="card-body p-5">
                <h2 class="text-uppercase text-center mb-5">Hasta Kayıt</h2>
                <form action="{{ route('patient.store') }}" method="post">
                  @csrf
                  <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label" for="form3Example1cg">Ad SOyad</label>
                    <input type="text" id="form3Example1cg" name="name" class="form-control form-control-lg" placeholder="İsim" required />

                  </div>
                  <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label" for="form3Example2cg">TC Kimlik No</label>
                    <input type="text" id="form3Example2cg" name="tc" class="form-control form-control-lg" placeholder="TC Kimlik No" required />

                  </div>
                  <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label" for="form3Example3cg">TC Kimlik Seri Numarası</label>
                    <input type="text" id="form3Example3cg" name="serial_key" class="form-control form-control-lg" placeholder="TC Kimlik Seri Numarası" required />

                  </div>
                  <div data-mdb-input-init class="form-outline mb-4">
                    <select name="disiase" class="form-control form-control-lg" required>
                      <label class="form-label" for="diseases">Hastalıklar</label>
                      <option value="">Bir hastalık seçin</option>
                      <option value="Baş Ağrısı">Baş Ağrısı</option>
                      <option value="Astım">Astım</option>
                      <option value="Diyabet">Diyabet</option>
                      <option value="Grip">Grip</option>
                      <option value="Hipertansiyon">Hipertansiyon</option>
                      <option value="Migren">Migren</option>
                      <option value="Obezite">Obezite</option>
                      <option value="Soğuk Algınlığı">Soğuk Algınlığı</option>
                      <option value="Depresyon">Depresyon</option>
                      <option value="Reflü">Reflü</option>
                    </select>

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
