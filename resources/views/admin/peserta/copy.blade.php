

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

            {{-- <strong><i class="fa fa-pencil margin-r-5"></i> Skills</strong>
            <p>
              <span class="label label-danger">UI Design</span>
              <span class="label label-success">Coding</span>
              <span class="label label-info">Javascript</span>
              <span class="label label-warning">PHP</span>
              <span class="label label-primary">Node.js</span>
            </p> --}}
            <div class="text-center">
                <a href="{{ route('admin.peserta.index', $peserta->id) }}" class="btn btn-success">Kembali</a>
                <a href="{{ route('admin.peserta.edit', $peserta->id) }}" class="btn btn-warning">Edit Profile</a>
            </div>

            {{-- <a href="#" class="btn btn-primary btn-block"><b> Edit </b></a>
            <a href="#" class="btn btn-primary btn-block"><b> Kembali </b></a> --}}
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
            <li class="active"><a href="#activity" data-toggle="tab">PER DATANG</a></li>
            <li><a href="#timeline" data-toggle="tab">PER BULAN</a></li>
            <li><a href="#settings" data-toggle="tab">FITUR TAMBAH</a></li>
          </ul>
          <div class="tab-content">
            <div class="active tab-pane" id="activity">
              <!-- Post -->

              <form class="form-horizontal">
                <div class="form-group margin-bottom-none">

                  <div class="col-sm-3">
                    <button type="submit" class="btn btn-danger pull-right btn-block btn-sm">TAMBAH PERTEMUAN</button>
                  </div>
                </div>
              </form>

              <br>

                    <table id="dataTable" class="table table-bordered table-hover">
                        <thead>
                            <tr>

                                <th>TANGGAL</th>
                                <th>BIAYA</th>
                                <th>PELATIH</th>
                                <th>NAMA KUDA</th>
                                <th> </th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td >{{ $peserta -> nama_peserta }}</td>
                                <td >{{ $peserta -> jenis_kelamin }}</td>
                                <td >{{ $peserta -> tinggi_badan }}</td>
                                <td>{{ $peserta -> berat_badan }}</td>
                                <td width="10">
                                    <form action="" method="post" style="display:inline;">
                                        {{csrf_field()}}
                                        {{method_field('delete')}}
                                        <button type="submit"  class="glyphicon glyphicon-trash delete | btn btn-danger" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>
                                    </form>
                                </td>
                                </td>
                            </tr>

                        </tbody>
                    </table>


              <!-- /.post -->
            </div>
            <!-- /.tab-pane -->
            <div class="tab-pane" id="timeline">
              <!-- The timeline -->
              <ul class="timeline timeline-inverse">
                <!-- timeline time label -->
                <li class="time-label">
                      <span class="bg-red">
                        10 Feb. 2014
                      </span>
                </li>
                <!-- /.timeline-label -->
                <!-- timeline item -->
                <li>
                  <i class="fa fa-envelope bg-blue"></i>

                  <div class="timeline-item">


                    <div class="timeline-body">

                        <form class="form-horizontal">
                            <div class="form-group margin-bottom-none">

                              <div class="col-sm-3">
                                <button type="submit" class="btn btn-danger pull-right btn-block btn-sm">TAMBAH PERTEMUAN</button>
                              </div>
                            </div>
                          </form>

                          <br>

                          <table id="dataTable1" class="table table-bordered table-hover">
                            <thead>
                                <tr>

                                    <th width="10">PERTEMUAN</th>
                                    <th  width="10">TANGGAL</th>
                                    <th>PELATIH</th>
                                    <th>NAMA KUDA</th>
                                    <th  width="10"> </th>
                                    <th  width="10"> </th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>

                                    <td>{{ $peserta -> nama_peserta }}</td>
                                    <td width="10">{{ $peserta -> jenis_kelamin }}</td>
                                    <td width="10">{{ $peserta -> tinggi_badan }}</td>
                                    <td width="10">{{ $peserta -> berat_badan }}</td>
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
                <!-- END timeline item -->
                <!-- timeline item -->

                <!-- END timeline item -->
                <!-- timeline item -->

                <!-- END timeline item -->
                <!-- timeline time label -->
                <li class="time-label">
                      <span class="bg-green">
                        3 Jan. 2014
                      </span>
                </li>
                <!-- /.timeline-label -->
                <!-- timeline item -->

                <!-- END timeline item -->

              </ul>
            </div>
            <!-- /.tab-pane -->

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



@push('scripts')
    <script>
        $(function () {
            $('#dataTable').DataTable({


            });
        });
    </script>
@endpush

@push('scripts')
    <script>
        $(function () {
            $('#dataTable1').DataTable({


            });
        });
    </script>
@endpush
