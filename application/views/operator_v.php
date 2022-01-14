<div class="content">
  <!-- Header -->
  <!-- Header -->
  <div class="header bg-primary pb-6">
    <div class="container-fluid">
      <div class="header-body">
        <div class="row align-items-center py-4">
          <div class="col-lg-6 col-7">
            <h6 class="h2 text-white d-inline-block mb-0">SYAREFA</h6>
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
              <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                <li class="breadcrumb-item"><a href="#">Data Antrian Resep</a></li>
                <!-- <li class="breadcrumb-item active" aria-current="page">Default</li> -->
              </ol>
            </nav>
          </div>
          <!-- <div class="col-lg-6 col-5 text-right">
            <a href="#" class="btn btn-sm btn-neutral">New</a>
            <a href="#" class="btn btn-sm btn-neutral">Filters</a>
          </div> -->
        </div>
      </div>
    </div>
  </div>
  <!-- Page content -->
  <!-- Dark table -->
  <div class="container-fluid mt--6">
    <div class="row">
      <div class="col">
        <div class="card">
          <div class="card-header bg-gradient-success">
            <div class="row">
              <div class="col-xl-4">
              </div>
              <div class="col-xl-4 ">
                <div class="card card-stats">
                  <div class="card-body">
                    <div class="row">
                      <div class="col lg-4">
                        <h5 class="card-title text-uppercase text-muted text-center mb-0">Total Resep</h5>
                        <span class="text-center h2 font-weight-bold  mb-0">  Hari Ini : <?php echo $total_today; ?></span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 ">
              </div>
            </div>
            <div class="pt-4 text-center">    
              <h4 class="text-uppercase ls-1 text-white py-3 mb-0">Data Antrian</h4>
              <div class="row">
                <div class="col-md-4">
                </div>
                <div class="col-md-4">
                  <!-- tambah data -->
                  <button type="button" class="btn btn-block btn-primary" onClick="tryTambah()">Tambah</button>
                  <!-- <a class="btn btn-block btn-primary" data-toggle="modal" href="#modalTambah" role="button">Tambah</a> -->
                  <div class="modal fade" id="modalTambah" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
                    <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
                      <div class="modal-content">
                        <div class="modal-body p-0">
                          <div class="card bg-secondary border-0 mb-0">
                            <div class="card-header bg-success pb-1">
                              <div class="text-muted text-center mt-2 mb-3">
                                <span class="text-muted text-white">Form Tambah Antrian </span>
                              </div>
                            </div>
                            <div class="text-muted text-center mt-2 mb-3">
                              <span class="text-muted text-red">
                                <p id="pesan"></p>
                              </span>
                            </div>
                            <div class="card-body px-lg-5 py-lg-5">
                              <form role="form">
                                <div class="form-group mb-3">
                                  <div class="input-group input-group-merge input-group-alternative">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="ni ni-badge"></i></span>
                                    </div>
                                    <input class="form-control" name="no_antrian" id="no_antrian" placeholder="No Antrian" type="text">
                                  </div>
                                </div>

                                <div class="form-group mb-3">
                                  <div class="input-group input-group-merge input-group-alternative">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="ni ni-badge"></i></span>
                                    </div>
                                    <input class="form-control" name="no_rm" id="no_rm" placeholder="No Rekam Medis" type="text">
                                  </div>
                                </div>

                                <div class="form-group mb-3">
                                  <div class="input-group input-group-merge input-group-alternative">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="ni ni-badge"></i></span>
                                    </div>
                                    <input class="form-control" name="nama" id="nama" placeholder="Nama" type="text">
                                  </div>
                                </div>

                                <div class="form-group mb-3">
                                  <div class="input-group input-group-merge input-group-alternative">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="ni ni-badge"></i></span>
                                    </div>
                                    <input class="form-control" name="poli" id="poli" placeholder="Poli" type="text">
                                  </div>
                                </div>
<!-- 
                                <div class="form-group mb-3">
                                  <select class="form-control" id="exampleFormControlSelect1" name="poli" id="poli">
                                    <option >-Pilih Poli-</option>
                                    <option value="jantung">Jantung & Pembuluh Darah</option>
                                    <option value="2">Orthopedi</option>
                                    <option value="3">Geriatri</option>
                                  </select>
                                </div> -->

                                <div class="form-group mb-3">
                                <label class="form-control-label" for="exampleFormControlSelect1">Jenis Pembayaran Pasien</label>
                                  <select class="form-control"  name="jenis_pasien" id="jenis_pasien">
                                    <option value="1">BPJS</option>
                                    <option value="2">UMUM</option>
                                  </select>
                                </div>

                                <div class="form-group mb-3">
                                <label class="form-control-label" for="exampleFormControlSelect1">Status Layanan Pasien</label>
                                  <select class="form-control" name="status" id="status">
                                    <option value="1">Belum Dilayani</option>
                                    <option value="2">Sedang dilayani</option>
                                    <option value="3">ambil resep</option>
                                    <option value="4">Selesai dilayani</option>
                                  </select>
                                </div>
                                <div class="badge badge-danger" id="pesanErrorTambah"></div>
                                <div class="text-center">
                                  <!-- <button type="button" id="tombolTambah" class="btn btn-success my-2">Tambah</button> -->
                                  <button type="button" onClick="tambah()" id="tombolTambah" class="btn btn-success my-2" data-dismiss="modal">Tambah</button>
                                  <button type="button" data-dismiss="modal" class="btn btn-danger my-2">Batal</button>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="modal fade" id="modalEdit" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
                    <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
                      <div class="modal-content">
                        <div class="modal-body p-0">
                          <div class="card bg-secondary border-0 mb-0">
                            <div class="card-header bg-success pb-1">
                              <div class="text-muted text-center mt-2 mb-3">
                                <span class="text-muted text-white">Form Edit Data Antrian </span>
                              </div>
                            </div>
                            <div class="card-body px-lg-5 py-lg-5">
                              <form role="form">
                                <div class="form-group mb-3">
                                  <input id="idUser" type="hidden">
                                  <label class="form-control-label" for="exampleFormControlSelect1">Status Layanan Pasien</label>
                                  <select class="form-control" id="editStatus">
                                    <option value="1">Belum Dilayani</option>
                                    <option value="2">Sedang dilayani</option>
                                    <option value="3">ambil resep</option>
                                    <option value="4">Selesai dilayani</option>
                                  </select>
                                </div>
                                <div class="badge badge-danger" id="pesanErrorEdit"></div>
                                <div class="text-center">
                                  <button type="button" onClick="edit()" id="tombolEdit" class="btn btn-success my-2">Edit</button>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                </div>
              </div>
            </div>
          </div>
          <div class="card-body ">
            <div class="table-responsive py-4" id="tempatTabel">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="modalHapus" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header no-bd">
          <h5 class="modal-title">
            <span class="fw-mediumbold">
              Hapus Data Master</span>
            <span class="fw-light">
              User
            </span>
          </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p id="teksHapus"></p>
          <input type="hidden" id="id_hapus" name="id_hapus" />
        </div>
        <div class="modal-footer no-bd">
          <button type="button" id="hapus" onClick="hapus()" class="btn btn-primary">Hapus</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
        </div>
      </div>
    </div>
  </div>

</div>

<script>
  tampilkan();

  function tampilkan(){
    $("#tempatTabel").html('<i class="fas fa-spinner fa-pulse"></i> Memuat...')
    var baris = '<table class="table table-flush" id="tabelUser"><thead class="thead-light"><tr><th>NO</th><th>Tanggal</th><th>No Antrian</th><th>No RM</th><th>Nama</th><th>Poli</th><th>Jenis Pasien</th><th>Status</th><th>Action</th></tr></thead><tbody>'
      $.ajax({
        type:'POST',
        url: '<?= base_url() ?>operator/tampil',
        dataType :'json',
        success: function(data){
          // console.log(data);
          for (let i = 0; i < data.length; i++) {
            baris += '<tr>'
            baris += '<td>' + (i + 1) + '</td>'
            baris += '<td>' + data[i].tgl_input + '</td>'
            baris += '<td>' + data[i].no_antrian + '</td>'
            baris += '<td>' + data[i].no_rm + '</td>'
            baris += '<td>' + data[i].nama + '</td>'
            baris += '<td>' + data[i].poli + '</td>'
            baris += '<td>' + data[i].jenis_pasien + '</td>'
            baris += '<td>' + data[i].status + '</td>'
            baris += '<td><div style="cursor:pointer;" title="hapus?" class="badge badge-danger" id="hapus' + data[i].id + '" onClick="tryHapus(' + data[i].id+ ')"><i class="fa fa-times"></i></div>'
            baris += ' <div style="cursor:pointer;" title="edit?" class="badge badge-info" id="edit' + data[i].id + '" onClick="tryEdit(' + data[i].id+ ')"><i class="fa fa-edit"></i></div>'
            baris += '</td></tr>'
          }
          baris += '</tbody></table>'
          $("#tempatTabel").html(baris);
          $('#tabelUser').DataTable({
            "pageLength": 10,
          });
        }
      });
  }

 



  function tryTambah() {
    $("#no_antrian").val("")
    $("#no_rm").val("")
    $("#nama").val("")
    $("#poli").val("")
    $("#jenis_pasien").val("")
    $("#status").val("")
    $("#modalTambah").modal('show')
    $('#pesan_error_tambah').html("")
  }

  function tambah() {
    $("#tombolTambah").html('<i class="fas fa-spinner fa-pulse"></i> Memproses..')
    var no_antrian = $("#no_antrian").val()
    var no_rm = $("#no_rm").val()
    var nama = $("#nama").val()
    var poli = $("#poli").val()
    var jenis_pasien = $("#jenis_pasien").val()
    var status = $("#status").val()
    // if (rule == null) {
    //   rule = 0;
    // }
    $.ajax({
      url: '<?= base_url() ?>operator/tambah_data',
      method: 'post',
      data: {
        no_antrian: no_antrian,
        no_rm: no_rm,
        nama: nama,
        poli: poli,
        jenis_pasien: jenis_pasien,
        status: status
      },
      dataType: 'json',
      success: function(data) {
        if (data == "") {
          
          $("#no_antrian").val("")
          $("#no_rm").val("")
          $("#nama").val("")
          $("#poli").val("")
          $("#jenis_pasien").val("")
          $("#status").val("")
          $('#pesanErroTambah').html("")
        } else {
          // data = data.replace("<p>", "");
          // data = data.replace("</p>", "");
          $('#pesanErrorTambah').html(data)
        }

        $("#modalTambah").modal('hide');
          tampilkan();
        $("#tombolTambah").html('Tambah')
        // tampilkan();
      }
    });
  }

  function tryEdit(id) {
    $("#tombolEdit" + id).html('<i class="fas fa-spinner fa-pulse"></i>')
    $("#idUser").val(id)
    $.ajax({
      url: '<?= base_url() ?>operator/dataByid',
      method: 'post',
      data: "target=syarefa&id=" + id,
      dataType: 'json',
      success: function(data) {
        $("#modalEdit").modal('show')
        $("#editStatus").val(data.nama)
        console.log(data)
        $("#edit" + id).html('<i class="fa fa-edit"></i>')
      }
    });
  }

  function edit() {
    $("#tombolEdit").html('<i class="fas fa-spinner fa-pulse"></i> Memproses..')
    var status = $("#editStatus").val()
    var id = $("#idUser").val()
    $.ajax({
      url: '<?= base_url() ?>operator/edit',
      method: 'post',
      data: {
        id: id,
        status: status
      },
      dataType: 'json',
      success: function(data) {
        if (data == "") {
         
          $("#idUser").val("")
          $("#nama").val("")
          $('#pesanErrorTambah').html("")
        } else {
          $('#pesanErrorEdit').html(data)
        }
        $("#modalEdit").modal('hide');
        tampilkan();
        $("#tombolEdit").html('Edit')
      }
    });
  }

  function tryHapus(id) {
    $("#hapus" + id).html('<i class="fas fa-spinner fa-pulse"></i>')
    $.ajax({
      url: 'operator/dataById',
      method: 'post',
      data: "target=syarefa&id=" + id,
      dataType: 'json',
      success: function(data) {
        $("#id_hapus").val(id)
        $("#teksHapus").html("apakah anda yakin ingin menghapus Antrian '" + data.no_antrian + "'  dengan nama '" + data.nama + "' ?")

        $("#hapus" + id).html('<i class="fa fa-times"></i>')
      }
    });
    $("#modalHapus").modal('show')
  }

  function hapus() {
    $("#hapus").html('<i class="fas fa-spinner fa-pulse"></i> Memproses..')
    var id = $("#id_hapus").val()
    $.ajax({
      url: 'operator/hapus',
      method: 'post',
      data: "target=syarefa&id=" + id,
      dataType: 'json',
      success: function(data) {
        $("#id_hapus").val("")
        $("#teksHapus").html("")
        tampilkan()
        $("#modalHapus").modal('hide')
        $("#hapus").html('Hapus')
      }
    });
  }
</script>