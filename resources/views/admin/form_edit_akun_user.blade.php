@extends('admin.layout')

@section('content')
<main>
    <div class="container-fluid px-5 px-5 mt-sm-2 mb-sm-2">
        <h1 class="mt-2">Edit User Account</h1>
        <ol class="breadcrumb mt-2">
            <li class="text_page breadcrumb"><a href="dashboard">Dashboard / </a>
                <a href="data_kajian" class="active_title">
                    User Account /</a><a href="data_kajian" class="active_title"> Edit User Account</a>
            </li>
        </ol>

        <div class="card mb-4">
            <div class="card-body">
                <div class="form-validation">
                    <form class="form-valide" action="" method="post">
                        @csrf
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label" for="val-nama">Nama
                            </label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control input-default" id="val-nama" name="val-nama"
                                    placeholder="Nama">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label" for="val-tempat_lahir">Tempat Lahir
                            </label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control input-default" id="val-tempat_lahir"
                                    name="val-tempat_lahir" placeholder="Tempat Lahir">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label" for="val_tanggal">Tanggal Lahir</label>
                            <div class="col-lg-6">
                                <input type="date" class="form-control input-default" id="val-tanggal"
                                    name="val_tanggal">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label" for="val-alamat">Alamat</label>
                            <div class="col-lg-6">
                                <textarea class="form-control" id="val-alamat" name="val-alamat"
                                    placeholder="Alamat"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label" for="val-cabang">Cabang</label>
                            <div class="col-lg-6">
                                <textarea class="form-control" id="val-cabang" name="val-cabang"
                                    placeholder="Cabang"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label" for="val-daerah">Daerah</label>
                            <div class="col-lg-6">
                                <textarea class="form-control" id="val-daerah" name="val-daerah"
                                    placeholder="Daerah"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label" for="val-wilayah">Wilayah</label>
                            <div class="col-lg-6">
                                <textarea class="form-control" id="val-wilayah" name="val-wilayah"
                                    placeholder="Wilayah"></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label" for="val-kta">Foto Kartu Tanda Anggota (KTA) </label>
                            <div class="col-lg-6">
                                <div class="input-group mb-3">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="file-input">
                                        <label class="custom-file-label" for="file-input">Choose
                                            file</label>
                                    </div>
                                </div>
                                <p class="text-upload-foto">Pastikan untuk mengunggah foto Anda dalam salah
                                    satu format berikut: PNG, JPG, JPEG.</p>
                                <div class="drop-area" id="drop-area">
                                    <i class="fa fa-cloud" style="color: #04454D;"></i><br>
                                    Drag & Drop Gambar Disini
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label"></label>
                            <div class="col-md-6 mt-2">
                                <button type="submit" class="btn-green-submit btn-block">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</main>
@endsection