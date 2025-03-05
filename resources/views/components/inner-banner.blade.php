@props(['pageTitle' => ''])

<div class="inner-banner mb-10">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="banner-content text-center">
                    <h1>{{ $pageTitle }}</h1>
                    <span></span>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a
                                    href="/">Home</a></li>
                            <li class="breadcrumb-item active"
                                aria-current="page">{{ $pageTitle }} </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
