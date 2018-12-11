@extends('layouts.navbar2')

<section class="container">

<!-- Page Heading/Breadcrumbs -->
<h2 class="mt-4 mb-5 text-uppercase text-center">Cari Customer

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
	    <div class="container" >
            <div class="search" style="width: 70%">
						<input type="text" class="searchTerm2" placeholder="Ketik nomor member">
							<button onclick="location.href='{{ route('caricust2') }}'"type="submit" class="searchButton2">
								<i class="fa fa-search"></i>
							</button>
						</div>
    </div>
  </div>

    </div>
  </div>
 
</div>
<!-- /.row -->

</section>
