<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@extends('layouts.app')
 
 @section('content')
   <div class="container-fluid py-4">
     <div class="row">
       <div class="col-12 col-lg-6">
         <div class="card">
           <div class="card-body p-3">
             <h5>Add Product</h5> 
             <hr>
             <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
               @csrf
               <div class="form-group">
                 <label for="name" class="form-control-label">Name</label>
                 <input type="text" name="name" class="form-control" id="name" required>
               </div>
               <div class="form-group">
                 <label for="image" class="form-control-label">Image</label>
                 <input type="file" name="image" class="form-control form-control-file" id="image" accept=".jpg, .png, .svg" required>
               </div>
               <div class="form-group">
                 <label for="description" class="form-control-label">Description</label>
                 <textarea rows="6" name="description" class="form-control" id="description" required></textarea>
               </div>
               <div class="form-group">
                 <label for="price" class="form-control-label">Price</label>
                 <input type="number" name="price" class="form-control" id="price" required>
                 <small>* Minimal $. 1</small>
               </div>
               <div class="form-group">
                 <button class="btn btn-primary">Add</button>
               </div>
             </form>
           </div>
         </div>
       </div>
     </div>
   </div>
 @endsection
</body>
</html>