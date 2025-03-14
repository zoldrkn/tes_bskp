@extends('layout.layout_admin')
@section('title', 'Data Training')
@section('content')

<!-- Notifikasi pesan flash -->
{{-- @if(session('success'))
<div class="alert alert-success" id="flash-message">
    {{ session('success') }}
</div>
@endif

@if(session('error'))
<div class="alert alert-danger" id="flash-message">
    {{ session('error') }}
</div>
@endif --}}



<section class="section dashboard">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body overflow-auto">
                    <h5 class="card-title"></h5>
                    <div class="d-flex justify-content-end align-items-center mb-3" style="margin-right: 50px;">
                        <a href="{{ url('training') }}" class="btn btn-primary btn-sm">Tambah Data</a>
                    </div>
                   

                    <!-- Tabel Data Pegawaii -->
                    <div class="datatable-wrapper datatable-loading no-footer sortable searchable fixed-columns">
                        <div class="datatable-top">
                            <div class="datatable-dropdown">
                                <label>
                                    <select class="datatable-selector" name="per-page">
                                        <option value="5">5</option>
                                        <option value="10" selected>10</option>
                                        <option value="15">15</option>
                                        <option value="-1">All</option>
                                    </select>
                                    entries per page
                                </label>
                            </div>
                            <div class="datatable-search">
                                <input class="datatable-input" placeholder="Search..." type="search" name="search" title="Search within table">
                            </div>
                        </div>

                        <div class="datatable-container">
                            <table class="table datatable datatable-table"> 
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>User</th>
                                        <th>Training</th>
                                        <th>Tanggal Mulai</th>
                                        <th>Tanggal Selesai</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modal Tambah Data -->
{{-- <div class="modal fade" id="tambahPegawaiModal" tabindex="-1" aria-labelledby="tambahPegawaiModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahPegawaiModalLabel">Tambah Data Pegawai</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ url('data-pegawai') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Pegawai</label>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>
                    <div class="mb-3">
                        <label for="nik" class="form-label">NIK</label>
                        <input type="text" class="form-control" id="nik" name="nik" required>
                    </div>
                    <div class="mb-3">
                        <label for="no_hp" class="form-label">No HP</label>
                        <input type="text" class="form-control" id="no_hp" name="no_hp" required>
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <textarea class="form-control" id="alamat" name="alamat" rows="3" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="jabatan" class="form-label">Jabatan</label>
                        <input type="text" class="form-control" id="jabatan" name="jabatan" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </form>
            </div>
        </div>
    </div>
</div> --}}

<!-- Modal Edit -->

<!-- Template Main JS File -->
<script src="{{ asset('/') }}niceadmin/assets/js/main.js"></script>

<script>
    document.querySelector('.btn-primary').addEventListener('click', function(e) {
        e.preventDefault(); // Cegah redirect default
        new bootstrap.Modal(document.getElementById('tambahPegawaiModal')).show();
    });

    setTimeout(function() {
        var flashMessage = document.getElementById('flash-message');
        if (flashMessage) {
            flashMessage.style.display = 'none';
        }
    }, 3000);
</script>
@endsection