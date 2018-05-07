@extends('backend.layouts.app_inner')
@section('htmlheader_title')
Admin Settings
@endsection
@section('content')
<div class="container spark-screen" style="width:100%;">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            @if(Session::has('message'))
            <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
            @endif
            <div class="box box-primary">
                <div class="box-body" style="padding: 20px;">
                    @foreach($setting as $s)
                    <form role="form" method="post" name="frm_new" id="frm_new" action="{{ url('admin/setting/store') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <h4 style="color: green;">Social Media Network</h4>
                        <div class="form-group">
                            <label>Facebook</label>
                            <input name="facebook_link" id="facebook_link" type="text" class="form-control" placeholder="Facebook Link" maxlength="200" value="{{ $s->facebook_link }}" style="width: 350px" autocomplete="off"  />
                        </div>
                        <div class="form-group">
                            <label>Twitter</label>
                            <input name="twitter_link" id="twitter_link" type="text" class="form-control" placeholder="Twitter Link" maxlength="200" value="{{ $s->twitter_link }}" style="width: 350px" autocomplete="off"  />
                        </div>
                        <div class="form-group">
                            <label>Youtube</label>
                            <input name="youtube_link" id="youtube_link" type="text" class="form-control" placeholder="Youtube Link" maxlength="200" value="{{ $s->youtube_link }}" style="width: 350px" autocomplete="off"  />
                        </div>

                        <h4 style="color: green;">Admin Email Setting</h4>
                        <div class="form-group">
                            <label>From email</label>
                            <input name="from_email" id="from_email" type="text" class="form-control" placeholder="Admin from email" maxlength="200" value="{{ $s->from_email }}" style="width: 350px" autocomplete="off"  />
                        </div>
                        <div class="form-group">
                            <label>From email display name</label>
                            <input name="from_email_display_name" id="from_email_display_name" type="text" class="form-control" placeholder="From email display name" maxlength="200" value="{{ $s->from_email_display_name }}" style="width: 350px" autocomplete="off"  />
                        </div>
                        <div class="form-group">
                            <label>Support email</label>
                            <input name="support_email" id="support_email" type="text" class="form-control" placeholder="Support Email" maxlength="200" value="{{ $s->support_email }}" style="width: 350px" autocomplete="off"  />
                        </div>

                        <h4 style="color: green;">Script Content</h4>
                        <div class="form-group">
                            <label>Header</label>
                            <textarea name="header_script" id="header_script" class="form-control" placeholder="Header Script"  rows="7">{{ $s->header_script }}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Footer</label>
                            <textarea name="footer_script" id="footer_script" class="form-control" placeholder="Footer Script"  rows="7">{{ $s->footer_script }}</textarea>
                        </div>

                        <div class="box-footer">
                            <center>
                                <button class="btn btn-primary" name="btn_sub" id="btn_sub" type="submit">Submit</button>
                            </center>
                        </div>

                    </form>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
