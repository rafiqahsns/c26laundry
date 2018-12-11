@extends('layouts.navbar2')

<style>
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}


input[type=submit]:hover {
  background-color: #45a049;
}

.containeer {
  border-radius: 5px;

  padding: 0 20px;
}

.col-20 {
  float: left;
  width: 20%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-20, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>

<section class="container">

<!-- Page Heading/Breadcrumbs -->
<h2 class="mt-4 mb-5 text-uppercase text-center">Tambah Member Baru

</h2>

<div class="row">
  <!-- Sidebar Column -->
  <div class="col-lg-3 mb-4">
    <div class="list-group">
      <a href="{{route('orderbaru')}}" class="list-group-item">Invoice</a>
      <a href="{{route('ambillaundry')}}" class="list-group-item">Pengambilan Laundry</a>
	 
	  <div class="dropdown">
	  <a style="color:white;" class="list-group-item dropbtn active">Membership</a>
			<div class="dropdown-content">
				<a href="{{route('memberbaru')}}">Tambah Member Baru</a>
				<a href="{{route('tambahdeposit')}}">Tambah Deposit</a>
			</div>
	</div>
      <a href="contact.html" class="list-group-item">Cari Customer</a>
    </div>
  </div>
  <!-- Content Column -->
  <div class="col-lg-9 mb-4">
<!-- Content Row -->

       
<div class="containeer">
  <form action="/action_page.php">
    <div class="row">
      <div class="col-20">
        <label for="nomem">No. Member</label>
      </div>
      <div class="col-75">
        <input type="text" id="nomem" name="nomormember" placeholder="Nomor member">
      </div>
    </div>
    <div class="row">
      <div class="col-20">
        <label for="name">Nama Lengkap</label>
      </div>
      <div class="col-75">
        <input type="text" id="name" name="name" placeholder="Nama Lengkap">
      </div>
    </div>
    <div class="row">
      <div class="col-20">
        <label for="dob">Tanggal Lahir</label>
      </div>
      <div class="col-75" style="padding:10px 0;">
        <input type="date" id="dob" name="dob">
      </div>
    </div>
    <div class="row">
      <div class="col-20">
        <label for="nohp">Nomor HP</label>
      </div>
      <div class="col-75">
        <input type="text" id="nohp" name="nohp" placeholder="Nomor HP">
      </div>
    </div>
    <div class="row">
      <div class="col-20">
        <label for="alamat">Alamat</label>
      </div>
      <div class="col-75">
        <textarea id="alamat" name="alamat" placeholder="Alamat lengkap" style="height:100px"></textarea>
      </div>
    </div>
    <div class="row">
      <div class="col-20">
        <label for="deposit">Deposit</label>
      </div>
      <div class="col-75">
        <input type="text" id="deposit" name="deposit" placeholder="Deposit">
      </div>
    </div>
    <button style="width:auto;background-color:grey;"type="submit">Batal</button>
    <button style="width:auto;"type="submit">Tambah Customer</button>
  </form>
</div>
    </div>
</div>
<!-- /.row -->

</section>
