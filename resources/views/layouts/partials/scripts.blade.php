<!-- Jquery Core Js --> 
<script src="{{ asset('aero-theme/assets/bundles/libscripts.bundle.js') }}"></script>
<script src="{{ asset('aero-theme/assets/bundles/vendorscripts.bundle.js') }}"></script>
<script src="{{ asset('aero-theme/assets/bundles/mainscripts.bundle.js') }}"></script>
@stack('js')
<script>
    /* Global submit fix for Aero theme */
    document.addEventListener('submit', function(e) {
        /* If the form is already handled by our custom JS bypass, we let it go */
    });
</script>
