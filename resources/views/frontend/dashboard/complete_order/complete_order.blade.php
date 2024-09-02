@extends('frontend.dashboard.layouts.master')

@section('title')
 || Reviews
@endsection
<style>
  .wsus__dashboard_profile {
      padding: 20px;
  }

  .wsus__dash_pro_area {
      font-size: 1.5em;
      margin-bottom: 20px;
  }

  table {
      width: 100%;
      border-collapse: collapse;
  }

  table, th, td {
      border: 1px solid #ccc;
  }

  th, td {
      padding: 10px;
      text-align: left;
  }

  th {
      background-color: #f2f2f2;
  }

  .order-address, .shipping-method {
      white-space: pre-wrap;
  }
</style>
@section('content')
  <!--=============================
    DASHBOARD START
  ==============================-->
  <section id="wsus__dashboard">
    <div class="container-fluid">
        @include('frontend.dashboard.layouts.sidebar')

      <div class="row">
        <div class="col-xl-9 col-xxl-10 col-lg-9 ms-auto">
          <div class="dashboard_content mt-2 mt-md-0">
            <h3><i class="far fa-user"></i> {{ $title ?? " No Title " }} </h3>
            <div class="wsus__dashboard_profile">
              <div class="wsus__dash_pro_area">
                {{ $title ?? " No Title " }}
              </div>
              <div class="table-responsive">
                <table class="table">
                  <thead>
                      <tr>
                          <th>Invoice ID</th>
                          <th>User ID</th>
                          <th>Sub Total</th>
                          <th>Amount</th>
                          <th>Currency</th>
                          <th>Product Quantity</th>
                          <th>Payment Method</th>
                          <th>Payment Status</th>
                          <th>Order Address</th>
                          <th>Shipping Method</th>
                          <th>Order Status</th>
                   
                      </tr>
                  </thead>
                  <tbody>
                    @if($pendingOrder)
                    @foreach($pendingOrder as $order)
                          <tr>
                              <td>{{ $order->invocie_id }}</td>
                              <td>{{ $order->user_id }}</td>
                              <td>{{ $order->sub_total }}</td>
                              <td>{{ $order->amount }}</td>
                              <td>{{ $order->currency_name }}</td>
                              <td>{{ $order->product_qty }}</td>
                              <td>{{ $order->payment_method }}</td>
                              <td>{{ $order->payment_status == 0 ? 'Pending' : 'Completed' }}</td>
                              <td class="order-address">{{ json_decode($order->order_address, true)['address']  }}</td>
                              <td class="shipping-method">{{ json_decode($order->shpping_method, true)['name'] ?? " no shipping address "}}</td>
                            
                               <td>{{ $order->order_status }}</td>
                              {{-- <td>
                                  <ul>
                                      @foreach($order->order_products as $product)
                                          <li>{{ $product->product_name }} (Qty: {{ $product->qty }}, Unit Price: {{ $product->unit_price }})</li>
                                      @endforeach
                                  </ul>
                              </td> --}}
                          </tr>
                      @endforeach
                    @endif
                      
                  </tbody>
              </table>
              </div>
             
          </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--=============================
    DASHBOARD START
  ==============================-->
@endsection

