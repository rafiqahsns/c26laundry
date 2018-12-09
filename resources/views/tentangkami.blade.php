@extends('layouts.navbar')

<section  id="about" class="headerbg">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h1 class="text-uppercase  text-center"><strong>C26 Laundry</strong></h1>
            <h6 class="text-uppercase  text-center"><strong><a href="#tentang">Tentang Kami</a>  /  <a href="#visimisi">Visi & Misi</a>  /  <a href="#contact">Hubungi Kami</a></strong></h6>
           </div>
        </div>
      </div>
</section>
<div class="row">
        <!-- Map Column -->
        <div class="col-lg-8">
          <!-- Embedded Google Map -->
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.598673404007!2d106.73146961373266!3d-6.572227866072724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c4c78eadc9b9%3A0xfa67d46ea316d2b6!2sC26+LAUNDRY!5e0!3m2!1sen!2sid!4v1544262919008" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <!-- Contact Details Column -->
        <div class="col-lg-4 mt-4">
          <h3>Contact Details</h3>
          <p>
            3481 Melrose Place
            <br>Beverly Hills, CA 90210
            <br>
          </p>
          <p>
            <abbr title="Phone">P</abbr>: (123) 456-7890
          </p>
          <p>
            <abbr title="Email">E</abbr>:
            <a href="mailto:name@example.com">name@example.com
            </a>
          </p>
          <p>
            <abbr title="Hours">H</abbr>: Monday - Friday: 9:00 AM to 5:00 PM
          </p>
        </div>
      </div>
@extends('layouts.footer')