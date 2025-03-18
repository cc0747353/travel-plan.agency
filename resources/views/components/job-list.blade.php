@props(['jobs', 'countries', 'selectedCountryId'])

<!-- Listing Section -->
<section class="ls-section">
    <div class="auto-container">
        <div class="filters-backdrop"></div>

        <div class="row">
            <!-- Content Column -->
            <div class="content-column col-lg-12 col-md-12 col-sm-12">
                <div class="ls-outer">
                    <button type="button" class="theme-btn btn-style-two toggle-filters">Show Filters</button>

                    <!-- ls Switcher -->
                    <div class="ls-switcher">

                        <div class="sort-by">

                            <form id="location-filter-form" action="{{ route('job-listing') }}" method="GET">
                                <label for="country_id">Filter by Country:</label>
                                <select name="country_id" id="country_id" onchange="this.form.submit()">
                                    <option value="">All Countries</option>
                                    @foreach ($countries as $country)
                                        <option value="{{ $country->id }}" {{ $country->id == $selectedCountryId ? 'selected' : '' }}>
                                            {{ $country->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </form>


                            {{-- <select class="chosen-select">
                                <option>New Jobs</option>
                                <option>Freelance</option>
                                <option>Full Time</option>
                                <option>Internship</option>
                                <option>Part Time</option>
                                <option>Temporary</option>
                            </select>

                            <select class="chosen-select">
                                <option>Show 10</option>
                                <option>Show 20</option>
                                <option>Show 30</option>
                                <option>Show 40</option>
                                <option>Show 50</option>
                                <option>Show 60</option>
                            </select> --}}
                        </div>
                    </div>

                    {{ $slot }}

                </div>
            </div>
        </div>
    </div>
</section>
<!--End Listing Page Section -->
