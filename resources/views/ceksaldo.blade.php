@extends('layouts.navbar')

<style>
    table, td, th {  
    text-align: left;
    }

    table {
    border-collapse: collapse;

    }

    th, td {
    padding: 10px;
    }

      table.center {
    margin-left:auto; 
    margin-right:auto;
  }
</style>

<section  id="about" class="headerbg">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h1 class="text-uppercase  text-center"><strong>Cek Saldo Membership</strong></h1>
           </div>
        </div>
      </div>
</section>

<section>
    <div class="container"  style="background-color: white;padding: 5%;">
            <table class="center">
        <tr>
            <th>Nomor Member:</th>
            <td>GRI012</td>
        </tr>
        <tr>
            <th>Nama Lengkap:</th>
            <td>Griffin</td>
        </tr>
            <tr>
            <th>No HP:</th>
            <td>081234567890</td>
        </tr>
            <tr>
            <th>Alamat:</th>
            <td>Bogor</td>
        </tr>
        <tr>
            <th>Status Member:</th>
            <td>AKtif</td>

        </tr>
        <tr>
            <th>Saldo Deposit:</th>
            <td>Rp200000,-</td>
        
        </tr>
        </table>
    </div>
</section>

@extends('layouts.footer')