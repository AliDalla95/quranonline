
<section class="read_greatest_content d-none" id="statistics">
    <div class="data-n"  >
        <div class="container">
            <div class="row">
                <!-- start cochin_slider------------------------------------------ -->
                <div  class=" col-md-12">
                    <section class="img_our_tem">
                        HTML CSSResult
                        <!-- this is the markup. you can change the details (your own name, your own avatar etc.) but don’t change the basic structure! -->

                        <aside class="profile-card">

                            <header>

                                <!-- here’s the avatar -->
                                <a href="https://tutsplus.com">
                                    <img src="https://randomuser.me/api/portraits/men/99.jpg">
                                </a>

                                <!-- the username -->
                                <h1>George Darkos</h1>

                                <!-- and role or location -->
                                <h2>- Full Stack Web Developer -</h2>

                            </header>

                            <!-- bit of a bio; who are you? -->
                            <div class="profile-bio">

                                <p>Hello there!</p>
                                <p>I am a full stack web developer. I mainly work with PHP, HTML, CSS, JS and WordPress.
                                    <br />I also play well with Photoshop, Corel Draw, After Effects and other cool stuff.</p>

                            </div>

                            <!-- some social links to show off -->
                            <ul class="profile-social-links">

                                <!-- twitter - el clásico  -->
                                <li>
                                    <a href="https://twitter.com/tutsplus">
                                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/210284/social-twitter.svg">
                                    </a>
                                </li>

                                <!-- envato – use this one to link to your marketplace profile -->
                                <li>
                                    <a href="https://envato.com">
                                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/210284/social-envato.svg">
                                    </a>
                                </li>

                                <!-- codepen - your codepen profile-->
                                <li>
                                    <a href="https://codepen.io/tutsplus">
                                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/210284/social-codepen.svg">
                                    </a>
                                </li>

                                <!-- add or remove social profiles as you see fit -->

                            </ul>

                        </aside>
                        <!-- that’s all folks! -->



                        <style>
                            HTML CSSResult
                            /* go on then, styles go here.. knock yourself out! */

                            @import url(https://fonts.googleapis.com/css?family=Roboto);
                            ---body {

                                background: url(http://www.hdwallsource.com/img/2014/10/blurred-36379-37207-hd-wallpapers.jpg);
                            }

                            header img {
                                border-radius: 50%;
                                margin: 20px auto;
                                display: block;
                                width: 200px;
                                border: 5px solid #fff;
                            }

                            aside {
                                border-top: 0px solid #26A69A;
                                border-bottom: 0px solid #00695C;
                                border-radius: 50%;
                                margin: 0 auto;
                                display: block;
                                height: 250px;
                                width: 250px;
                                background: url(https://s-media-cache-ak0.pinimg.com/736x/3a/1f/02/3a1f02c10700daa80655a302c5a27acf.jpg);
                                background-size: cover;
                                overflow: hidden;
                                box-shadow: 0 0 100px 10px #fff;
                                transition: all ease 0.3s;
                            }

                            aside:hover {
                                border-top: 4px solid #26A69A;
                                border-bottom: 4px solid #00695C;
                                border-radius: 5px;
                                height: 480px;
                                width: 350px;
                                box-shadow: 0 0 70px 10px #fff;
                            }

                            aside:hover header img {
                                animation: profile_image 2000ms linear both;
                                animation-delay: 0.5s;
                            }

                            header {
                                text-align: center;
                            }

                            header h1 {
                                position: relative;
                                text-align: center;
                                color: #fff;
                                text-shadow: 1px 1px rgba(0, 0, 0, 0.5);
                                font-size: 25px;
                                line-height: 25px;
                                display: inline-block;
                                padding: 10px;
                                transition: all ease 0.250s;
                                border-top: 1px solid #fff;
                                border-bottom: 1px solid #fff;
                            }

                            aside:hover header h1 {
                                margin-top: 0px;
                                outline: 0 solid #fff;
                                border-top: 0px solid #fff;
                                border-bottom: 1px solid #fff;
                            }

                            header h2 {
                                text-align: center;
                                color: #fff;
                                text-shadow: 1px 1px rgba(0, 0, 0, 0.5);
                                font-size: 17px;
                                font-weight: normal;
                                line-height: 0px;
                                margin: 0;
                            }

                            .profile-bio {
                                margin-top: 20px;
                                padding: 1px 20px 10px 20px !important;
                                transition: all linear 1.5s;
                                color: #fff;
                                font-size: 14px;
                                opacity: 0;
                                background: linear-gradient(to bottom, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.42) 49%, rgba(0, 0, 0, 0.61) 100%);
                            }

                            aside:hover .profile-bio {
                                opacity: 1;
                            }

                            .profile-bio p:first-child {
                                text-align: center;
                                font-size: 16px;
                            }

                            .profile-social-links {
                                position: relative;
                                margin-top: -440px;
                                margin-left: -100px;
                                list-style-type: none;
                                opacity: 0;
                                transition: all ease 0.5s;
                            }

                            aside:hover .profile-social-links {
                                margin-left: -30px;
                                opacity: 1;
                            }

                            .profile-social-links li img {
                                width: 30px;
                                background: #fff;
                                border-radius: 50%;
                                padding: 5px;
                            }
                            /*PROFILE IMAGE ANIMATE */

                            @keyframes profile_image {
                                0% {
                                    transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
                                }
                                3.4% {
                                    transform: matrix3d(1.032, 0, 0, 0, 0, 1.041, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
                                }
                                4.7% {
                                    transform: matrix3d(1.045, 0, 0, 0, 0, 1.06, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
                                }
                                6.81% {
                                    transform: matrix3d(1.066, 0, 0, 0, 0, 1.089, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
                                }
                                9.41% {
                                    transform: matrix3d(1.088, 0, 0, 0, 0, 1.117, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
                                }
                                10.21% {
                                    transform: matrix3d(1.094, 0, 0, 0, 0, 1.123, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
                                }
                                13.61% {
                                    transform: matrix3d(1.112, 0, 0, 0, 0, 1.133, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
                                }
                                14.11% {
                                    transform: matrix3d(1.114, 0, 0, 0, 0, 1.133, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
                                }
                                17.52% {
                                    transform: matrix3d(1.121, 0, 0, 0, 0, 1.124, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
                                }
                                18.72% {
                                    transform: matrix3d(1.121, 0, 0, 0, 0, 1.119, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
                                }
                                21.32% {
                                    transform: matrix3d(1.12, 0, 0, 0, 0, 1.107, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
                                }
                                24.32% {
                                    transform: matrix3d(1.115, 0, 0, 0, 0, 1.096, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
                                }
                                25.23% {
                                    transform: matrix3d(1.113, 0, 0, 0, 0, 1.094, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
                                }
                                29.03% {
                                    transform: matrix3d(1.106, 0, 0, 0, 0, 1.09, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
                                }
                                29.93% {
                                    transform: matrix3d(1.105, 0, 0, 0, 0, 1.09, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
                                }
                                35.54% {
                                    transform: matrix3d(1.098, 0, 0, 0, 0, 1.096, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
                                }
                                36.74% {
                                    transform: matrix3d(1.097, 0, 0, 0, 0, 1.098, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
                                }
                                41.04% {
                                    transform: matrix3d(1.096, 0, 0, 0, 0, 1.102, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
                                }
                                44.44% {
                                    transform: matrix3d(1.097, 0, 0, 0, 0, 1.103, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
                                }
                                52.15% {
                                    transform: matrix3d(1.099, 0, 0, 0, 0, 1.101, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
                                }
                                59.86% {
                                    transform: matrix3d(1.101, 0, 0, 0, 0, 1.099, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
                                }
                                63.26% {
                                    transform: matrix3d(1.101, 0, 0, 0, 0, 1.099, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
                                }
                                75.28% {
                                    transform: matrix3d(1.1, 0, 0, 0, 0, 1.1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
                                }
                                85.49% {
                                    transform: matrix3d(1.1, 0, 0, 0, 0, 1.1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
                                }
                                90.69% {
                                    transform: matrix3d(1.1, 0, 0, 0, 0, 1.1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
                                }
                                100% {
                                    transform: matrix3d(1.1, 0, 0, 0, 0, 1.1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
                                }
                            }
                            /*NAME ANIMATE */

                            aside:hover header h1 {
                                animation: name_and_job 1500ms linear both;
                                animation-delay: 0.4s;
                            }

                            @keyframes name_and_job {
                                0% {
                                    transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -300, 0, 0, 1);
                                }
                                1.3% {
                                    transform: matrix3d(3.905, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -237.02, 0, 0, 1);
                                }
                                2.55% {
                                    transform: matrix3d(4.554, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -182.798, 0, 0, 1);
                                }
                                4.1% {
                                    transform: matrix3d(4.025, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -125.912, 0, 0, 1);
                                }
                                5.71% {
                                    transform: matrix3d(3.039, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -79.596, 0, 0, 1);
                                }
                                8.11% {
                                    transform: matrix3d(1.82, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -31.647, 0, 0, 1);
                                }
                                8.81% {
                                    transform: matrix3d(1.581, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -21.84, 0, 0, 1);
                                }
                                11.96% {
                                    transform: matrix3d(1.034, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 4.825, 0, 0, 1);
                                }
                                12.11% {
                                    transform: matrix3d(1.023, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 5.53, 0, 0, 1);
                                }
                                15.07% {
                                    transform: matrix3d(0.947, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 12.662, 0, 0, 1);
                                }
                                16.12% {
                                    transform: matrix3d(0.951, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 13.007, 0, 0, 1);
                                }
                                27.23% {
                                    transform: matrix3d(1.001, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 2.352, 0, 0, 1);
                                }
                                27.58% {
                                    transform: matrix3d(1.001, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 2.121, 0, 0, 1);
                                }
                                38.34% {
                                    transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -0.311, 0, 0, 1);
                                }
                                40.09% {
                                    transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -0.291, 0, 0, 1);
                                }
                                50% {
                                    transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -0.048, 0, 0, 1);
                                }
                                60.56% {
                                    transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0.007, 0, 0, 1);
                                }
                                82.78% {
                                    transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
                                }
                                100% {
                                    transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
                                }
                            }

                            aside:hover ul li:first-child {
                                animation: social_animation 2000ms ease-in-out both;
                                animation-delay: 0.75s;
                            }

                            aside:hover ul li:nth-child(2) {
                                animation: social_animation 2000ms ease-in-out both;
                                animation-delay: 1s;
                            }

                            aside:hover ul li:nth-child(3) {
                                animation: social_animation 2000ms ease-in-out both;
                                animation-delay: 1.25s;
                            }

                            @keyframes social_animation {
                                0% {
                                    transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -300, 0, 0, 1);
                                }
                                1.3% {
                                    transform: matrix3d(3.905, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -237.02, 0, 0, 1);
                                }
                                2.55% {
                                    transform: matrix3d(4.554, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -182.798, 0, 0, 1);
                                }
                                4.1% {
                                    transform: matrix3d(4.025, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -125.912, 0, 0, 1);
                                }
                                5.71% {
                                    transform: matrix3d(3.039, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -79.596, 0, 0, 1);
                                }
                                8.11% {
                                    transform: matrix3d(1.82, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -31.647, 0, 0, 1);
                                }
                                8.81% {
                                    transform: matrix3d(1.581, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -21.84, 0, 0, 1);
                                }
                                11.96% {
                                    transform: matrix3d(1.034, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 4.825, 0, 0, 1);
                                }
                                12.11% {
                                    transform: matrix3d(1.023, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 5.53, 0, 0, 1);
                                }
                                15.07% {
                                    transform: matrix3d(0.947, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 12.662, 0, 0, 1);
                                }
                                16.12% {
                                    transform: matrix3d(0.951, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 13.007, 0, 0, 1);
                                }
                                27.23% {
                                    transform: matrix3d(1.001, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 2.352, 0, 0, 1);
                                }
                                27.58% {
                                    transform: matrix3d(1.001, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 2.121, 0, 0, 1);
                                }
                                38.34% {
                                    transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -0.311, 0, 0, 1);
                                }
                                40.09% {
                                    transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -0.291, 0, 0, 1);
                                }
                                50% {
                                    transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -0.048, 0, 0, 1);
                                }
                                60.56% {
                                    transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0.007, 0, 0, 1);
                                }
                                82.78% {
                                    transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
                                }
                                100% {
                                    transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
                                }
                            }



                            Resources1×0.5×0.25×Rerun
                        </style>

                    </section><!--End cochin_slider-->
                </div><!-- col-sm-6 -->
                <!-- ------------------------------------------ -->
            </div><!--  container -->
        </div><!--  data-n -->
</section><!--End section  -->