<!DOCTYPE html>
<html>

@include('frontSite.layout.header')

<body class="hold-transition sidebar-mini layout-fixed">
{{-- <body class="hold-transition sidebar-mini layout-fixed" style="direction: rtl; text-align: right"> --}}
    <div class="wrapper">

        <!-- Navbar -->
        @include('frontSite.layout.navbar')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        {{-- @include('frontSite.layout.sidebar') --}}

		@include('frontsite.layout.slider')
		@include('frontsite.layout.services')

		@include('frontsite.layout.news_adds')
		@include('frontsite.layout.registration')
		@include('frontsite.layout.statistics')
		@include('frontsite.layout.testimonials')
		@include('frontsite.layout.clients')
		@include('frontsite.layout.FAQ')

        <!-- Content Wrapper. Contains page content -->
        <!-- <div class="content-wrapper"> -->
            <!-- Content Header (Page header) -->
            {{-- <!-- @include('frontSite.layout.content-header') --> --}}
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->


                    @includeWhen(false, 'frontSite.layout.small-boxes')

                    {{-- @include('frontSite.layout.small-boxes') --}}

                    <!-- /.row -->

                    @yield('content')

                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
@include('frontSite.layout.footer')
