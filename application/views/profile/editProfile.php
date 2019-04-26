<body>
    <div class="container mt-5 bg-white rounded">
        <div class="row">
            <div class="col-8 py-5">
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                    data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Preferensi
                                </button>
                            </h5>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                <form action="<?=base_url()?>users/saveEdit" method="post">
                                    <div class="row">
                                        <div class="col-6 ">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text" for="gender">Gender</label>
                                                </div>
                                                <select class="custom-select" name="gender" id="gender">
                                                    <option>Choose...</option>
                                                    <option value="Laki-laki">Laki-laki</option>
                                                    <option value="Perempuan">Perempuan</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="nama-title">Nama </span>
                                                </div>
                                                <input type="text" class="form-control" value="<?=$user['nama']?>"
                                                    aria-label="Username" name="nama" id="nama"
                                                    idaria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text" for="tingkat">Tingkat
                                                        Pendidikan</label>
                                                </div>
                                                <select class="custom-select" name="tingkat" id="tingkat">
                                                    <option>Choose...</option>
                                                    <option value="SMA">SMA</option>
                                                    <option value="SMP">SMP</option>
                                                    <option value="SD">SD</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                        </div>
                                </form>
                                <a href="<?=base_url()?>users/delete">
                                    <button type="button" class="btn btn-danger">Hapus Akun</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Email
                            </button>
                        </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">
                            <span>Email Saat ini : <strong><?=$user['email']?></strong></span>
                            <form action="<?=base_url()?>users/saveEmail" method="post">
                                <table>
                                    <tr>
                                        <td><label for="password">Password : </label></td>
                                        <td><input class="input-group-text mt-2 ml-2"" type=" password" name="password"
                                                id="password">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label for="email">Email : </label></td>
                                        <td><input class="input-group-text mt-2 ml-2" type="text" name="email"
                                                id="email">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><button class="btn btn-primary mt-3" type="submit">Simpan</button></td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Ganti avatar
                            </button>
                        </h5>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                        data-parent="#accordionExample">
                        <div class="card-body">
                            Add Photo
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-3 py-5">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top mt-2" src="<?=base_url()?>assets\imgs\avatar\<?=$avatar?>" alt="Card image cap"
                    width="120" height="120">
                <div class="card-body">
                    <h5 class="card-title text-center"><?=$user['nama']?></h5>
                    <p class="card-text text-center"><?=$user['poin']?> Points</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Negara : <?=$user['negara']?></li>
                    <li class="list-group-item">Tingkat pendidikan : <?=$user['tingkat']?></li>
                    <li class="list-group-item">Tanggal lahir : <?=$user['tanggalLahir']?></li>
                </ul>
            </div>
        </div>
    </div>
    </div>
</body>