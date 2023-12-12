</div>
<footer class="footer mt-auto">
    <div class="copyright bg-white">
        <p>
            &copy; <span id="copy-year"></span> Copyright Mono Dashboard Bootstrap Template by <a class="text-primary"
                href="http://www.iamabdus.com/" target="_blank">Regita</a>.
        </p>
    </div>
    <script>
        var d = new Date();
        var year = d.getFullYear();
        document.getElementById("copy-year").innerHTML = year;
    </script>

</footer>
</div>
<!-- Footer -->

<script src="{{ asset('adminn/theme/plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('adminn/theme/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('adminn/theme/plugins/simplebar/simplebar.min.js') }}"></script>
<script src="https://unpkg.com/hotkeys-js/dist/hotkeys.min.js"></script>



<script src="{{ asset('adminn/theme/plugins/prism/prism.js') }}"></script>



<script src="{{ asset('adminn/theme/plugins/select2/js/select2.min.js') }}"></script>



<script src="{{ asset('adminn/theme/plugins/jquery-mask-input/jquery.mask.min.js') }}"></script>


<script src="{{ asset('adminn/theme/js/mono.js') }}"></script>
<script src="{{ asset('adminn/theme/js/chart.js') }}"></script>
<script src="{{ asset('adminn/theme/js/map.js') }}"></script>
<script src="{{ asset('adminn/theme/js/custom.js') }}"></script>
@stack('script')
    

</body>

</html>
