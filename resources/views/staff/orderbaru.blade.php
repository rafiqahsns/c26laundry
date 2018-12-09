@extends('layouts.navbar2')

<section class="container">

<!-- Page Heading/Breadcrumbs -->
<h2 class="mt-4 mb-5 text-uppercase text-center">Invoice

</h2>


<!-- Content Row -->
<div class="row">
  <!-- Sidebar Column -->
  <div class="col-lg-3 mb-4">
    <div class="list-group">
      <a href="{{route('orderbaru')}}" class="list-group-item active">Invoice</a>
      <a href="about.html" class="list-group-item">Pengambilan Laundry</a>
      <a href="services.html" class="list-group-item">Membership</a>
      <a href="contact.html" class="list-group-item">Cari Customer</a>
    </div>
  </div>
  <!-- Content Column -->
  <div class="col-lg-9 mb-4">
    <div class="customer">
	<div class="container">
		<button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Cari customer</button>

			<div id="id02" class="modal">

			<form class="modal-content animate" action="/action_page.php">
				<div class="imgcontainer">
				<span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
				
				</div>
				
				<div class="container">
				<h2 class="text-center">Cari Customer</h2>
					<div style="width:90%;">
						<div class="search">
							<input type="text" class="searchTerm2" placeholder="What are you looking for?">
							<button type="submit" class="searchButton2">
								<i class="fa fa-search"></i>
							</button>
						</div>
					</div>
				</div>


			</form>
			</div>
        <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Tambah customer</button>

        <div id="id01" class="modal">
        
        <form class="modal-content animate" action="/action_page.php">
            <div class="imgcontainer">
            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
            
            </div>
            <h2 class="text-center">Customer Baru</h2>
            <div class="container">
            <label for="uname"><b>Nama Lengkap</b></label>
            <input type="text" placeholder="Nama Lengkap" name="name" required>

            <label for="uname"><b>No. HP</b></label>
            <input type="text" placeholder="08xxxxxxxxx" name="phone" required>
            <label for="uname"><b>Alamat</b></label>
            <input type="text" placeholder="Alamat" name="uname" required>
            <button type="submit">Tambah Customer</button>
            </div>

        
        </form>
        </div>
	</div>
    <div class="container">
    	<div style="padding: 15px 0;">
    				
			<strong>Billed To:</strong><br>
								John Smith<br>
								1234 Main Apt. 4B Springfield, ST 54321<br>
								081234567890<br>
    	</div>
		<button onclick="document.getElementById('id03').style.display='block'" style="width:auto;">Tambah barang</button>

			<div id="id03" class="modal">

			<form class="modal-content animate" action="/action_page.php">
				<div class="imgcontainer">
				<span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>
				
				</div>
				<h2 class="text-center">Tambah barang</h2>
				<div class="container">
					<div class="dropdown">
						<a id="dLabel" role="button" data-toggle="dropdown" class="btn btn-primary" data-target="#" href="/page.html">
							Dropdown <span class="caret"></span>
						</a>
						<ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
						<li><a href="#">Some action</a></li>
						<li><a href="#">Some other action</a></li>
						<li class="divider"></li>
						<li class="dropdown-submenu">
							<a tabindex="-1" href="#">Hover me for more options</a>
							<ul class="dropdown-menu">
							<li><a tabindex="-1" href="#">Second level</a></li>
							<li class="dropdown-submenu">
								<a href="#">Even More..</a>
								<ul class="dropdown-menu">
									<li><a href="#">3rd level</a></li>
									<li><a href="#">3rd level</a></li>
								</ul>
							</li>
							<li><a href="#">Second level</a></li>
							<li><a href="#">Second level</a></li>
							</ul>
						</li>
						</ul>
					</div>
				<label for="qty"><b>Banyaknya</b></label>
				<input type="text" placeholder="Banyaknya" name="qty" required>
				<button type="submit">Tambah</button>
				</div>


			</form>
			</div>
    <div class="row">
    	<div class="col-md-12">
    		<div class="panel panel-default">
    			<div class="panel-heading">
    				<h3 class="panel-title"><strong>Order</strong></h3>
    			</div>
    			<div class="panel-body">
    				<div class="table-responsive">
    					<table class="table table-condensed">
    						<thead>
                                <tr>
        							<td><strong>Item</strong></td>
        							<td class="text-center"><strong>Harga</strong></td>
        							<td class="text-center"><strong>Kuantitas</strong></td>
        							<td class="text-right"><strong>Total</strong></td>
                                </tr>
    						</thead>
    						<tbody>
    							<!-- foreach ($order->lineItems as $line) or some such thing here -->
    							<tr>
    								<td>BS-200</td>
    								<td class="text-center">$10.99</td>
    								<td class="text-center">1</td>
    								<td class="text-right">$10.99</td>
    							</tr>
                                <tr>
        							<td>BS-400</td>
    								<td class="text-center">$20.00</td>
    								<td class="text-center">3</td>
    								<td class="text-right">$60.00</td>
    							</tr>
                                <tr>
            						<td>BS-1000</td>
    								<td class="text-center">$600.00</td>
    								<td class="text-center">1</td>
    								<td class="text-right">$600.00</td>
    							</tr>
    							<tr>
    								<td class="thick-line"></td>
    								<td class="thick-line"></td>
    								<td class="thick-line text-center"><strong>Subtotal</strong></td>
    								<td class="thick-line text-right">$670.99</td>
    							</tr>
    							<tr>
    								<td class="no-line"></td>
    								<td class="no-line"></td>
    								<td class="no-line text-center"><strong>Diskon</strong></td>
    								<td class="no-line text-right">$15</td>
    							</tr>
    							<tr>
    								<td class="no-line"></td>
    								<td class="no-line"></td>
    								<td class="no-line text-center"><strong>Total</strong></td>
    								<td class="no-line text-right">$685.99</td>
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
<!-- /.row -->

</section>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>