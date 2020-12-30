@extends('adminpanel.layouts.default')

@section('content')

@foreach($tm as $t)

<section class="content-header">
      
    </section>


              <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-8">
          <!-- general form elements -->
          <div class="box box-primary">
            
            <!-- /.box-header -->
            <!-- form start -->
            
              <div class="box-body">
                
                <h3>Setup Join</h3>
                <!-- form start -->
            
              <div class="box-body">

              @if (Session::has('message'))
              <div class="alert alert-info">{{ Session::get('message') }}</div>
              @endif

                <?php 
                    $exists = DB::table('progres')->where('id_m', $t->id_m)->first();
                    if( !$exists ) {
                        echo "tak ada";
                        $jd = "2020-01-01";
                        $fd = "2020-01-01";
                        $fs = "0";
                        $fp = "null";
                        $fpa = "null";
                        
                    }else{
                        echo "ada";
                        $fl = DB::select("select * from progres where id_m='$t->id_m'");
                        foreach ($fl as $f) {
                            $jd = $f->joinDate;
                            $fd = $f->flightDate;
                            $fs = $f->id_s;
                            $fp = $f->port;
                            $fpa = $f->portAgent;
                        }
                
                    }
                 ?>        
                
                
              <!-- form start -->
            <form class="form-horizontal" action="{{url('/addsetup/savejoin')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="hidden" name="id_m" value="{{$t->id_m}}">  
            <div class="box-body">
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Company</label>

                        <div class="col-sm-10">
                
                            <select class="form-control" name="idCompany">
                            <option value="1">CMV</option>
                            <option value="2">ICS</option>
                            <option value="3">TES</option>
                            <option value="4">COSTA</option>
                                
                            </select>
                        </div>
                    </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Join Date</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="joinDate" name="joinDate" Value="{{$jd}}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Flight Date</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="flightDate" name="flightDate" Value="{{$fd}}">
                  </div>
                </div>
                <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Select SHIP</label>

                    <div class="col-sm-10">
                        <select class="form-control" name="id_s">
                        <?php 
                                  $kpl = DB::table('ship')->get();
                                  foreach ($kpl as $kp){
                                ?>      
                                <option value="{{ $kp->id_s }}" {{ $kp->id_s == $fs ? 'selected' : '' }}>{{ $kp->shipName }}</option>
                                <?php } ?>
                            
                        </select>
                    </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Port</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassword3" name="port" Value="{{$fp}}" required="required" >
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label" >Port Agent</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassword3" name="portAgent" Value="{{$fpa}}" required="required" >
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Status</label>

                    <div class="col-sm-10">
                        <select class="form-control" name="status_m">
                            <option value="1">Holiday</option>
                            <option value="2">Resign</option>
                            <option value="3">Pending</option>
                            <option value="4">New Applicant</option>
                            <option value="5">On Board</option>
                        </select>
                    </div>
                </div>
              <!-- /.box-body -->
              <div class="box-footer">
              <a href="{{url('/report')}}/{{$t->id_m}}" class="btn btn-info">Report Only</a>
                <button type="submit" class="btn btn-info pull-right">Simpan</button>
              </div>
              <!-- /.box-footer -->
            </form>
            

            </div>
             
          

</div>
<!-- /.box-body -->
          </div>
          <!-- /.box -->

                    
          
          <!-- /.box -->

        </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-4">
          <!-- Horizontal Form -->


                
              <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">

              
              <img class="profile-user-img img-responsive img-square" src="{{url('/foto')}}/{{$t->thumb}}" alt="User profile picture">

              <h3 class="profile-username text-center">{{$t->firstname}} {{$t->lastname}}</h3>

              <p class="text-muted text-center">{{$t->posisi}}</p>
              
             
            </div>


            <div class="box-body box-profile">
            


                <div class="table-responsive">
                <table width="100%" >
                
                  <tr>
                    <td >Doc</td>
                    <td >Doc Type</td>
                    <td>Start Date</td>
                    <td>End Date</td>
                    <td>Country</td>
                    <td>del</td>
                    
                  </tr>

                  <?php 
                        
                        $fl = DB::select("select * from documentplus where id_m='$t->id_m'");
                        foreach ($fl as $f) {
                        
                    ?>
                  <tr>
                    <td>{{$f->namaDocument}}</td>
                    <td>{{$f->typeDocument}}</td>
                    <td>{{$f->startDocument}}</td>
                    <td>{{$f->validDocument}}</td>
                    <td>{{$f->country}}</td>
                    <td>
                    <a href="{{url('/docplus')}}/hapus/{{ $f->id_docplus }}"><i class="fa fa-trash"></i></a>
                    | 
                    <a href="{{url('/documentplus')}}/{{$f->fileDocument}}" target='_blank'><i class="fa fa-file-pdf-o"></i></a>
                    
                    </td>
                    
                  </tr>
                  <?php } ?>
                </table>
              </div>



                

            </div>
            </div>

        <!-- /.col -->


        
      </div>
      <!-- /.row -->
    </section>


    
@endforeach


@stop