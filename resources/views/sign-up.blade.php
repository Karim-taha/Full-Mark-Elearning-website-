@extends('layouts.general')

@section('special-header')
    <link href="./style/form.css" rel="stylesheet" type="text/css" media="all" />
    <style>
        .gov {
            width: 50%;
            border: 1px solid #6ab04c;
            border-radius: 0.4em;
            padding: 0.25em 0.5em;
            font-size: 1.1rem;
            cursor: pointer;
            line-height: 1.1;
        }
    </style>
@endsection

@section('main-body')
    <main class="main-w3layouts wrapper" style="margin-top:15vh">
        <h1 class="signup-text">Sign Up</h1>
        <div class="main-agileinfo">
            <div class="agileits-top">
                <form action="#" method="POST">
                    <input class="text" type="text" name="fname" placeholder="First Name" required="" />
                    <input class="text email" type="text" name="lname" placeholder="Last Name" required="" />
                    <input class="text email" type="text" name="email" placeholder="Email" required="" />
                    <?php if (isset($_SESSION['emailErr'])) : ?>
                    <small id="emailHelp" class="form-text  text-danger"><?php echo $_SESSION['emailErr']; ?></small>
                    <?php endif; ?>
                    <input class="text" type="password" name="password" placeholder="Password" required="" />
                    <?php if (isset($_SESSION['passLength'])) : ?>
                    <small id="emailHelp" class="form-text  text-danger"><?php echo $_SESSION['passLength']; ?></small>
                    <?php endif; ?>
                    <input class="text w3lpass" type="password" name="confirmPassword" placeholder="Confirm Password"
                        required="" />
                    <?php if (isset($_SESSION['conPass'])) : ?>
                    <small id="emailHelp" class="form-text  text-danger"><?php echo $_SESSION['conPass']; ?></small>
                    <?php endif; ?>
                    <input class="text w3lpass" type="text" name="nid" placeholder="National ID" required="" />
                    <input class="text w3lpass" type="text" name="mobilenumber"
                        placeholder="Mobile Number Like 01 XXXXXXXXX" required="" />
                    <?php if (isset($_SESSION['mobNumber'])) : ?>
                    <small id="emailHelp" class="form-text  text-danger"><?php echo $_SESSION['mobNumber']; ?></small>
                    <?php endif; ?>
                    <input class="text w3lpass" type="text" name="birthdate" placeholder="Birth Date Like yyyy/mm/dd"
                        required="" />
                    <label class="labelGovern">Governorate : </label>
                    <select class="gov" name="govs">
                        <?php $govs = [
            'Alexandria',
            'Aswan',
            'Asyut',
            'Beheira',
            'Beni Suef',
            'Cairo',
            'Dakahlia',
            'Damietta',
            'Faiyum',
            'Gharbia',
            'Giza',
            'Ismailia',
            'Kafr El Sheikh',
            'Luxor',
            'Matruh',
            'Minya',
            'Monufia',
            'New Valley',
            'North Sinai',
            'Port Said',
            'Qalyubia',
            'Qena',
            'Red Sea',
            'Sharqia',
            'Sohag',
            'South Sinai',
            'Suez',
            ];
            foreach ($govs as $gov) {
            echo "<option value='$gov'>$gov</option>";
            }
            ?>
                    </select>
                    <br><br>
                    <div style="clear: both"></div>
                    <div class="wthree-text">
                        <label class="anim">
                            <input type="checkbox" class="checkbox" required="" />
                            <span>I Agree To The Terms & Conditions.</span>
                        </label>
                        <div class="clear"></div>
                    </div>
                    <input type="submit" name="signup" value="SIGNUP" />
                </form>
                <p>You have an Account? <a href="login.php"> Login Now!</a></p>
            </div>
        </div>
        <!-- copyright -->
        <div class="colorlibcopy-agile">
            <p>
                © 2021 Full Mark. All rights reserved | Design with
                <i class="heart fas fa-heart"></i> by
                <a href="#" target="_blank">Full Mark Team.</a>
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