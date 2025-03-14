
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
                    <div class="form-group row">
                        <label for="matakuiah" class="col-sm-3 ">Mata Kuliah</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="matakuliah" id="matakuliah" placeholder="Mata Kuliah">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="sks" class="col-sm-3 ">SKS</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="sks" id="sks" placeholder="SKS">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kurikulum" class="col-sm-3">Kurikulum</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="kurikulum" id="kurikulum">
                                <option value="">-- Pilih --</option>
                                <option value="2019">2019</option>
                                <option value="2020">2020</option>
                                <option value="2023">2023</option>
                            </select>
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