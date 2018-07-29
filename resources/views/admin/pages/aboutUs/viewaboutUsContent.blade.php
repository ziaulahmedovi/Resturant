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
                
                    <div class="x_content text-justify">
                        
                       <div class="table-responsive">
      

                             <div> 
        <a href="{{url('/about-content/save/'.'aboutUsContent')}}" title='' class="btn btn-dark ">
                    <span class="glyphicon glyphicon-new-window">&nbsp;ADD New About Us Content</span>
                </a>

                   </div>
                      <table class="table table-striped jambo_table bulk_action table-responsive">
                         
                          <thead>
                          <tr class="headings text-capitalize">
                                <th  colspan="3" class="text-center text-capitalize column-title" >
                                About Us Page Content
                            </th>
                            </tr>
                             </thead>
                             @foreach($abouts as $about)
                            <tr >
                                <td class="col-sm-7">{{$about->content}}</td>
                                <td class="col-sm-3">
                                   {!! Form::open( [ 'url'=>'aboutUs-Content-publish', 'method' =>'POST', 'class' =>'form-horizontal'] ) !!}
                        
                                  <div class="form-group">
                <div class="col-sm-12">
              
                    <input type="number" value="{{$about->id}}" name="id" hidden="">
                    <input type="text" value="about_us_contents" name="tableName" hidden="">
                     
                                    
                                                   <select class="form-control" name="publicationStatus">
                        <option value="1" <?php if($about->publicationStatus==1) echo"selected"?> >Published</option>
                        <?php if($about->publicationStatus==1){} else{?>
                        <option value="0" <?php if($about->publicationStatus==0) echo"selected" ; }?> >Unpublished</option> 
                    </select>
                                 </div>
            </div>
                            <div class="form-group">
                <div class="col-sm-12">
                    <button type="submit" name="btn" class="btn btn-dark btn-block">Update</button>
                </div>
            </div>
                           {!!Form::close()!!}
                                </td>
                                <td class="col-sm-2">
                                    <a class="" href='{{url('/about-edit/aboutUs/'.$about->id)}}' title="Edit">
                              
                              <button class=" btn btn-success glyphicon glyphicon-edit text-success"></button>

                          </a>
                                <a title="Delete" href='{{url('/about-delete/aboutUs/'.$about->id)}}' 
                                   onclick="return confirm('Are you sure to delete this ?');" >  
 <button class=" btn btn-danger glyphicon glyphicon-trash"></button>
</a>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                        
                    
                        
                       <div class="table-responsive">
          

                             <div> 
        <a href="{{url('/about-content/save/'.'workContent')}}" title='' class="btn btn-dark ">
                    <span class="glyphicon glyphicon-new-window">&nbsp;ADD New Our work Content</span>
                </a>

                   
                   </div>
                      <table class="table table-striped jambo_table bulk_action table-responsive">
                         
                          <thead>
                          <tr class="headings text-capitalize">
                                <th  colspan="3" class="text-center text-capitalize column-title" >
                                About Us Page Content :: Our Work
                            </th>
                            </tr>
                             </thead>
                  @foreach($works as $work)
                            <tr >
                                <td class="col-sm-7">{{$work->content}}</td>
                                      <td class="col-sm-3">
                                   {!! Form::open( [ 'url'=>'aboutUs-Content-publish', 'method' =>'POST', 'class' =>'form-horizontal'] ) !!}
                        
                                  <div class="form-group">
                <div class="col-sm-12">
               
                    <input type="number" value="{{$work->id}}" name="id" hidden="">
                    
                    <input type="text" value="about_us_work_contents" name="tableName" hidden="">
                     
                                    
                                                   <select class="form-control" name="publicationStatus">
                        <option value="1" <?php if($work->publicationStatus==1) echo"selected"?> >Published</option>
                        <?php if($work->publicationStatus==1){} else{?>
                        <option value="0" <?php if($work->publicationStatus==0) echo"selected" ; }?> >Unpublished</option> 
                    </select>
                                 </div>
            </div>
                            <div class="form-group">
                <div class="col-sm-12">
                    <button type="submit" name="btn" class="btn btn-dark btn-block">Update</button>
                </div>
            </div>
                           {!!Form::close()!!}
                                </td>
                                <td class="col-sm-2">
                                    <a class="" href='{{url('/about-edit/work/'.$work->id)}}' title="Edit">
                              
                              <button class=" btn btn-success glyphicon glyphicon-edit text-success"></button>

                          </a>
                                <a title="Delete" href='{{url('/about-delete/work/'.$work->id)}}' 
                                   onclick="return confirm('Are you sure to delete this ?');" >  
 <button class=" btn btn-danger glyphicon glyphicon-trash"></button>
</a>
                                </td>
                            </tr>                   
                            @endforeach

                        </table>
                    </div>
                    
  
                       <div class="table-responsive">
                      
                             <div> 
        <a href="{{url('/about-content/save/'.'historyContent')}}" title='' class="btn btn-dark ">
                    <span class="glyphicon glyphicon-new-window">&nbsp;ADD New Our history Content</span>
                </a>

                   
                   </div>
                      <table class="table table-striped jambo_table bulk_action table-responsive">
                         
                          <thead>
                          <tr class="headings text-capitalize">
                                <th  colspan="3" class="text-center text-capitalize column-title" >
                                About Us Page Content :: Our history
                            </th>
                            </tr>
                             </thead>
                     @foreach($histories as $history)          
                            <tr >
                                <td class="col-sm-7">{{$history->content}}</td>
                                      <td class="col-sm-3">
                                   {!! Form::open( [ 'url'=>'aboutUs-Content-publish', 'method' =>'POST', 'class' =>'form-horizontal'] ) !!}
                        
                                  <div class="form-group">
                <div class="col-sm-12">
                        
                    <input type="text" value="about_us_work_contents" name="tableName" hidden="">
                    <input type="number" value="{{$history->id}}" name="id" hidden="">
                     
                                                <select class="form-control" name="publicationStatus">
                        <option value="1" <?php if($history->publicationStatus==1) echo"selected"?> >Published</option>
                        <?php if($history->publicationStatus==1){} else{?>
                        <option value="0" <?php if($history->publicationStatus==0) echo"selected" ; }?> >Unpublished</option> 
                    </select>
                                 </div>
            </div>
                            <div class="form-group">
                <div class="col-sm-12">
                    <button type="submit" name="btn" class="btn btn-dark btn-block">Update</button>
                </div>
            </div>
                           {!!Form::close()!!}
                                </td>
                                <td class="col-sm-2">
                                    <a class="" href='{{url('/about-edit/history/'.$history->id)}}' title="Edit">
                              
                              <button class=" btn btn-success glyphicon glyphicon-edit text-success"></button>

                          </a>
                                <a title="Delete" href='{{url('/about-delete/history/'.$history->id)}}' 
                                   onclick="return confirm('Are you sure to delete this ?');" >  
 <button class=" btn btn-danger glyphicon glyphicon-trash"></button>
</a>
                                </td>
                            </tr>
                               @endforeach

                        </table>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
@endsection
