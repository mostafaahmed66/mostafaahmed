<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

 
 <?php $__env->startSection('content'); ?>
     <!-- Content Header (Page header) -->
     <section class="content-header">
       <div class="container-fluid">
         <div class="row mb-2">
           <div class="col-sm-6">
             <h1>Profile</h1>
           </div>
           <div class="col-sm-6">
             <ol class="breadcrumb float-sm-right">
               <!-- <li class="breadcrumb-item"><a href="#">Home</a></li>
               <li class="breadcrumb-item active">User Profile</li> -->
             </ol>
           </div>
         </div>
       </div><!-- /.container-fluid -->
     </section>
  
     <!-- Main content -->
     <section class="content">
     <div class="container-fluid">
         <div class="row">
           <div class="col-md-3">
  
             <!-- Profile Image -->
             <div class="card card-primary card-outline">
               <div class="card-body box-profile">
                 <div class="text-center">
                   <img class="profile-user-img img-fluid img-circle"
                        src="../assets/img/user1-128x128.jpg"
                        alt="User profile picture">
                 </div>
  
                 <h3 class="profile-username text-center"><?php echo e(Auth::user()->name); ?> - <?php echo e(Auth::user()->username); ?></h3>
  
                 <p class="text-muted text-center"><?php echo e(Auth::user()->email); ?></p>
                 <!-- <ul class="list-group list-group-unbordered mb-3">
                  
                   <li class="list-group-item">
                     <b>Phone</b> <a class="float-right"><?php echo e(Auth::user()->phone); ?></a>
                   </li>
                   <li class="list-group-item">
                     <b>Address</b> <a class="float-right"><?php echo e(Auth::user()->address); ?></a>
                   </li>
                   <li class="list-group-item">
                     <b>City</b> <a class="float-right"><?php echo e(Auth::user()->city); ?></a>
                   </li>
                   <li class="list-group-item">
                     <b>State</b> <a class="float-right"><?php echo e(Auth::user()->state); ?></a>
                   </li>
                   <li class="list-group-item">
                     <b>Country</b> <a class="float-right"><?php echo e(Auth::user()->country); ?></a>
                   </li>
                   <li class="list-group-item">

                   </li>
                 </ul> -->

  
                 <!-- <ul class="list-group list-group-unbordered mb-3">
                   <li class="list-group-item">
                     <b>Followers</b> <a class="float-right">1,322</a>
                   </li>
                   <li class="list-group-item">
                     <b>Following</b> <a class="float-right">543</a>
                   </li>
                   <li class="list-group-item">
                     <b>Friends</b> <a class="float-right">13,287</a>
                   </li>
                 </ul>
  
                 <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
               </div>
           
             </div>
            
             <div class="card card-primary">
               <div class="card-header">
                 <h3 class="card-title">About Me</h3>
               </div>
     
               <div class="card-body">
                 <strong><i class="fas fa-book mr-1"></i> Education</strong>
  
                 <p class="text-muted">
                   B.S. in Computer Science from the University of Tennessee at Knoxville
                 </p>
  
                 <hr>
  
                 <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>
  
                 <p class="text-muted">Malibu, California</p>
  
                 <hr>
  
                
  
                 <hr>
  
                 <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>
  
                 <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
               </div>
              
             </div>
           
           </div>
           
           <div class="col-md-9">
             <div class="card">
               <div class="card-header p-2">
                 <ul class="nav nav-pills">
                   <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Activity</a></li>
                   <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Timeline</a></li>
                   <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Settings</a></li>
                 </ul>
               </div>
               <div class="card-body">
                 <div class="tab-content">
                   <div class="active tab-pane" id="activity">
                   activity
                   </div>
                  
                   <div class="tab-pane" id="timeline">
                     timeline
                   </div>
                  
  
                   <div class="tab-pane" id="settings">
                     <form class="form-horizontal">
                       <div class="form-group row">
                         <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                         <div class="col-sm-10">
                           <input type="email" class="form-control" id="inputName" placeholder="Name">
                         </div>
                       </div>
                       <div class="form-group row">
                         <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                         <div class="col-sm-10">
                           <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                         </div>
                       </div>
                       <div class="form-group row">
                         <label for="inputName2" class="col-sm-2 col-form-label">Name</label>
                         <div class="col-sm-10">
                           <input type="text" class="form-control" id="inputName2" placeholder="Name">
                         </div>
                       </div>
                       <div class="form-group row">
                         <label for="inputExperience" class="col-sm-2 col-form-label">Experience</label>
                         <div class="col-sm-10">
                           <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
                         </div>
                       </div>
                       <div class="form-group row">
                         <label for="inputSkills" class="col-sm-2 col-form-label">Skills</label>
                         <div class="col-sm-10">
                           <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                         </div>
                       </div>
                       <div class="form-group row">
                         <div class="offset-sm-2 col-sm-10">
                           <div class="checkbox">
                             <label>
                               <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                             </label>
                           </div>
                         </div>
                       </div>
                       <div class="form-group row">
                         <div class="offset-sm-2 col-sm-10">
                           <button type="submit" class="btn btn-danger">Submit</button>
                         </div>
                       </div>
                     </form>
                   </div>
                   
                 </div>
                 
               </div>
             </div>
             
           </div>
           
         </div>
         
       </div> -->
     </section>
    
 <?php $__env->stopSection(); ?>
</body>
</html>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projectiti\example5-app\resources\views/pages/profile.blade.php ENDPATH**/ ?>