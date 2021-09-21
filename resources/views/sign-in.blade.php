@extends('layouts.general')

@section('special-header')
    <link href="./style/form.css" rel="stylesheet" type="text/css" media="all" />
@endsection

@section('main-body')
    <main class="main-w3layouts wrapper" style="margin-top:15vh">
        <h1 class="signup-text">Log In</h1>
        <div class="main-agileinfo">
            <div class="agileits-top">
                <form method="post">
                    <?php if (isset($_SESSION['email-pass'])) : ?>
                    <div style="font-size: 20px; text-align:center" id="emailHelp" class="form-text  text-danger">
                        <?php echo $_SESSION['email-pass']; ?></div>
                    <?php endif; ?>
                    <input class="text email" type="email" name="email" placeholder="Email" required="" />

                    <input class="text" type="password" name="password" placeholder="Password" required="" />

                    <input type="submit" name="login" value="LOGIN" />
                </form>
                <p>Don't have an Account? <a href="signup.php"> Sign up Now!</a></p>
            </div>
        </div>
        <!-- copyright -->
        <div class="colorlibcopy-agile">
            <p>
                © 2021 Full Mark. All rights reserved | Design with <i class="heart fas fa-heart"></i> by
                <a href="https://colorlib.com/" target="_blank">Full Mark Team.</a>
            </p>
        </div>
        <!-- //copyright -->
        <ul class="colorlib-bubbles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </main>
@endsection

@section('special-end-page')

@endsection