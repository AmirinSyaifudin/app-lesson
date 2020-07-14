@extends('admin.templates.default')
@section('content')
    <div class="row">
      <div class="col-md-3">
        <!-- Profile Image -->
        <div class="box box-primary">
          <div class="box-body box-profile">
            {{-- <img class="profile-user-img img-responsive img-circle" src="../../dist/img/user4-128x128.jpg" alt="User profile picture"> --}}
            <h3 class="profile-username text-center">{{ $peserta->nama_peserta }}</h3>
            {{-- <p class="text-muted text-center">Software Engineer</p> --}}
            <ul class="list-group list-group-unbordered">
              <li class="list-group-item">
                <b>JENIS KELAMIN</b> <a class="pull-right">{{ $peserta->jenis_kelamin }}</a>
              </li>
              <li class="list-group-item">
                <b>TINGGI BADAN</b> <a class="pull-right">{{ $peserta->tinggi_badan }}</a>
              </li>
              <li class="list-group-item">
                <b>BERAT BADAN</b> <a class="pull-right">{{ $peserta->berat_badan }}</a>
              </li>
              <li class="list-group-item">
                <b>NO TELPON</b> <a class="pull-right">{{ $peserta->no_telpon }}</a>
              </li>
              <li class="list-group-item">
                <strong><i class="pull-right"></i> ALAMAT </strong>
                <a class="pull-right">{{ $peserta->alamat }}</a>
              </li>
              <hr>
            </ul>
            <hr>
                <div class="text-center">
                    <a href="{{ route('admin.peserta.index', $peserta->id) }}" class="btn btn-success">Kembali</a>
                    <a href="{{ route('admin.peserta.edit', $peserta->id) }}" class="btn btn-warning">Edit Profile</a>
                </div>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
        <!-- About Me Box -->
        <!-- /.box -->
      </div>
      <!-- /.col -->
      <div class="col-md-9">
        <div class="nav-tabs-custom">
          <ul class="nav nav-tabs">
            <li class="active"><a href="#activity" data-toggle="tab">PER-BULAN</a></li>
            <li><a href="#settings" data-toggle="tab">FITUR TAMBAH</a></li>
          </ul>
          <div class="tab-content">
            <div class="active tab-pane" id="activity">
                <!-- The timeline -->
                <ul class="timeline timeline-inverse">
                  <li>
                    <div class="timeline-item">
                      <div class="timeline-body">
                          <form class="form-horizontal">
                              <div class="form-group margin-bottom-none">
                                <div class="col-sm-3">
                                    <button type="button" class="btn btn-danger pull-right btn-block btn-sm" data-toggle="modal" data-target="#exampleModal">
                                        ADD LESSON
                                      </button>
                                  {{--  <button type="submit" class="btn btn-danger pull-right btn-block btn-sm">ADD LESSON</button>  --}}
                                </div>
                              </div>
                            </form>
                            <br>
                            <table id="dataTable" class="table table-bordered table-hover">
                              <thead>
                                  <tr>
                                      <th width="10">NO</th>
                                      <th width="10">PERTEMUAN</th>
                                      <th width="10">TANGGAL</th>
                                      <th width="50">PELATIH</th>
                                      <th width="100">NAMA KUDA</th>
                                      <th width="10"> </th>
                                      <th width="10"> </th>
                                  </tr>
                              </thead>
                              <tbody>

                                  <tr>
                                      <td width="10"> </td>
                                      <td width="10"> </td>
                                      <td width="10"> </td>
                                      <td width="50"> </td>
                                      <td width="100"> </td>
                                      <td width="10"><a href="" class='glyphicon glyphicon-edit | btn btn-primary' aria-hidden='true'>Edit</a></td>
                                      <td width="10">
                                          <form action="" method="post" style="display:inline;">
                                              {{csrf_field()}}
                                              {{method_field('delete')}}
                                              <button type="submit"  class="glyphicon glyphicon-trash delete | btn btn-danger" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>
                                          </form>
                                      </td>
                                  </tr>

                              </tbody>
                          </table>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>


            <div class="tab-pane" id="settings">
              <form class="form-horizontal">
                <div class="form-group">
                  <label for="inputName" class="col-sm-2 control-label">Name</label>

                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputName" placeholder="Name">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputName" class="col-sm-2 control-label">Name</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputName" placeholder="Name">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputExperience" class="col-sm-2 control-label">Experience</label>

                  <div class="col-sm-10">
                    <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputSkills" class="col-sm-2 control-label">Skills</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-danger">Submit</button>
                  </div>
                </div>
              </form>
            </div>
            <!-- /.tab-pane -->
          </div>
          <!-- /.tab-content -->
        </div>
        <!-- /.nav-tabs-custom -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
@endsection



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">TAMBAH DATA PER-DATANG</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        {{-- form  --}}
        <form class="form-horizontal">
            <div class="form-group">
              <label for="inputName" class="col-sm-2 control-label">TANGGAL</label>

              <div class="col-sm-10">
                <input type="text" nama="tanggal" class="form-control" id="inputName" placeholder="dd-mm-yyyy"
                value="
                <?php
                if(isset($_POST['tanggal']))
                { echo $tanggal->tanggal;
                } else {
                  echo date('d-m-Y'); }
                  ?>"
                  readonly>
              </div>
            </div>
            <div class="form-group">
              <label for="inputEmail" class="col-sm-2 control-label">BIAYA</label>

              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputEmail" placeholder="Masukkan Biaya...">
              </div>
            </div>
            <div class="form-group">
              <label for="inputName" class="col-sm-2 control-label">NAMA PELATIH</label>

              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputName" placeholder="Pilih Nama Pelatih">
              </div>
            </div>
            <div class="form-group">
                <label for="inputName" class="col-sm-2 control-label">NAMA KUDA</label>

                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputName" placeholder="Pilih Nama Kuda">
                </div>
            </div>



            <div class="form-group">
              {{--  <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-danger">SIMPAN</button>  --}}

                  <label class="col-sm-4 control-label text-right"></label>
                    <div class="col-sm-8">
                      <div class="btn-group">

                        <button type="submit" name="submit" class="btn btn-primary btn-lg" value="login">
                          <i class="fa fa-save"></i> Simpan pesanan
                        </button>

                        {{--  <button type="reset" name="submit" class="btn btn-info btn-lg" value="reset">
                          <i class="fa fa-times"></i> Reset
                        </button>  --}}

                        <button type="reset" name="submit" class="btn btn-danger btn-lg" value="reset">
                            <i class="fa fa-times"></i> Kembali
                          </button>

                      </div>
                    </div>
              </div>
            </div>
          </form>

      </div>
    </div>
  </div>
</div>




@push('scripts')
    <script>
        $(function () {
            $('#dataTable').DataTable({


            });
        });
    </script>
@endpush

