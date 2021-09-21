@extends('layouts.general')
@section('register')

@section('special-header')
    <link rel="stylesheet" href="./style/contactus.css" />
@endsection

@section('main-body')
    <main style="min-height: 100vh">
        <div class="container">
            <div class="row px-5 py-5">
                <form action="{{route('contact.store')}}" method="POST" id="contact-form" class="mx-auto row col-md-8 col-sm-12" style="gap: 10px"
                    >
                    @csrf
                    <h1 class="col-md-12 text-center" style="color:#D7E081">Keep in touch with us</h1>
                    <span class="row col-md-12 justify-content-between align-items-center">
                        <span class="input-container">
                            <i class="fas fa-user-tie"></i>
                            <input type="text" id="fname" name="name" class="hover-shadow input-container-input"
                                placeholder="Your name.." />
                        </span>
                    </span>
                    <span class="row col-md-12 justify-content-between align-items-center">

                        <span class="input-container">
                            <i class="fas fa-envelope"></i>
                            <input type="text" id="email" class="hover-shadow input-container-input" name="email"
                                placeholder="Enter Your Email.." /></span>
                    </span><span class="row col-md-12 justify-content-between align-items-center">

                        <span class="input-container">
                            <i class="fas fa-phone-alt"></i>
                            <input type="text" class="hover-shadow input-container-input" id="phone" name="phone"
                                placeholder="Your Phone Number.." />
                        </span>
                    </span>
                    <span class="row col-md-12 justify-content-between align-items-center">
                        <textarea class="col-md-12 hover-shadow input-container-input" id="subject" name="message"
                            placeholder="Write your message"></textarea>
                        <input type="submit" value="Send Message" class="btn btn-success ml-auto mt-2 " /></span>

                </form>
            </div>
        </div>
    </main>
    {{-- <script>
        function myformValidate(event) {
            function ValidateEmail(mail) {
                let email = document.getElementById("email"),
                    fname = document.getElementById("fname"),
                    phone = document.getElementById("phone");
                if (
                    /^[a-zA-Z0-9.!#$%&'+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)$/.test(
                        email.value
                    )
                ) {
                    return true;
                }
                alert("You have entered an invalid email address!");
                return false;
            }

            if (
                email.value.length != 0 &&
                fname.value.length > 8 &&
                phone.value.length > 0 &&
                isNaN(fname.value) &&
                isFinite(Number(phone.value)) &&
                ValidateEmail(email.value)
            ) {
                alert("welldone");
                event.preventDefault();
            } else {
                alert("entered wrong data");
                event.preventDefault();
            }
        }
        </script> --}}
@endsection
