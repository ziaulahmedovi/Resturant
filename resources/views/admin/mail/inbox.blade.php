@extends('admin.master')
@section( 'title')
Dashboard::Inbox
@endsection
@section('mainContent')
  <!-- page content -->
        <div class="right_col" role="main">
          <div class="">


            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                
                  <div class="x_content">
                    <div class="row">
                          <div class="text-center">{{ $mails->links() }}</div>

                      <div class="col-sm-3 mail_list_column">
     @foreach($mails as $mail)

                          <a href="{{url('/view-mail/'.$mail->id)}}">
                          
                            <div class="mail_list">
                            <div class="left">
                              <i class="fa fa-circle"></i> <i class=""></i>
                            </div>
                            <div class="right">
                              <h3>{{$mail->CusName}} <small>{{$mail->created_at}}</small></h3>
                              <p>{{$mail->email}}
                              </p>
                            </div>
                          </div>
                        </a>
                                 @endforeach

                      </div>
                        
                        
                      <!-- /MAIL LIST -->

                      <!-- CONTENT MAIL -->
                      <div class="col-sm-9 mail_view">
                          
                        <div class="inbox-body">
                          <div class="mail_heading row">
                            <div class="col-md-8">
                           
                            </div>
                            <div class="col-md-4 text-right">
                              <p class="date"> {{$inbox->created_at}}</p>
                            </div>
                            <div class="col-md-12">
                                <h4> {{$inbox->CusName}} </h4>
                            </div>
                          </div>
                          <div class="sender-info">
                            <div class="row">
                              <div class="col-md-12">
                                <strong>{{$inbox->CusName}}</strong>
                                <span>({{$inbox->email}})</span> to
                                <strong>me</strong>
                                <a class="sender-dropdown"><i class="fa fa-chevron-down"></i></a>
                                <small class="pull-right">
                                               <a  href='{{url('/mail/delete/'.$inbox->id)}}'  title="Delete" class=" btn btn-danger" onclick="return confirm('Are you sure to delete this'); ">
                                                   <span class="glyphicon glyphicon-trash small">&nbsp;Delete</span>
                </a>
                       
                                    </small>
                              </div>
                            </div>
                          </div>
                          <div class="view-mail">
                              <p>
                                <i class="fa fa-phone-square" aria-hidden="true"></i>&nbsp;  {{$inbox->phoneNumber}}
                              </p>
                              <p>
                                  {{$inbox->mail}}
                              </p>
                              
                      
                          </div>
                      
                          <div class="btn-group">
                            </div>
                        </div>

                      </div>
                      <!-- /CONTENT MAIL -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
@endsection
