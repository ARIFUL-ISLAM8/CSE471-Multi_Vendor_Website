@extends('frontend.dashboard.layouts.master')

@section('content')
<section id="wsus__dashboard">
    <div class="container-fluid">
        @include('frontend.dashboard.layouts.sidebar')
      <div class="row">
        <div class="col-xl-9 col-xxl-10 col-lg-9 ms-auto">
          <div class="dashboard_content">
            <div class="wsus__dashboard">
              <div class="row">
                <div class="col-xl-2 col-6 col-md-4">
                  <a class="wsus__dashboard_item red" href="dsahboard_order.html">
                    <i class="far fa-address-book"></i>
                    <p>order</p>
                  </a>
                </div>
                <div class="col-xl-2 col-6 col-md-4">
                  <a class="wsus__dashboard_item green" href="dsahboard_download.html">
                    <i class="fal fa-cloud-download"></i>
                    <p>download</p>
                  </a>
                </div>
                <div class="col-xl-2 col-6 col-md-4">
                  <a class="wsus__dashboard_item sky" href="dsahboard_review.html">
                    <i class="fas fa-star"></i>
                    <p>review</p>
                  </a>
                </div>
                <div class="col-xl-2 col-6 col-md-4">
                  <a class="wsus__dashboard_item blue" href="dsahboard_wishlist.html">
                    <i class="far fa-heart"></i>
                    <p>wishlist</p>
                  </a>
                </div>
                <div class="col-xl-2 col-6 col-md-4">
                  <a class="wsus__dashboard_item orange" href="dsahboard_profile.html">
                    <i class="fas fa-user-shield"></i>
                    <p>profile</p>
                  </a>
                </div>
                <div class="col-xl-2 col-6 col-md-4">
                  <a class="wsus__dashboard_item purple" href="dsahboard_address.html">
                    <i class="fal fa-map-marker-alt"></i>
                    <p>address</p>
                  </a>
                </div>
              </div>
              <div class="row">
                <div class="col-xl-12">
                  <div class="wsus__message">
                    <h4>message</h4>
                    <div class="wsus__message_single">
                      <div class="wsus__message_img">
                        <img src="{{asset('frontend/images/team_1.jpeg')}}" alt="Team Image" style="width: 80px; height: 80px; object-fit: cover;">
                      </div>
                      <div class="wsus__message_text">
                        <h6>Adnan Parvez</h6>
                        <span>22 Minutes ago</span>
                        <p>As a student at Brac University, I am both brilliant and hardworking, consistently striving for excellence in my studies. My dedication is reflected in my ability to achieve outstanding results, particularly when I devote time to studying before exams. Beyond academics, I am a good friend who values and nurtures close relationships. My sensitivity allows me to empathize with others and provide support when needed. This combination of qualities—academic diligence and personal empathy—guides me towards success both in and out of the classroom.

                        </p>
                      </div>
                      <div class="wsus__message_icon">
                        <span><i class="far fa-trash-alt"></i></span>
                      </div>
                    </div>
                    <div class="wsus__message_single">
                      <div class="wsus__message_img">
                        <img src="{{asset('frontend/images/ts-2.png')}}" alt="Team Image" style="width: 80px; height: 80px; object-fit: cover;">
                      </div>
                      <div class="wsus__message_text">
                        <h6>Ariful Islam</h6>
                        <span>10 Minutes ago</span>
                        <p>As a Computer Science student at Brac University, I am known for my ever-present smile, which has a unique way of brightening up any room. Whenever someone sees my face, their mood naturally lifts and cheers up. My positive demeanor complements my dedication to my studies and helps create a supportive and uplifting atmosphere among my peers. This combination of a cheerful attitude and a strong academic focus makes me a valued member of the Brac University community</p>
                      </div>
                      <div class="wsus__message_icon">
                        <span><i class="far fa-trash-alt"></i></span>
                      </div>
                    </div>
                    <div class="wsus__message_single">
                      <div class="wsus__message_img">
                        <img src="{{asset('frontend/images/team_3.png')}}" alt="Team Image" style="width: 80px; height: 80px; object-fit: cover;">
                      </div>
                      <div class="wsus__message_text">
                        <h6>Nowshin Reza</h6>
                        <span>40 Minutes ago</span>
                        <p>Bolbo na</p>
                      </div>
                      <div class="wsus__message_icon">
                        <span><i class="far fa-trash-alt"></i></span>
                      </div>
                    </div>
                  </div>
                  <div class="wsus__message">
                    <h4>personal information</h4>
                    <form action="#">
                      <div class="row">
                        <div class="col-xl-6">
                          <div class="wsus__single_inout">
                            <label>first name</label>
                            <input type="text" placeholder="First Name">
                          </div>
                        </div>
                        <div class="col-xl-6">
                          <div class="wsus__single_inout">
                            <label>last name</label>
                            <input type="text" placeholder="Last Name">
                          </div>
                        </div>
                        <div class="col-xl-6">
                          <div class="wsus__single_inout">
                            <label>email</label>
                            <input type="email" placeholder="Email">
                          </div>
                        </div>
                        <div class="col-xl-6">
                          <div class="wsus__single_inout">
                            <label>phone</label>
                            <input type="text" placeholder="Phone">
                          </div>
                        </div>
                        <div class="col-xl-12">
                          <div class="wsus__single_inout">
                            <label>Address</label>
                            <textarea cols="3" rows="3" placeholder="Write Your Address Here"></textarea>
                          </div>
                        </div>
                        <div class="col-xl-12">
                          <div class="wsus__single_inout">
                            <label>about yourself</label>
                            <textarea cols="3" rows="3" placeholder="Write About Yourself"></textarea>
                          </div>
                        </div>
                      </div>
                      <button class="common_btn" type="submit">update</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection