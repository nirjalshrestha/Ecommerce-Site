@extends('User.master')
@section('content')
<!DOCTYPE html>
<html lang="en">
<body>
<!--================Categories Banner Area =================-->
<section class="solid_banner_area">
    <div class="container">
        <div class="solid_banner_inner">
            <h3>track item</h3>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="track.html">Track Item</a></li>
            </ul>
        </div>
    </div>
</section>
<!--================End Categories Banner Area =================-->

<!--================Track Area =================-->
<section class="track_area p_100">
    <div class="container">
        <div class="track_inner">
            <div class="track_title">
                <h2>Track Your Item</h2>
                <p> Donec sed tortor eros. Mauris varius commodo nisi, quis vestibulum est pellen-tesque quis. Vivamus nulla arcu, </p>
            </div>
            <form class="track_form row">
                <div class="col-lg-12 form-group">
                    <label for="text">Order ID</label>
                    <input class="form-control" type="text" id="text">
                </div>
                <div class="col-lg-12 form-group">
                    <label for="email">billing email</label>
                    <input class="form-control" type="email" id="email">
                </div>
                <div class="col-lg-12 form-group">
                    <button type="submit" value="submit" class="btn subs_btn form-control">place order</button>
                </div>
            </form>
        </div>
    </div>
</section>
<!--================End Track Area =================-->
</body>
</html>
@endsection
