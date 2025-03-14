
<div class="modal fade" id="modal_tambah_absensi">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Data</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="form-horizontal" id="" action="/absensi" method="post">
                @csrf
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="kode_matkul" class="col-sm-3 ">Kode</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="kode_matkul" id="kode_matkul" placeholder="Kode Mata Kuliah">
                        </div>
                    </div>
                    <div class=" modal-footer right-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal"
                            onclick="location.reload()">Batal</button>
                            <button type="submit" class="btn btn-primary">Tambahkan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>