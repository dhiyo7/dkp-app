<script type="text/javascript">

    var i = 0;

    $("#addKomoditas").click(function(){

        ++i;

        $("#dynamicKomoditas").append('<tr><td><input type="text" name="komoditas['+i+'][jenis_komoditas]" placeholder="Masukkan Jenis Komoditas" class="form-control" /></td><td><button type="button" class="btn btn-danger remove-tr">Remove</button></td></tr>');
    });

    $(document).on('click', '.remove-tr', function(){
        $(this).parents('tr').remove();
    });

</script>

<script type="text/javascript">

    var i = 0;

    $("#addAsset").click(function(){

        ++i;

        $("#dynamicAsset").append('<tr><td><input type="text" name="asset['+i+'][sarana]" placeholder="Masukkan Jenis Sarana" class="form-control" /></td><td><input type="text" name="asset['+i+'][jml_asset]" placeholder="Masukkan Jumlah Asset" class="form-control" /></td><td><input type="text" name="asset['+i+'][status]" placeholder="Masukkan Status" class="form-control" /></td><td><input type="text" name="asset['+i+'][nil_asset]" placeholder="Masukkan Nilai" class="form-control" /></td><td><button type="button" class="btn btn-danger remove-tr">Remove</button></td></tr>');
    });

    $(document).on('click', '.remove-tr', function(){
        $(this).parents('tr').remove();
    });

</script>

<script type="text/javascript">

    var i = 0;

    $("#addProduksi").click(function(){

        ++i;

        $("#dynamicProduksi").append('<tr><td><input type="text" name="bahan['+i+'][bahan_baku_utama]" placeholder="Masukkan Bahan Baku Utama dan Tambahan" class="form-control" /></td><td><input type="text" name="bahan['+i+'][nilai_bahan_baku_utama]" placeholder="Masukkan Nilai" class="form-control" /></td><td><button type="button" class="btn btn-danger remove-tr">Remove</button></td></tr>');
    });

    $(document).on('click', '.remove-tr', function(){
        $(this).parents('tr').remove();
    });

</script>
