@extends('adminpanel.layouts.default')

@section('content')

	<section class="content-header">
      <h1>Online Data</h1>
    </section>

   <!-- Main content -->
    <section class="content">
      <div class="row">

        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Medical</h3>
            </div>
            <!-- /.box-header -->

            <div class="box-body">
              

                @foreach($od as $n)
                 
                 {{ $n->id_m }}
                  
                @endforeach


                <form action="/pengantar" method="post" >
                  @csrf
                  <input type="hidden" id="id_m" name="id_m" value="{{$n->id_m}}" > 
                  <input type="text" name="nama" class="form-control"> 
                  <input type="text" name="alamat" class="form-control">
                  <button >Save</button>
                  </form> 


                  <a href="/pengantarmedical/{{$n->id_m}}" target="_blank" >download</a> 
              
            </div>
            

            



            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          
          <!-- /.box -->
        </div>


        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">To Whom It May Concern</h3>
            </div>
            <!-- /.box-header -->

            <div class="box-body">
              

                @foreach($od as $n)
                 
                 {{ $n->id_m }}
                  
                @endforeach


                <form action="/towhom" method="post" >
                  @csrf
                  <input type="hidden" id="id_m" name="id_m" value="{{$n->id_m}}" > 
                  <input type="text" name="rsv" class="form-control"> 
                  <input type="text" name="alamat" class="form-control">
                  <button >Save</button>
                  </form> 


                  <a href="/towhomit/{{$n->id_m}}" target="_blank" >download</a> 
              
            </div>
            

            



            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          
          <!-- /.box -->
        </div>
        <!-- /.col -->

        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Employment Letter</h3>
            </div>
            <!-- /.box-header -->

            <div class="box-body">
              

                @foreach($od as $n)
                 
                 {{ $n->id_m }}
                  
                @endforeach


                <form action="/towhom" method="post" >
                  @csrf
                  <input type="hidden" id="id_m" name="id_m" value="{{$n->id_m}}" > 
                  <input type="text" name="rsv" class="form-control"> 
                  <input type="text" name="alamat" class="form-control">
                  <button >Save</button>
                  </form> 


                  <a href="/towhomit/{{$n->id_m}}" target="_blank" >download</a> 
              
            </div>
            

            



            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          
          <!-- /.box -->
        </div>
      </div>
      <!-- /.row -->
    </section>

@stop