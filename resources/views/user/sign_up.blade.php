<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/fonts/icomoon/style.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style-signup.css">
  <title>Sign Up</title>
</head>

<body>


  <div class="container1">
    <div class="d-lg-flex half">
      <div class="bg order-1 order-md-2" style="background-image: url('assets/img/bg-1.png');"></div>
      <div class="contents order-2 order-md-1">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7">
              <h3><strong>Sign Up</strong></h3>
              <form action="{{ route('store') }}" method="post" enctype="multipart/form-data">
              @csrf
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" placeholder="Username" id="username" name="username">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="occupation">Pekerjaan</label>
                    <input type="text" class="form-control" placeholder="Occupation" id="occupation" name="pekerjaan">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="username">Password</label>
                    <input type="password" class="form-control" placeholder="Password" id="password" name="password">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="address">Alamat</label>
                    <input type="text" class="form-control" placeholder="Address" id="address" name="alamat">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="membership">Nomor Anggota</label>
                    <input type="text" class="form-control" placeholder="Membership Number" id="membership" name="nomor_keanggotaan">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="regional">Cabang</label>
                    <input type="text" class="form-control" placeholder="Regional Branch" id="regional" name="cabang">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="place">Tempat Lahir</label>
                    <input type="text" class="form-control" placeholder="Place of Birth" id="place" name="tempat_lahir">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="area">Wilayah</label>
                    <input type="text" class="form-control" placeholder="Area" id="Area" name="email" name="wilayah">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="date">Tanggal Lahir</label>
                    <input type="date" class="form-control" placeholder="Date of Birth" id="date" name="tanngal_lahir">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="region">Daerah</label>
                    <input type="text" class="form-control" placeholder="Region" id="region" name="daerah">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="gender">Gender</label>
                    <div>
                      <label class="control control--checkbox"><span class="caption">Ladies</span>
                        <input type="checkbox" name="gender" value="Ladies">
                        <div class="control__indicator"></div>
                      </label>
                      <label class="control control--checkbox"><span class="caption">Gentlemen</span>
                        <input type="checkbox" name="gender" value="Gentlemen">
                        <div class="control__indicator"></div>
                      </label>
                    </div>
                  </div>
                  <!-- <div class="form-group col-md-6">
                    <label for="photo">Photo</label>
                    <input type="file" class="form-control" placeholder="Upload Photo" id="photo">
                  </div> -->

                  <div class="mb-3 row">
                        <label for="photo" class="col-md-4 col-form-label text-md-end text-start">Photo</label>
                        <div class="col-md-6">
                          <input type="file" class="form-control @error('photo') is-invalid @enderror" id="photo" name="foto_kta" value="{{ old('photo') }}">
                            @if ($errors->has('photo'))
                                <span class="text-danger">{{ $errors->first('photo') }}</span>
                            @endif
                        </div>
                    </div>

                </div>
                <input type="submit" value="Register" class="btn btn-block btn-primary">
              </form>
              <p class="text-center">Already Account? <a href="sign_in">Sign In</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <script src="js/script.js"></script>
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
</body>

</html>