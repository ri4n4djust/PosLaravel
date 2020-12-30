@extends('adminpanel.layouts.default')

@section('content')

  <section class="content-header">
      <h1>List Applicant</h1>

    </section>

   <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Hover Data Table</h3>
            </div>
            <!-- /.box-header -->

            <div class="box-body">
              <table id="example1" class="table table-bordered table-hover" width="100%">
                <thead>
                <tr>
                  <th>No. Reg</th>
                  <th>Full Name</th>
                  <th>Position</th>
                  <th>Approve</th>
                  <th>Mobile</th>
                  <th>Act</th>
                  
                  
                </tr>
                </thead>
                <tbody>
                @foreach($applicant as $n)
                <tr id="tr_{{$n->id_m}}">
                  <td>{{ $n->id_m }}</td>
                  <td>{{ $n->firstname }} {{ $n->lastname }}</td>
                  <td>{{ $n->posisi }}</td>
                  <td>
                    @if($n->status_m == 7)
                    Approve
                    @elseif($n->status_m == 8)
                    No Approve
                    @elseif($n->status_m == 9)
                    Pending
                    @endif
                  </td>
                  <td>{{ $n->phone }}</td>
                  <td>

                  <a href="{{url('/detailapplicant')}}/{{$n->id_m}}" title="Detail" ><i class="fa fa-archive"></i> </a>
                  <a href="{{url('/setupjoin')}}/{{$n->id_m}}" title="Setup Progres"><i class="fa fa-list-alt"></i></a>

                  <a onclick="return confirm('Are you sure?')" href="{{url('/applicant/hapus')}}/{{ $n->id_m }}" id="del" title="Delete">
                      <i class="fa fa-trash"></i></a>
                  </td>
                </tr>
                @endforeach


                </tbody>
                <tfoot>
                <tr>
                 <th>No. Reg</th>
                  <th>Full Name</th>
                  <th>Position</th>
                  <th></th>
                  <th>Mobile</th>
                  <th>Act</th>
                  
                  
                </tr>
                </tfoot>
              </table>
            </div>
            

            



            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>

@stop