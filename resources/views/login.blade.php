@extends('layouts.header')

<div class="container position-absolute top-50 start-50 translate-middle">

<div class="container">
  <div class="row row-cols-2" style="background-color: white; height: 500px;">
    <div class="col" style="background-color: #38D389; width: 40%;">Column</div>
    <div class="col align-self-center" style="width: 60%;">
      <div class="row d-flex flex-column justify-content-center px-5">
        <div class="col-12 px-5 pb-4 d-grid mx-auto">
          <img src="image/Pegadaian_new_logo.png" alt="Image" width="192">
      </div>
        <div class="col-12 pb-4 px-5">
          <input type="text" class="form-control col-md align-self-center bg-light" style="border-radius: 25px;" placeholder="Email">
      </div>
      <div class="col-12 px-5">
          <input type="text" class="form-control col-md align-self-center bg-light" style="border-radius: 25px;" placeholder="Password">
      </div>
      <div class="col-6 px-5 pt-4 d-grid mx-auto">
          <a href=" " type="submit" class="btn btn-primary align-self-center btn-user btn-block py-2" style="background-color:  #38D389; border: none; border-radius: 50px">Log In</a>
      </div>
    </div>
    </div>
  </div>
</div>
</div>

@extends('layouts.footer')