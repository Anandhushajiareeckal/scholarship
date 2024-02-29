@extends('layouts.frontend')
@section('body')

<header class="page-banner-header gradient-bg position-relative">
    <div class="section-overlay">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12">
                    <div class="page-banner-content text-center">
                        <h3 class="page-banner-heading text-white pb-15">Contact Us</h3>

                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item font-14"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item font-14 active" aria-current="page">Contact Us</li>
                            </ol>
                        </nav>

                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="row" style="padding: 50px;">
    <div class="col-7 main_exam " > 
        <div class="qus_no">
            <h6>Q 1</h6>
        </div>
        <b> Nobody knows  ___________ it really means.</b>
        <div class="qus_form">
            <form action="">
                <div class="radio_btn">
                    <input type="radio" name="group"> why
                </div>
                <div class="radio_btn">
                    <input type="radio" name="group"> what
                </div>
                <div class="radio_btn">
                    <input type="radio" name="group"> how
                </div>
                <div class="radio_btn">
                    <input type="radio" name="group"> if
                </div>
            </form>
        </div>
        <div class="text-center">
            {{-- <button type="button" class="btn btn-info">Skip</button> --}}
            <button type="button" class="btn btn-primary">Next</button>
        </div>
        <div class="main_exam_footer">
            <button type="button" class="btn btn-secondary"><p>Mark for Review & Next</p></button>
            <button type="button" class="btn btn-success "><p> <i class="fas fa-save"></i>  Final submit</p></button>

        </div>
    </div> 
    <div class="col-4 main_questin">
        <div class="main_questin_header">
            <h6>QUESTIONS</h6>
            <div class="underline"></div>
        </div>
        <div class="row overflow-auto" style="max-height: 300px;">
            @for ($i = 0; $i < 100; $i++)
                <div class="col-3 col-xs-4 list_ques">
                    <p>Q {{$i+1}}</p>
                </div>
            @endfor
        </div>
        <div class="underline"></div>
        <div class="attempt_no">
            <b>Un-Attemplted Questions : 30</b>
        </div>
        <div class=" warning">
            <div class=" war_1 "></div><p> Not Answered</p><br>
            <div class="war_2"></div><p> Answered</p><br>
            <div class="war_3"></div><p> Mark for Review</p>
        </div>
    </div>
    
</div>

@endsection