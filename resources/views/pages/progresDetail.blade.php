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
                
                <h3>Input Flight</h3>
                <!-- form start -->
            
              <div class="box-body">


              <form class="form-horizontal" action="{{url('/addflight/store')}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                <input type="hidden" name="id_m" value="{{$t->id_m}}">
                
                <?php 
                  $rep = DB::select("select * from progres where id_m='$t->id_m'");
                  foreach ($rep as $rpt) {
                 ?>
                <input type="hidden" name="id_progres" value="{{$rpt->id_progres}}">
                  <?php } ?>
                    <div class="col-xs-4">
                    <input type="text" name="codeFlight" required="required" class="form-control" placeholder="Code Flight">
                    </div>
                    <div class="col-xs-4">
                    <input type="text" name="flightDate" required="required" id="flightDate" class="form-control" placeholder="Flight Date">
                    </div>
                    <div class="col-xs-4">
                    <input type="text" name="tujuan" required="required" class="form-control" placeholder="Destination">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-4">
                    <input type="text" name="flightTime" required="required" class="form-control" placeholder="Flight Time">
                    </div>
                    <div class="col-xs-4">
                    <input type="text" name="timeArr" required="required" class="form-control" placeholder="Arr Time">
                    </div>
                    <div class="col-xs-4">
                    <input type="text" name="dateArr" required="required" id="arrDate" class="form-control" placeholder="Arr Date">
                    </div>
                </div>
                
                
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-info">Input</button>
              </div>
              <!-- /.box-footer -->
            </form>


            <h3>Flight Detail</h3>
                <div class="table-responsive">
                  
                <table width="100%" >
                    <tr>
                        <td>Code</td>
                        <td>Flight Date</td>
                        <td>Destination</td>
                        <td>Flight Time</td>
                        <td>Arr Time</td>
                        <td>Arr Date</td>
                        <td>Delete</td>
                    </tr>
                    <?php 
                        
                        $fl = DB::select("select * from flight where id_m='$t->id_m' order by id_tiket ASC");
                        foreach ($fl as $f) {
                        
                    ?>
                    <tr>
                        <td>{{$f->codeFlight}}</td>
                        <td>{{$f->flightDate}}</td>
                        <td>{{$f->tujuan}}</td>
                        <td>{{$f->flightTime}}</td>
                        <td>{{$f->timeArr}}</td>
                        <td>{{$f->dateArr}}</td>
                        <td><a href="{{url('/tiket/hapus')}}/{{ $f->id_tiket }}">Hapus</a></td>
                    </tr>
                    <?php } ?>

                </table>
                  

                </div>


              </div>
              <!-- /.box-body -->
            
              
              <div class="box-body">
              <h3>Insert Tiket</h3>

                <form action="{{url('/uploadtiket')}}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id_m" value="{{$t->id_m}}">
                <div class="form-group">
                    <div class="col-xs-3">
                    <input type="text" name="tiketReff" required="required" class="form-control" placeholder="Tiket Reff">
                    </div>
                    <div class="col-xs-3">
                    <input type="text" name="tiketIsue" required="required" class="form-control" placeholder="Tiket Isue">
                    </div>
                    <div class="col-xs-3">
                    <input type="file" id="exampleInputFile" name="filetiket" accept="application/pdf">                    
                    </div>
                </div>
                <div class="form-group">
                <div class="col-xs-3">
                    <button type="submit" class="btn btn-info">Upload</button>                   
                    </div>
                </div>
                    
                </form>
                
                
              <div class="box-body">
              <h4>Detail Tiket</h4>
                <div class="table-responsive">
                
                <table width="100%" >
                    <tr>
                        <td>Tiket Reff</td>
                        <td>Tiket Isue</td>
                        <td>File</td>
                        
                    <?php 
                        
                        $fl = DB::select("select * from progres where id_m='$t->id_m'");
                        foreach ($fl as $f) {
                        
                    ?>
                    <tr>
                        <td>{{$f->tiketReff}}</td>
                        <td>{{$f->tiketIsue}}</td>
                        <td>
                          <a href="{{url('/tiket')}}/{{$f->tiketFile}}" target='_blank'><i class="fa fa-file-pdf-o"></i></a>
                          <a href="{{url('/hapusbst')}}/{{$t->id_m}}"><i class="fa fa-trash"></i></a>
                        </td>
                        
                        
                    </tr>
                    <?php } ?>

                </table>
                </div>
                  

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
                    
                </div>

            </div>
        </div>

        <!-- /.col -->
        

        
      </div>
      <!-- /.row -->

      <div class="col-md-4">
          <!-- Horizontal Form -->
          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
            <a href="{{url('/ceklist')}}/{{$t->id_m}}" class="btn btn-info" target="_blank"  >Print Cek List</a>
            </div>
            <div class="box-body box-profile">
            <a href="{{url('/moveboard')}}/{{$t->id_m}}" class="btn btn-info" >Move On Board</a>
            </div>
            <div class="box-body box-profile">
            <a href="{{url('/towhomit')}}/{{$t->id_m}}" class="btn btn-info" target="_blank" >Print To Whom</a>
            </div>
            
            
            <div class="box-body box-profile">
                  @if(session('user') == $t->edit)
                  <?php
                  $use = DB::select("select * from pegawai where id_peg='$t->edit'");
                  foreach ($use as $u) {
                  ?>
                    <span class="direct-chat-name pull-left">edit by {{$u->nama_p}}</span>
                  <?php } ?>
                   <a href="{{url('/detailrepeater')}}/{{$t->id_m}}" class="btn btn-info">Edit Detail</a>
                  @elseif($t->edit == '')
                  <a href="{{url('/detailrepeater')}}/{{$t->id_m}}" class="btn btn-info">Detail Repeater</a>
                  @else
                  <?php
                  $use = DB::select("select * from pegawai where id_peg='$t->edit'");
                  foreach ($use as $u) {
                  ?>
                    <span class="direct-chat-name pull-left" >edit By {{$u->nama_p}}</span>
                  <?php } ?>
                  @endif
            </div>
        </div>


    </section>


    
@endforeach


@stop