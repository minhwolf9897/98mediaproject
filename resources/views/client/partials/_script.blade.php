    <!-- Scripts -->
    <script src="{{ asset('mdb/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('mdb/js/popper.min.js') }}"></script>
    <script src="{{ asset('mdb/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('mdb/js/mdb.min.js') }}"></script>

    <script src="{{ asset('js/optional.js') }}"></script>
    
    @yield('scripts')
    <script src="{{ asset('mdb/js/modules/toastr.js') }}"></script>
    @include('client.partials._message')