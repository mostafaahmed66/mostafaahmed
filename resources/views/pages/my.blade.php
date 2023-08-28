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
     <!-- Content Header (Page header) -->
     <section class="content-header">
       <div class="container-fluid">
         <div class="row mb-2">
           <div class="col-sm-6">
             <h1>My Product</h1>
           </div>
           <div class="col-sm-6">
             <ol class="breadcrumb float-sm-right">
               <li class="breadcrumb-item"><a href="#">Home</a></li>
               <li class="breadcrumb-item active">My Product</li>
             </ol>
           </div>
         </div>
       </div><!-- /.container-fluid -->
     </section>
  
     <!-- Main content -->
     <section class="content">
   <div class="container-fluid">
     <div class="row">
       @if($products->count() > 0)
         @foreach($products as $product)
           <div class="col-xl-3 col-sm-6 mb-4">
             <div class="card">
               <div class="card-header text-center">
                 <img src="{{ asset('assets/img') }}/{{ $product->image }}" style="height: 150px; width: 100%; object-fit: contain;">
               </div>
               <div class="card-body p-3">
                 <div class="row">
                   <div class="col-8">
                     <div class="numbers">
                       <p class="text-sm mb-0 text-capitalize font-weight-bold">{{ $product->name }}</p>
                       <h5 class="font-weight-bolder mb-0">
                         ${{ number_format($product->price, 0, '.', '.') }}
                       </h5>
                       <small>{{ $product->description }}</small>
                     </div>
                   </div>
                   <div class="col-4 text-end">
                     @if($product->sold)
                       <span class="btn bg-gradient-danger">Sold</span>
                     @else
                       <span class="btn bg-gradient-success">Active</span>
                     @endif
                   </div>
                 </div>
               </div>
             </div>
           </div>
         @endforeach
       @else
         <div class="col-12">
           <div class="card">
             <div class="card-body text-center p-3">
               <h4>You don't have a product yet</h4>
               <a href="{{ route('product.create') }}" class="btn bg-gradient-primary">Add Product</a>
             </div>
           </div>
         </div>
       @endif
     </div>
   </div>
     </section>
     <!-- /.content -->
 @endsection
</body>
</html>