<!DOCTYPE html>
<html lang="en">
    @php
    $pagesmeta = [
        [
            'url' => route('home'),
            'title' => 'Travel Plan: Your Gateway to Opportunity and Mobility',
            'description' => 'Find your dream job abroad, navigate Visa and Residency applications, and plan your relocation with Travel Plan\'s comprehensive suite of services.',
            'keywords' => 'job board, overseas jobs, Visa application, Residency permit, relocation services, flights, hotels, apartments, car rentals, Travel Plan',
            'ogImage' => 'https://travel-plan.agency/images/index-13/header/test.png',
        ],

        [
            'url' => route('about-us'),
            'title' => 'Travel Plan: Who We Are and What We Do.',
            'description' => 'Discover Travel Plan\'s mission, values, and team. Learn how we help individuals and businesses thrive in the international job market.',
            'keywords' => 'Travel Plan, mission statement, values, team, global mobility, job seekers, employers, relocation assistance',
            'ogImage' => 'https://travel-plan.agency/images/index-13/header/test.png',
        ],

        [
            'url' => route('contact-us'),
            'title' => 'Get in Touch with Travel Plan: We\'re Here to Help.',
            'description' => 'Have questions or need assistance? Reach out to our friendly team for personalized support.',
            'keywords' => 'contact Travel Plan, customer support, inquiries, relocation advice, job search help',
            'ogImage' => 'https://travel-plan.agency/images/index-13/header/test.png',
        ],

        [
            'url' => route('blog'),
            'title' => 'Travel Plan Blog: Insights for Your Global Career.',
            'description' => 'Dive into expert tips, industry trends, and inspiring stories to navigate the international job market and relocation process successfully.',
            'keywords' => 'Travel Plan blog, career advice, relocation tips, international job market, expat life',
            'ogImage' => 'https://travel-plan.agency/images/index-13/header/test.png',
        ],

        [
            'url' => route('job-listing'),
            'title' => 'Travel Plan: Find Your Dream Job Abroad.',
            'description' => 'Browse thousands of exciting job opportunities worldwide. Start your journey to a fulfilling career abroad today!',
            'keywords' => 'international jobs, job search, overseas careers, Travel Plan job board, career opportunities',
            'ogImage' => 'https://travel-plan.agency/images/index-13/header/test.png',
        ],

        [
            'url' => route('services'),
            'title' => 'Travel Plan: Our Services: Your Global Mobility Partner.',
            'description' => 'Simplify your relocation with our comprehensive services, including Visa applications, Residency permits, flights, accommodation, and more.',
            'keywords' => 'Visa application, Residency permit, relocation services, flights, hotels, apartments, car rentals, Travel Plan services',
            'ogImage' => 'https://travel-plan.agency/images/index-13/header/test.png',
        ],

        [
            'url' => route('terms'),
            'title' => 'Travel Plan: Terms of Service: Read Before Using Our Platform.',
            'description' => 'Ensure a smooth and compliant experience by understanding our terms of service.',
            'keywords' => 'terms of service, user agreement, legal terms, Travel Plan terms, privacy policy',
            'ogImage' => 'https://travel-plan.agency/images/index-13/header/test.png',
        ],

        [
            'url' => route('privacy-policy'),
            'title' => 'Your Data is Secure: Travel Plan Privacy Policy.',
            'description' => 'Learn how Travel Plan protects your personal information and respects your privacy.',
            'keywords' => 'privacy policy, data protection, privacy, user data, Travel Plan privacy',
            'ogImage' => 'https://travel-plan.agency/images/index-13/header/test.png',
        ]

    ];

    // $page is the array above where the url matches the current url
    $page = $pagesmeta[array_search(url()->current(), array_column($pagesmeta, 'url'))];

    // if $page is empty, set it to the first page
    if (empty($page)) {
        $page = $pagesmeta[0];
    }

@endphp



<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $page['title'] }}</title>
    <meta name="description" content="{{ $page['description'] }}">
    <meta name="keywords" content="{{ $page['keywords'] }}">

    <meta property="og:title" content="{{ $page['title'] }}">
    <meta property="og:description" content="{{ $page['description'] }}">
    <meta property="og:image" content="{{ $page['ogImage'] }}">
    <meta property="og:url" content="{{ $page['url'] }}">
    <meta property="og:type" content="website">

    <!-- Stylesheets -->
    <link
    href="/css/bootstrap.css"
    rel="stylesheet"
    >
    <link
        href="/css/style.css"
        rel="stylesheet"
    >
    <link
        href="/css/responsive.css"
        rel="stylesheet"
    >

    <link
        rel="shortcut icon"
        href="/images/favicon.png"
        type="image/x-icon"
    >
    <link
        rel="icon"
        href="/images/favicon.png"
        type="image/x-icon"
    >

    <!-- Responsive -->
    <meta
        http-equiv="X-UA-Compatible"
        content="IE=edge"
    >
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"
    >

    <style>
        .b-bottom {
            border-bottom: 1px solid #313232;
        }
        .mtp-40 {
            margin-top: 40px;
        }

        .mtp-15 {
            margin-top: 15px;
        }

        .pending {
            background-color: #3b3f3f;
            color: white;
            padding: 10px;
            border-radius: 5px;
        }

        .accepted {
            background-color: #2b8a3e;
            color: white;
            padding: 10px;
            border-radius: 5px;
        }

        .rejected {
            background-color: #ff0000;
            color: white;
            padding: 10px;
            border-radius: 5px;
        }
    </style>

    <!-- Meta Pixel Code -->
<script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '627062416704036');
    fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=627062416704036&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Meta Pixel Code -->
</head>

<body>

  <div class="page-wrapper dashboard ">

    <!-- Preloader -->
    <div class="preloader"></div>

    <!-- Header Span -->
    <span class="header-span"></span>

    <!-- Main Header-->
    <header class="main-header header-shaddow">
      <div class="container-fluid">
        <!-- Main box -->
        <div class="main-box">
          <!--Nav Outer -->
          <div class="nav-outer">
            <div class="logo-box">
                <x-main-pages.logo />
            </div>

            @include('layouts.main-menu')
            <!-- Main Menu End-->
          </div>

          <div class="outer-box">

            <button class="menu-btn">
              <span class="count">1</span>
              <span class="icon la la-heart-o"></span>
            </button>

            <button class="menu-btn">
              <span class="icon la la-bell"></span>
            </button>

            <!-- Dashboard Option -->
            <div class="dropdown dashboard-option">
              <a class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="false">
                <img src="/images/resource/company-6.png" alt="avatar" class="thumb">
                <span class="name">My Account</span>
              </a>

              @include('layouts.user-dropdown')

            </div>
          </div>
        </div>
      </div>

      <!-- Mobile Header -->
      <div class="mobile-header">
        <x-main-pages.logo />
        <!--Nav Box-->
        <div class="nav-outer clearfix">

          <div class="outer-box">
            <!-- Login/Register -->
            <div class="login-box">
              <a href="login-popup.html" class="call-modal"><span class="icon-user"></span></a>
            </div>

            <button id="toggle-user-sidebar"><img src="/images/resource/company-6.png" alt="avatar" class="thumb"></button>
            <a href="#nav-mobile" class="mobile-nav-toggler navbar-trigger"><span class="flaticon-menu-1"></span></a>
          </div>
        </div>

      </div>

      <!-- Mobile Nav -->
      <div id="nav-mobile"></div>
    </header>
    <!--End Main Header -->

    <!-- Sidebar Backdrop -->
    <div class="sidebar-backdrop"></div>

    <!-- User Sidebar -->
    <div class="user-sidebar">

      <div class="sidebar-inner">
        @include('layouts.sidebar')
      </div>
    </div>
    <!-- End User Sidebar -->

    <!-- Dashboard -->
    <section class="user-dashboard">

    @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block mb-10">
                <strong>{{ $message }}</strong>
            </div>
    @endif


      <div class="dashboard-outer">
        @yield('upper-title')

        @yield('content')


    </div>
</section>
<!-- End Dashboard -->

<!-- Copyright -->
<div class="copyright-text">
  <p>© @php
    echo date('Y');
  @endphp Travel Plan. All Right Reserved.</p>
</div>

</div><!-- End Page Wrapper -->



<script src="/js/jquery.js"></script>
<script src="/js/popper.min.js"></script>
<script src="/js/chosen.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/jquery-ui.min.js"></script>
<script src="/js/jquery.fancybox.js"></script>
<script src="/js/jquery.modal.min.js"></script>
<script src="/js/mmenu.polyfills.js"></script>
<script src="/js/mmenu.js"></script>
<script src="/js/appear.js"></script>
<script src="/js/ScrollMagic.min.js"></script>
<script src="/js/rellax.min.js"></script>
<script src="/js/owl.js"></script>
<script src="/js/wow.js"></script>
<script src="/js/script.js"></script>

<!-- Chart.js // documentation: http://www.chartjs.org/docs/latest/ -->
<script src="/js/chart.min.js"></script>
<script>
Chart.defaults.global.defaultFontFamily = "Sofia Pro";
Chart.defaults.global.defaultFontColor = '#888';
Chart.defaults.global.defaultFontSize = '14';

var ctx = document.getElementById('chart').getContext('2d');

var chart = new Chart(ctx, {

  type: 'line',
  // The data for our dataset
  data: {
    labels: ["January", "February", "March", "April", "May", "June"],
    // Information about the dataset
    datasets: [{
      label: "Views",
      backgroundColor: 'transparent',
      borderColor: '#1967D2',
      borderWidth: "1",
      data: [196, 132, 215, 362, 210, 252],
      pointRadius: 3,
      pointHoverRadius: 3,
      pointHitRadius: 10,
      pointBackgroundColor: "#1967D2",
      pointHoverBackgroundColor: "#1967D2",
      pointBorderWidth: "2",
    }]
  },

  // Configuration options
  options: {

    layout: {
      padding: 10,
    },

    legend: {
      display: false
    },
    title: {
      display: false
    },

    scales: {
      yAxes: [{
        scaleLabel: {
          display: false
        },
        gridLines: {
          borderDash: [6, 10],
          color: "#d8d8d8",
          lineWidth: 1,
        },
      }],
      xAxes: [{
        scaleLabel: {
          display: false
        },
        gridLines: {
          display: false
        },
      }],
    },

    tooltips: {
      backgroundColor: '#333',
      titleFontSize: 13,
      titleFontColor: '#fff',
      bodyFontColor: '#fff',
      bodyFontSize: 13,
      displayColors: false,
      xPadding: 10,
      yPadding: 10,
      intersect: false
    }
  },
});
</script>

<!-- Smartsupp Live Chat script -->
<script type="text/javascript">
    var _smartsupp = _smartsupp || {};
    _smartsupp.key = 'a1f4e73cf0ce00bccb85d7e097671e809160a3e9';
    window.smartsupp||(function(d) {
    var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
    s=d.getElementsByTagName('script')[0];c=d.createElement('script');
    c.type='text/javascript';c.charset='utf-8';c.async=true;
    c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
    })(document);
</script>
<noscript> Powered by <a href=“https://www.smartsupp.com” target=“_blank”>Smartsupp</a></noscript>

</body>


<!-- Mirrored from creativelayers.net/themes/superio/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Dec 2023 07:35:27 GMT -->
</html>
