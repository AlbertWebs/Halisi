@extends('admin.master')

@section('content')
<div id="wrap" >


        <!-- HEADER SECTION -->
        @include('admin.top')
        <!-- END HEADER SECTION -->



        <!-- MENU SECTION -->
        @include('admin.left')
        <!--END MENU SECTION -->



        <!--PAGE CONTENT -->
        <div id="content">

            <div class="inner" style="min-height: 700px;">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <H2> About US </H2>
                    </div>
                </div>
                  <hr />
                 <!--BLOCK SECTION -->
                 <div class="row">
                    <div class="col-lg-12">
                        @include('admin.panel')

                    </div>

                </div>
                  <!--END BLOCK SECTION -->
                <hr />
                   <!-- CHART & CHAT  SECTION -->

                 <!--END CHAT & CHAT SECTION -->

                  <!-- Inner Content Here -->

            <div class="inner">


              <div class="row">
               <center>
                 @if(Session::has('message'))
							   <div class="alert alert-success">{{ Session::get('message') }}</div>
				@endif
                 </center>

                 <form class="form-horizontal" method="post"  action="{{url('/admin/about_save')}}" enctype="multipart/form-data">
                    @foreach($About as $value)
                        <!--  -->
                        <div class="form-group">
                            <label for="limiter" class="control-label col-lg-4">Safety First Always</label>

                            <div class="col-lg-8">
                                <textarea id="limiter-1" name="support" class="form-control">{{$value->support}}</textarea>
                                <p class="help-block">Safety</p>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="limiter-2" class="control-label col-lg-4">Affordable Prices</label>

                            <div class="col-lg-8">
                                <textarea id="limiter-2" name="price" class="form-control">{{$value->price}}</textarea>
                                <p class="help-block">Add Limited Words To Describe The News</p>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="limiter3" class="control-label col-lg-4">Trusted Travel Guide</label>

                            <div class="col-lg-8">
                                <textarea id="limiter-3" name="handpicked" class="form-control">{{$value->handpicked}}</textarea>
                                <p class="help-block">Add Limited Words To Describe The News</p>
                            </div>
                        </div>
                        <!--  -->


                        <div class="col-lg-12">
                            <div class="box">
                                <header>
                                    <div class="icons"><i class="icon-th-large"></i></div>
                                    <h5>About</h5>
                                    <ul class="nav pull-right">
                                        <li>
                                            <div class="btn-group">
                                                <a class="accordion-toggle btn btn-xs minimize-box" data-toggle="collapse"
                                                    href="#div-1">
                                                    <i class="icon-minus"></i>
                                                </a>
                                                 <button class="btn btn-danger btn-xs close-box">
                                                    <i
                                                        class="icon-remove"></i>
                                                </button>
                                            </div>
                                        </li>
                                    </ul>
                                </header>
                                <div id="div-1" class="body collapse in">

                                        <textarea name="content" id="wysihtml5" class="form-control" rows="10">{{$value->content}}</textarea>


                                </div>
                            </div>
                        </div>
                    </div>
                    <center>
                    <div class="form-group col-lg-12">
                        <label class="control-label">About US Banner</label>
                        <div class="">
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="{{url('/')}}/uploads/images/{{$value->image}}" alt="" /></div>
                                <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                <div>
                                    <span class="btn btn-file btn-primary"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input name="image" type="file" /></span>
                                    <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    </center>
                    <br><br>
                    <div class="col-lg-12 text-center">
                      <button type="submit" class="btn btn-success"><i class="icon-check icon-white"></i> Save Changes</button>
                    </div>

                    <input type="hidden" name="image_cheat" value="{{$value->image}}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    @endforeach
                <form>


            </div>
                  <!-- Inner Content Ends Here -->




            </div>

        </div>
        <!--END PAGE CONTENT -->

         <!-- RIGHT STRIP  SECTION -->
        @include('admin.right')
         <!-- END RIGHT STRIP  SECTION -->
    </div>

@endsection
