@extends('layouts.navbar2')

<section class="container">

<!-- Page Heading/Breadcrumbs -->
<h2 class="mt-4 mb-5 text-uppercase text-center">Detail Customer

</h2>


<!-- Content Row -->
<div class="row">
  <!-- Sidebar Column -->
  <div class="col-lg-3 mb-4">
    <div class="list-group">
      <a href="{{route('orderbaru')}}" class="list-group-item ">Invoice</a>
      <a href="{{route('ambillaundry')}}" class="list-group-item">Pengambilan Laundry</a>
	 
	  <div class="dropdown">
	  <a style="color: #010066"class="list-group-item dropbtn">Membership</a>
			<div class="dropdown-content">
				<a href="{{route('memberbaru')}}">Tambah Member Baru</a>
				<a href="{{route('tambahdeposit')}}">Tambah Deposit</a>
			</div>
		</div>
      <a href="{{route('caricust')}}" class="list-group-item active">Cari Customer</a>
    </div>
  </div>
  <!-- Content Column -->
  
  <div class="col-lg-9 mb-4">
  <div class="customer">
    <div>
    	<div style="padding: 15px 0;">
        
        <h3 class="panel-title"><strong>Customer:</strong></h3>
								John Smith<br>
								1234 Main Apt. 4B Springfield, ST 54321<br>
								081234567890<br>
        </div>
        
    <div class="row">
    	<div class="col-md-12">
    		<div class="panel panel-default">
    			<div class="panel-heading">
    				<h4 class="panel-title"><strong>Riwayat</strong></h4>
    			</div>
    			<div class="panel-body">
    				<div class="table-responsive">
    					<table class="table table-condensed">
    						<thead>
                                <tr>
        							<td><strong>Tanggal</strong></td>
        							<td class="text-center"><strong>No Order</strong></td>
        							<td class="text-center"><strong>Status Pengambilan</strong></td>

                                </tr>
    						</thead>
    						<tbody>
    							<!-- foreach ($order->lineItems as $line) or some such thing here -->
    							<tr>
    								<td>01/02/2018</td>
    								<td class="text-center">345345</td>
    								<td class="text-center">Sudah diambil</td>

    							</tr>
                                <tr>
        							<td>01/02/2018</td>
    								<td class="text-center">234234</td>
    								<td class="text-center">Sudah diambil</td>

    							</tr>
                                <tr>
            						<td>01/02/2018</td>
    								<td class="text-center">123123</td>
    								<td class="text-center">Belum diambil</td>

    							</tr>
    						</tbody>
    					</table>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
	
</div>
</div>
    </div>

    </div>
  </div>
 
</div>
<!-- /.row -->

</section>
