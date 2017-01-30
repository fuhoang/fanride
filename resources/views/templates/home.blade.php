@extends('master')

@section('content')

        <!-- Header -->
        <a name="about"></a>
        <div class="intro-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="intro-message">
                            <h1>Fan Ride</h1>
                            <h3>Find your next ride to your next match day!</h3>
                            <hr class="intro-divider">

                            <form class="form-inline">
                              <div class="form-group">
                                <label class="sr-only" for="exampleInputEmail3">Email address</label>
                                <input type="text" class="form-control" id="leaving" placeholder="Leaving from...">
                              </div>
                              <div class="form-group">
                                <label class="sr-only" for="exampleInputPassword3">Password</label>
                                <input type="text" class="form-control" id="going-to" placeholder="Going to...">
                              </div>
                              <button type="submit" class="btn btn-primary">Find a ride</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.container -->
        </div>
        <!-- /.intro-header -->


        <!-- Page Content -->
        <a  name="services"></a>
        <div class="content-section-a">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-sm-6">
                        <hr class="section-heading-spacer">
                        <div class="clearfix"></div>
                        <h2 class="section-heading">Death to the Stock Photo:<br>Special Thanks</h2>
                        <p class="lead">A special thanks to <a target="_blank" href="http://join.deathtothestockphoto.com/">Death to the Stock Photo</a> for providing the photographs that you see in this template. Visit their website to become a member.</p>
                    </div>
                    <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                        <img class="img-responsive" src="img/ipad.png" alt="">
                    </div>
                </div>
            </div>
            <!-- /.container -->
        </div>
        <!-- /.content-section-a -->

        <div class="content-section-b">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6">
                        <hr class="section-heading-spacer">
                        <div class="clearfix"></div>
                        <h2 class="section-heading">3D Device Mockups<br>by PSDCovers</h2>
                        <p class="lead">Turn your 2D designs into high quality, 3D product shots in seconds using free Photoshop actions by <a target="_blank" href="http://www.psdcovers.com/">PSDCovers</a>! Visit their website to download some of their awesome, free photoshop actions!</p>
                    </div>
                    <div class="col-lg-5 col-sm-pull-6  col-sm-6">
                        <img class="img-responsive" src="img/dog.png" alt="">
                    </div>
                </div>
            </div>
            <!-- /.container -->
        </div>
        <!-- /.content-section-b -->
@endsection