<!DOCTYPE HTML>
<html>

@include('wrapper.head')

<body>
    <div class="page-wrap">

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
                            @foreach($news as $item)
                            <div class="col-md-4 m-5">
                                <div class="card" style="width: 26rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $item->title }}</h5>
                                        <h6 class="card-subtitle mb-2 text-muted">{{ $item->created_at->diffForHumans() }}</h6>
                                        <p class="card-text">{{ $item->description }}</p>
                                        <a href="{{ route('shownews', $item->id) }}" class="btn btn-primary float-right">More</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
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