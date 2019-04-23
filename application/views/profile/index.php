<body>
    <div class="container justify-content-center mt-5 bg-white p-3 rounded">
        <div class="container-fluid ">
            <div class="row ">
                <div class="col-md-8 border rounded">
                    <div class="row mt-3 ">
                        <div class="col-md-3">
                            <img alt="avatar" src="<?=base_url()?>assets\imgs\avatar\<?=$avatar?>"
                                class="rounded-circle" />
                        </div>
                        <div class="col-md-5">
                            <h2 class="mt-2">
                                <?=$user['nama']?>
                            </h2>
                            <h6 class="text-info text-left">
                                PEMULA
                            </h6>
                        </div>
                        <div class="col-md-4">
                            <h3 class="text-right">
                                <?=$user['poin']?> Points
                            </h3>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-12">
                            <p><strong>Nama Depan:</strong> <?=$user['nama']?> </p>
                            <p><strong> Usia: </strong> <?=$umur?></p>
                            <p><strong>Tingkat Pendidikan : </strong><?=$user['tingkat']?></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <h5>UCAPAN TERIMA KASIH (<?=$countAllUser?>)</h5>
                    <?php foreach ($userr as $uInfo) { ?>
                    <img alt="<?=$uInfo->nama?>" src="<?=base_url()?>assets\imgs\avatar\user.svg" width="42"
                        class="rounded-circle" />
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>


</body>