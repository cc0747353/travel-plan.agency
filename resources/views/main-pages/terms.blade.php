@extends('normal-layout')
    @section('header')
        @include('normal-header')
    @endsection

    @section('page-title')
        @include('page-title', ['pageTitle' => 'Terms & Conditions'])
    @endsection

    @section('content')
        <!-- TNC Section -->
        <section class="tnc-section">
            <div class="auto-container">

                @php


                $terms_and_conditions = [
                    [
                        "name" => "introduction",
                        "title" => "Introduction",
                        "content" => "These Terms and Conditions \"Terms\" govern your use of the website and services offered by <b>Travel Plan</b> \"Travel Plan\", \"we\", \"us\", or \"our\". By accessing or using the website or any of the services, you agree to be bound by these Terms. If you do not agree to all of the Terms, you may not use the website or any of the services."
                    ],

                    [
                        "name" => "definitions",
                        "title" => "Definitions",
                        "content" => "
                            <ul class=\"list-style-four\">
                                <li><b>Account: </b> Your account on the website where you can access and manage your profile, job applications, and visa application information.</li>
                                <li><b>Content</b> Any information, data, text, images, videos, audio files, or other materials displayed on the website.</li>
                                <li><b>Content</b> Any information, data, text, images, videos, audio files, or other materials displayed on the website.</li>
                                <li><b>Content</b> Any information, data, text, images, videos, audio files, or other materials displayed on the website.</li>
                                <li><b>Content</b> Any information, data, text, images, videos, audio files, or other materials displayed on the website.</li>
                            </ul>
                        "
                    ],

                    [
                        "name" => "use_of_website_and_services",
                        "title" => "Use of the Website and Services",
                        "sub_content" => [
                            [
                                "title" => "Eligibility",
                                "content" => "You must be at least 18 years old and have the legal capacity to enter into contracts to use the website and services."
                            ],
                            [
                                "title" => "Prohibited Activities",
                                "content" => "
                                    <P> You agree not to:</P>
                                    <ul class=\"list-style-four\">
                                    <li>Violate any applicable laws or regulations.</li>
                                    <li>Infringe the intellectual property rights of any third party.</li>
                                    <li>Use the website or services for any illegal or unauthorized purpose.</li>
                                    <li>Attempt to gain unauthorized access to the website or any of the services.<li>
                                    <li>Transmit any viruses, worms, Trojan horses, or other harmful code.<li>
                                    <li>Interfere with or disrupt the website or any of the services.<li>
                                    <li>Use the website or services in a way that could damage, disable, or overburden the website or any of the services.<li></li>Collect or store personal information about other users without their consent.
                                    * Impersonate any person or entity.</li>
                                    </ul>"
                            ],
                            [
                                "title" => "Account Registration",
                                "content" => "You may need to create an account to access and use certain features of the website and services. You agree to provide accurate, complete, and current information when creating your account and to update your information as necessary."
                            ]
                        ]
                    ],
                    [
                        "name" => "job_search_services",
                        "title" => "Job Search Services",
                        "sub_content" => [
                            [
                                "title" => "Job Listings",
                                "content" => "<b>Travel Plan</b> provides access to a database of job listings from various sources. <b>Travel Plan</b> does not guarantee the accuracy or completeness of the job listings."
                            ],
                            [
                                "title" => "Job Applications",
                                "content" => "You may submit job applications through the website. <b>Travel Plan</b> does not guarantee that your job applications will be received or considered by potential employers."
                            ],
                            [
                                "title" => "Fees",
                                "content" => "<b>Travel Plan</b> may charge fees for certain job search services. The fees will be clearly displayed on the website."
                            ]
                        ]
                    ],
                    [
                        "name" => "visa_application_services",
                        "title" => "Visa Application Services",
                        "sub_content" => [
                            [
                                "title" => "Visa Information",
                                "content" => "<b>Travel Plan</b> provides information about visa requirements and application processes for various countries. <b>Travel Plan</b> does not guarantee the accuracy or completeness of the visa information."
                            ],
                            [
                                "title" => "Visa Assistance",
                                "content" => "<b>Travel Plan</b> may offer visa application assistance services for a fee. The services may include:
                                    * Reviewing your visa application materials.
                                    * Providing guidance on completing the visa application form.
                                    * Assisting with document translation and legalization.
                                    * Communicating with immigration authorities on your behalf."
                            ],
                            [
                                "title" => "Visa Approval",
                                "content" => "<b>Travel Plan</b> does not guarantee that your visa application will be approved. The decision to grant or deny a visa is solely at the discretion of the immigration authorities."
                            ]
                        ]
                    ],

                    [
                    "name" => "use_of_website_and_services",
                    "title" => "Use of the Website and Services",
                    "sub_content" => [
                            [
                                "title" => "Eligibility",
                                "content" => "You must be at least 18 years old and have the legal capacity to enter into contracts to use the website and services."
                            ],
                            [
                                "title" => "Prohibited Activities",
                                "content" => "You agree not to:
                                    * Violate any applicable laws or regulations.
                                    * Infringe the intellectual property rights of any third party.
                                    * Use the website or services for any illegal or unauthorized purpose.
                                    * Attempt to gain unauthorized access to the website or any of the services.
                                    * Transmit any viruses, worms, Trojan horses, or other harmful code.
                                    * Interfere with or disrupt the website or any of the services.
                                    * Use the website or services in a way that could damage, disable, or overburden the website or any of the services.
                                    * Collect or store personal information about other users without their consent.
                                    * Impersonate any person or entity."
                            ],
                            [
                                "title" => "Account Registration",
                                "content" => "You may need to create an account to access and use certain features of the website and services. You agree to provide accurate, complete, and current information when creating your account and to update your information as necessary."
                            ]
                        ]
                    ],
                    [
                        "name" => "job_search_services",
                        "title" => "Job Search Services",
                        "sub_content" => [
                            [
                                "title" => "Job Listings",
                                "content" => "The Company provides access to a database of job listings from various sources. The Company does not guarantee the accuracy or completeness of the job listings."
                            ],
                            [
                                "title" => "Job Applications",
                                "content" => "You may submit job applications through the website. The Company does not guarantee that your job applications will be received or considered by potential employers."
                            ],
                            [
                                "title" => "Fees",
                                "content" => "The Company may charge fees for certain job search services. The fees will be clearly displayed on the website."
                            ]
                        ]
                    ],
                    [
                        "name" => "visa_application_services",
                        "title" => "Visa Application Services",
                        "sub_content" => [
                            [
                                "title" => "Visa Information",
                                "content" => "The Company provides information about visa requirements and application processes for various countries. The Company does not guarantee the accuracy or completeness of the visa information."
                            ],
                            [
                                "title" => "Visa Assistance",
                                "content" => "The Company may offer visa application assistance services for a fee. The services may include:
                                    * Reviewing your visa application materials.
                                    * Providing guidance on completing the visa application form.
                                    * Assisting with document translation and legalization.
                                    * Communicating with immigration authorities on your behalf."
                            ],
                            [
                                "title" => "Visa Approval",
                                "content" => "The Company does not guarantee that your visa application will be approved. The decision to grant or deny a visa is solely at the discretion of the immigration authorities."

                            ],
                        ]
                    ],
                ];
            @endphp




            <div class="sec-title text-center" style="margin-top: 50px">
                <h2>Travel Plan Terms of Service</h2>
                <div class="text">Effective Date: January 1, 2023</div>
                <p style="font-weight: 700">
                    {!! $terms_and_conditions['0']['content'] !!}
                </p>
            </div>

                <!-- using the $terms array from above to display the terms -->






                    @foreach ($terms_and_conditions as $terms_and_condition)

                    <h1>
                        <x-main-pages.terms.term :terms_and_condition="$terms_and_condition">


                            @isset($terms_and_condition['content'])

                                @if(!$loop->first)

                                <p>
                                    {!! $terms_and_condition['content'] !!}
                                </p>
                                @endif

                            @endisset

                            @isset($terms_and_condition['sub_content'])
                                @foreach ($terms_and_condition['sub_content'] as $subcontent)

                                <h4 style="margin-bottom: 15px">{{ $subcontent['title'] }}</h4>
                                    <p>
                                        {!! $subcontent['content'] !!}
                                    </p>
                                @endforeach

                            @endisset


                        </x-main-pages.terms.term>


                    @endforeach




            </div>

        </section>
    @endsection

