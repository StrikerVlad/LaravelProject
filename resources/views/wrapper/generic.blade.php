<!DOCTYPE HTML>
<html>

@include('wrapper.head')

<body>
    <div class="page-wrap" style="height: 640px">

        <!-- Nav -->
        @include('wrapper.nav')

        <!-- Main -->
        <section id="main">

            <!-- Header -->
            <header id="header">
                <div>ITStep <span>StudentS</span></div>
            </header>

            <!-- Section -->
            <section>
                <div class="inner">
                    <header>
                        <h1>Users</h1>
                    </header>
                    <section class="column">
                        <div class="column">
                            <table>
                                <thead>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                    <th>Phone</th>
                                    <th>Education</th>
                                </thead>
                                <tbody>
                                    @foreach($users as $user)
                                    <tr>
                                        <td><img src="{{ asset('/storage/' . $user->img) }}" width="40px" style="border-radius: 50%; margin-left: 10px"> {{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->profile->address }}</td>
                                        <td>{{ $user->profile->phone_number }}</td>
                                        <td>{{ $user->profile->education }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
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