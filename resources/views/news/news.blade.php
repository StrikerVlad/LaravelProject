<!DOCTYPE HTML>
<html>

@include('wrapper.head')

<body>
    <div class="page-wrap" style="height: 600px">

        <!-- Nav -->
        @include('wrapper.nav')

        <!-- Main -->
        <section id="main">

            <!-- Header -->
            <header id="header">
                <div>All <span>NEWS</span></div>
            </header>

            <!-- Section -->
            <section>
                <div class="inner">
                    <header>
                        <h1>NEws</h1>
                    </header>
                    <section class="column">
                        <div class="row">
                            <div class="col-md-10 m-5">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $news->title }}</h5>
                                        <h6 class="card-subtitle mb-2 text-muted">{{ $news->created_at->diffForHumans() }}</h6>
                                        <p class="card-text">{{ $news->description }}</p>
                                        <a href="" class="btn btn-primary float-right">More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </section>

        </section>
    </div>

    <!-- Scripts -->
    @include('wrapper.scripts')

</body>

</html>