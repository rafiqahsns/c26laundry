@extends('layouts.navbar2')
<section class=>
<h2 class="text-center uppercase">Login</h2>

<form  action="/action_page.php">

  <div class="container login">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        
    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
    <div class="container">

    <span class="psw"><a href="#">Lupa password?</a></span>
  </div>
  </div>

  
</form>
</section>
