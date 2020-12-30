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

                <h3>Detail Applicant</h3>
                <div class="table-responsive">
                <form action="/uploadappdoc" method="post" enctype="multipart/form-data">
                  @csrf
                <table width="100%" cellspacing="5">
                  <tr>
                    <td>
                      <span ><strong>Nama Document</strong> </span> 
                      <input id="id_m" type="hidden"  name="id_m" value="{{$t->id_m}}"  >
                      <input id="id_pos" type="hidden"  name="id_pos" value="{{$t->id_pos}}"  >
                    </td>
                    <td>Keterangan</td>
                    <td>File</td>
                  </tr>
                  <tr >
                    <td ><input id="namadoc" type="text"  name="namadoc" placeholder="Nama Document" value="-" ></td>
                    <td ><input id="ketdoc" type="text"  name="ketdoc" placeholder="Keterangan" value="-" ></td>
                    <td><input type="file" id="filedoc" name="filedoc"  accept="application/pdf" required></td>
                  </tr>
                  <tr>
                    <td colspan="3"><button class="btn btn-success btn-sm">upload</button></td>
                  </tr>
                </table>
                </form>
                </div>


                <h3>Document Detail</h3>
                <div class="table-responsive">
                  
                <table width="100%" >
                    <tr>
                        <td>Doc Name</td>
                        <td>Des</td>
                        <td>File</td>
                        <td>Act</td>
                    </tr>
                    <?php 
                        
                        $fl = DB::select("select * from basedocument where id_m='$t->id_m'");
                        foreach ($fl as $f) {
                        
                    ?>
                    <tr>
                        <td>{{$f->doc_name}}</td>
                        <td>{{$f->desdoc}}</td>
                        <td><a href='/basedocument/{{$f->doc}}' target='_blank'><i class="fa fa-file-pdf-o"></i></a></td>
                        
                        <td><a href="/basedoc/hapus/{{ $f->id_b }}">Hapus</a></td>
                    </tr>
                    <?php } ?>

                </table>
                

                <h3>Document History</h3>
                <?php
                $folder = "./basedocument"; //Sesuaikan Folder nya
                if(!($buka_folder = opendir($folder))) die ("eRorr... Tidak bisa membuka Folder");

                $file_array = array();
                while($baca_folder = readdir($buka_folder))
                {
                  $file_array[] = $baca_folder;
                }

                $jumlah_array = count($file_array);
                for($i=2; $i<$jumlah_array; $i++)
                  {
                  $nama_file = $file_array;
                  $nomor = $i - 1;
                  echo "$nomor. <a href='./basedocument/'>$nama_file[$i]</a> <br/>";
                }

                closedir($buka_folder);
                ?>
                                  

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

              
              <img class="profile-user-img img-responsive img-square" src="/foto/{{$t->thumb}}" alt="User profile picture">

              <h3 class="profile-username text-center">{{$t->firstname}} {{$t->lastname}}</h3>

              <p class="text-muted text-center">{{$t->posisi}}</p>
              

              <a href="/download/{{$t->id_m}}" class="btn btn-success btn-sm" target="_blank" title="Download CV" >CV</a>
              <a href="{{url('/editapplicant')}}/{{$t->id_m}}" class="btn btn-success btn-sm">Edit</a>
              <a href="#" class="btn btn-warning btn-sm">Reset Password</a>

              <a onclick="return confirm('Are you sure?')" href="/applicant/hapus/{{ $t->id_m }}" id="del" title="Delete" class="btn btn-danger btn-sm">
                      Delete</a>
             
            </div>

          



                

            </div>
            </div>

        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>


    <!-- /.content -->
@endforeach


@stop