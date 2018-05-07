@extends('backend.layouts.app_inner')
@section('htmlheader_title')
Home
@endsection
@section('content') 

<div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="ion ion-ios-gear-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Total Users</span>
              <span class="info-box-number">{{$userCnt}}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
         <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
              <span class="info-box-icon bg-red"><i class="fa fa-microphone"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Voice Sold</span>
              <span class="info-box-number">{{$voice}}</span>
            </div>
             
          </div>
          
        </div> 


        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

          <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-desktop"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Voice+Screen Sold</span>
              <span class="info-box-number">{{$voiceScreen}}</span>
            </div>
             
          </div>
          
        </div>  
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa fa-video-camera"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Voice+Video Sold</span>
              <span class="info-box-number">{{$voiceVideo}}</span>
            </div>
            
          </div>
          
        </div>
        <!-- /.col -->
        
      </div>
<div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Recent Customers</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table class="table no-margin">
                  <thead>
                  <tr>
                    <th>Name</th>                
                    <th>Created Date</th>          
                    <th>Email</th>
                    <th>Status</th>
                  </tr>
                  </thead>
                  <tbody>
                  @if(count($user)>0)
                    <?php $i=1; ?>
                    @foreach($user as $u)
                    <tr>
                      <td> {{ $u->c_name }} </td>
                      <td> {{ $u->create_time }} </td>
                      <td>{{ $u->email_id }}</td>
                      <td>@if($u->active==1) Active @else InActive @endif</td>
                    </tr><?php $i++; ?>
                    @endforeach
                  @else
                  <tr>
                    <td colspan="4">No user found</td>
                  </td>
                  @endif
                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <a href="{{ url('admin/customer') }}" class="btn btn-sm btn-default btn-flat pull-right">View All Customer</a>
            </div>
            <!-- /.box-footer -->
          </div>
    </div>
   
</div>

@endsection
