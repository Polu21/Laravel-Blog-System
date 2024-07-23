<x-admin-layout>
    <x-slot name="title">
        Profile | {{ config('app.name') }}
    </x-slot>

    <section class="personal-account-section">
        <div class="container">
            {{-- <div class="row dashboard_section_breadcumb">
                <div class="col-md-12">
                    <ul class="d-flex breadcrumb-bar align-items-center">
                        <li><a href="javascript:void(0)">Home page</a></li>
                        <li><a href="javascript:void(0)" class="active">Personal account</a></li>
                    </ul>
                </div>
            </div> --}}

            {{-- <div class="row">
                <x-frontend.auth-aside-menu />

                <div class="col-md-8 left_menu_content_box">
                    <div class="form-main-box menu_content_box_inner " data-id="profile">
                        <h2>Hey, {{ $user->name }}, welcome back!</h2>
                        <form action="{{ route('user.update') }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="d-flex img-upload-box">
                                <div class="img-box">
                                    <img src="{{ asset('assets/frontend/images/user1.png') }}" class="img-fluid"
                                        alt="avatar1">
                                </div>
                                <div class="upload-box">
                                    <div class="input-group mb-3">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="inputGroupFile01">
                                            <label for="inputGroupFile01">Update photo</label>
                                        </div>
                                    </div>
                                    <p>Please select photos up to 1.5 mb</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="from-group">
                                        <label for="">Name</label>
                                        <input type="text" name="name" id="name" placeholder="Full Name"
                                            value="{{ $user->name ?? null }}">
                                        <x-error :messages="$errors->get('name')" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="from-group">
                                        <label for="">Company e-mail address</label>
                                        <input type="email" name="email" id="email" placeholder="Email"
                                            value="{{ $user->email ?? null }}">
                                        <x-error :messages="$errors->get('email')" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="from-group">
                                        <label for="">Phone Number</label>
                                        <input type="number" name="phone_number" id="phone_number"
                                            placeholder="(316) 555-0116" value="{{ $user->phone_number ?? null }}">
                                        <x-error :messages="$errors->get('phone_number')" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="from-group">
                                        <label for="">Job title</label>
                                        <input type="text" name="job_title" id="job_title" placeholder="Doctor"
                                            value="{{ $user->job_title ?? null }}">
                                        <x-error :messages="$errors->get('job_title')" />
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="from-group">
                                        <label for="">Your Linkendin profile</label>

                                        <input type="url" name="linkedin_url" id="linkedin_url"
                                            placeholder="https://www.linkedin.com/in/"
                                            value="{{ $user->linkedin_url ?? null }}">

                                        <x-error :messages="$errors->get('linkedin_url')" />
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="from-group">
                                        <label for="">Company website</label>

                                        <input type="url" name="company_website" id="company_website"
                                            placeholder="https://testwebsite.com"
                                            value="{{ $user->company_website ?? null }}">

                                        <x-error :messages="$errors->get('company_website')" />
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="from-group">
                                        <div class="from-group">
                                            <label for="">Company name</label>

                                            <input type="text" name="" id="" placeholder="L'Oréal"
                                                value="{{ $user->company_name ?? null }}">

                                            <x-error :messages="$errors->get('company_name')" />
                                        </div>
                                    </div>
                                </div>

                                {{-- <div class="col-md-6">
                                    <div class="from-group">
                                        <label for="">Company name</label>
                                        <input type="text" name="" id="" placeholder="L'Oréal">
                                    </div>
                                </div> --}}

                                {{-- <div class="col-md-12 text-center">
                                    <button type="submit" class="profile_upadte_button">Update</button>
                                </div>
                            </div>
                        </form>
                    </div> --}}

                    {{-- <div class="overview-right menu_content_box_inner is-hidden" data-id="overview">
                        <div class="dashbord_heading">
                            <h3>Overview</h3>
                        </div>

                        <div class="row">
                            <div class="col-md-5 no_padding_left">
                                <div class="box-one box">
                                    <div class="content-box text-center">
                                        <h2>4</h2>
                                        <img src="{{ asset('assets/frontend/images/star.png') }}" class="img-fluid"
                                            alt="">
                                    </div>
                                </div>

                                <div class="box-two box">
                                    <div class="content-box text-center">
                                        <h3>Reviews - 3 stars or less</h3>
                                        <h2>2</h2>
                                        <ul class="common">
                                            <li>all time</li>
                                            <li>last 7 days</li>
                                            <li>last 30 days</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="box-three box">
                                    <div class="content-box text-center">
                                        <h3>Total reviews</h3>
                                        <h2>10</h2>

                                        <ul class="common">
                                            <li>all time</li>
                                            <li>last 7 days</li>
                                            <li>last 30 days</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-7">
                                <div class="right-box-one box">
                                    <!-- <div class="content-box"> -->
                                    <h3>Review Breakdown</h3>
                                    <ul class="meter-bar">
                                        <li>
                                            5 star
                                            <span class="meter_holder">
                                                <meter id="5_star" value="40" min="0"
                                                    max="100">40%</meter>
                                            </span>
                                            40%
                                        </li>

                                        <li>
                                            4 star
                                            <span class="meter_holder">
                                                <meter id="4_star" value="30" min="0"
                                                    max="100">30%</meter>
                                            </span>
                                            30%
                                        </li>

                                        <li>
                                            3 star
                                            <span class="meter_holder">
                                                <meter id="3_star" value="20" min="0"
                                                    max="100">20%</meter>
                                            </span>
                                            20%
                                        </li>

                                        <li>
                                            2 star
                                            <span class="meter_holder">
                                                <meter id="2_star" value="10" min="0"
                                                    max="100">10%</meter>
                                            </span>
                                            10%
                                        </li>

                                        <li>
                                            1 star
                                            <span class="meter_holder">
                                                <meter id="1_star" value="0" min="0"
                                                    max="100">0%</meter>
                                            </span>
                                            0%
                                        </li>
                                    </ul>
                                </div>

                                <div class="right-box-two box">
                                    <div class="content-box">
                                        <h3>Review Criteria</h3>
                                        <ul>
                                            <li>
                                                <span>Affordabillity</span>
                                                <img src="{{ asset('assets/frontend/images/star.png') }}"
                                                    class="img-fluid" alt="">
                                            </li>

                                            <li>
                                                <span>Customer Service</span>
                                                <img src="{{ asset('assets/frontend/images/star.png') }}"
                                                    class="img-fluid" alt="">
                                            </li>

                                            <li>
                                                <span>Equipment/Service Qality</span>
                                                <img src="{{ asset('assets/frontend/images/star.png') }}"
                                                    class="img-fluid" alt="star">
                                            </li>

                                            <li>
                                                <span>Responsiveness</span>
                                                <img src="{{ asset('assets/frontend/images/star.png') }}"
                                                    class="img-fluid" alt="star">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}

                    {{-- <div class="all_review menu_content_box_inner is-hidden" data-id="allreview">
                        <div class="dashbord_heading">
                            <h3>All reviews</h3>
                        </div>

                        <div class="top_form">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                                    <div class="from-group">
                                        <label for="">Sort by</label>
                                        <select class="form-control" id="exampleFormControlSelect1">
                                            <option>Most recent</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                                    <div class="from-group">
                                        <label for="">Filter by</label>
                                        <select class="form-control" id="exampleFormControlSelect1">
                                            <option>All stars</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                                    <div class="from-group">
                                        <label for="">Replies</label>

                                        <select class="form-control" id="exampleFormControlSelect1">
                                            <option>All replies</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="articles_top_sec">
                            <div class="client_sec">
                                <div class="client_img">
                                    <img src="{{ asset('assets/frontend/images/avatar.png') }}" alt=""
                                        class="">
                                </div>

                                <div class="client_content">
                                    <h4>Kayleigh Nashville</h4>
                                    <p>August 7, 2022</p>
                                </div>
                            </div>

                            <div class="articles_top_sec1">
                                <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit </h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris cras sed quam
                                    egestas. Metus risus cras id viverra nunc elementum massa a. Lectus ante est
                                    vestibulum mi porttitor.
                                </p>

                                <hr>

                                <h4>Overall Ranking <span>10</span>
                                    <a href="#">Edit Reply</a>
                                    <a href="#">Delite Reply</a>
                                </h4>

                                <textarea placeholder=""></textarea>
                            </div>
                        </div>
                    </div> --}}

                    <div class="change-password-box menu_content_box_inner is-hidden" data-id="cpassword">
                        <div class="dashbord_heading">
                            <h3>Change password</h3>
                        </div>

                        <div class="from-group">
                            <label for="">Enter old password</label>
                            <input type="text" name="" id="">
                        </div>

                        <div class="from-group">
                            <label for="">Enter new password</label>
                            <input type="text" name="" id="">
                        </div>

                        <div class="from-group">
                            <label for="">Enter confirm password</label>
                            <input type="text" name="" id="">
                        </div>

                        <button class="w-100">Update</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-admin-layout>
