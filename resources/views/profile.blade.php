@extends('layouts.app')

@section('title', 'Profile')
@section('title-dashboard', 'Dashboard')

@section('content')

<?php

    $imageProfile = '<img src="https://res.cloudinary.com/teepublic/image/private/s--xrRkjhxu--/t_Preview/b_rgb:262c3a,c_limit,f_jpg,h_630,q_90,w_630/v1537783276/production/designs/3203895_1.jpg" 
    class="img-circle" alt="" width="150px" height="150px">';
?>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <h1>Your Profile</h1>
          <hr>
          <div class="container well col-md-12">
          	<div class="row">
              <div class="col-md-3" >
      		    <?php echo $imageProfile; ?>
              </div>
              <div class="col-md-7">
                  <h3><i class="fa fa-user-circle" aria-hidden="true"></i> {{ $user->name }} </h3>
                  <h5><i class="fa fa-envelope-o" aria-hidden="true"></i> {{ $user->email }} </h5>
                  <h5><i class="fa fa-sign-in" aria-hidden="true"></i> {{ $user->created_at }} </h5>
              </div>
            </div>
          </div>
          </hr>
        </div>
    </div>
</div>
@endsection