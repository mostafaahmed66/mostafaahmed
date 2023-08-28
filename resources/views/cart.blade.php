<!DOCTYPE html>
<x-app-layout>
    <head>
    <title>my product</title>
</head>
<body>

   

<table id="cart" class="table table-hover table-condensed">
    <thead>
        <tr>
            <th style="width:50%">Product</th>
          
            <th style="width:8%">Quantity</th>
        
            <th style="width:10%"></th>
        </tr>
    </thead>
    <tbody>
        @php $total = 0 @endphp
        @if(session('cart'))
            @foreach(session('cart') as $id => $details)
                <!-- @php $total += $details['price'] * $details['quantity'] @endphp -->
                <tr data-id="{{ $id }}">
                    <td data-th="Product">
                        <div class="row">
                            <div class="col-sm-9">
                                <h4 class="nomargin" style="color: white;">{{ $details['product_name'] }}</h4>
                            </div>
                        </div>
                    </td>
                   
                    <td data-th="Quantity">
                        <input type="number" value="{{ $details['quantity'] }}" class="form-control quantity cart_update" min="1" />
                    </td>
                    <td>
                    
                    </td>
                   
                </tr>
            @endforeach
        @endif
    </tbody>
    
    
</table>




</body>
</x-app-layout>