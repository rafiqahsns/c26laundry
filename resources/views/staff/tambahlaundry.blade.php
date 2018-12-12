@extends('layouts.navbar2')

<section class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h2 class="mt-4 mb-5 text-uppercase text-center">Tambah Laundry

</h2>

    <!-- Content Row -->
    <div class="container" style="background-color: white;padding: 5%;">
        <div class="row">
            <div class="kolom">
                <h6><strong>Daily Service</strong></h6>
                <label class="containerr">One
                    <input type="radio" checked="checked" name="radio">
                    <span class="checkmark"></span>
                </label>
                <label class="containerr">Two
                    <input type="radio" name="radio">
                    <span class="checkmark"></span>
                </label>
                <label class="containerr">Three
                    <input type="radio" name="radio">
                    <span class="checkmark"></span>
                </label>
                <label class="containerr">Four
                    <input type="radio" name="radio">
                    <span class="checkmark"></span>
                </label>
            </div>
            <div class="kolom">
                <h6><strong>Dry Clean</strong></h6>
                <label class="containerr">One
                    <input type="radio" checked="checked" name="radio">
                    <span class="checkmark"></span>
                </label>
                <label class="containerr">Two
                    <input type="radio" name="radio">
                    <span class="checkmark"></span>
                </label>
                <label class="containerr">Three
                    <input type="radio" name="radio">
                    <span class="checkmark"></span>
                </label>
                <label class="containerr">Four
                    <input type="radio" name="radio">
                    <span class="checkmark"></span>
                </label>
            </div>
            <div class="kolom">
                <h6><strong>Satuan</strong></h6>
                <label class="containerr">One
                    <input type="radio" checked="checked" name="radio">
                    <span class="checkmark"></span>
                </label>
                <label class="containerr">Two
                    <input type="radio" name="radio">
                    <span class="checkmark"></span>
                </label>
                <label class="containerr">Three
                    <input type="radio" name="radio">
                    <span class="checkmark"></span>
                </label>
                <label class="containerr">Four
                    <input type="radio" name="radio">
                    <span class="checkmark"></span>
                </label>
            </div>
        </div>
        <h6><strong>Banyaknya</strong></h6>
        <input type="number" placeholder="Banyaknya" name="amount" required> kg atau pcs
        <div style="float:right;">
            <button onclick="location.href='{{route('orderbaru')}}'" style="width:auto;background-color: #aaa">Batal</button>
            <button onclick="location.href='{{route('orderbaru')}}'" style="width:auto;">Tambah Laundry</button>
        </div>
    </div>
    <!-- /.row -->

</section>