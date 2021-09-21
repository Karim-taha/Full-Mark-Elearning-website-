@extends('layouts.general')

@section('main-body')
    <main id="page-containt">
        <article class="row mx-3">
            <div class="firstdiv mx-auto col-md-6 col-sm-12">
                <h3>About Us</h3>
                <p>
                    FULL MARK students are a community of global learners united in a
                    shared goal of uplift and transformation. Our unique learning model
                    enables an unprecedented degree of engagement with our students, and
                    we are with them through every step of their learning journey—from the
                    first moment a marketing team member might answer a question on
                    Facebook, to the penultimate moment when a career team member receives
                    word that a graduate has gotten a new job. Our mantra is Students
                    First, and this is the light that guides us as we continue our mission
                    to bring the highest quality learning possible, to as many students as
                    we can possibly reach.
                </p>
                <span style="text-align:center">
                    <input type="button" class="btn btn-success" value="LEARN MORE" />
                </span>
            </div>
        </article>

        <div class="flex-container mx-3">
            <article class="row">
                <div class="col-md-4 col-sm-12">
                    <div class="sub-article">
                        <i class="fas fa-user-alt"></i><span>FULL MARK partners with more than 200 leading universities
                            and
                            companies to bring flexible, affordable, job-relevant online
                            learning to individuals and organizations worldwide</span>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="sub-article">
                        <i class="fas fa-envelope"></i>
                        <span>FULL MARK partners with more than 200 leading universities and
                            companies to bring flexible, affordable, job-relevant online
                            learning to individuals and organizations worldwide</span>
                    </div>

                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="sub-article">
                        <i class="fas fa-angle-down"></i><span>FULL MARK partners with more than 200 leading
                            universities
                            and
                            companies to bring flexible, affordable, job-relevant online
                            learning to individuals and organizations worldwide</span>
                    </div>

                </div>
            </article>

        </div>
    </main>
@endsection

@section('special-header')
    <link rel="stylesheet" href="./style/about_us.css" />
@endsection