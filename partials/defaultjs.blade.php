{{HTML::script(dirTemaToko()."mallaneka/assets/js/lib/jquery.js")}}
{{HTML::script(dirTemaToko()."mallaneka/assets/js/lib/bootstrap.js")}}
{{HTML::script(dirTemaToko()."mallaneka/assets/js/lib/icheck.js")}}
{{HTML::script(dirTemaToko()."mallaneka/assets/js/lib/ionrangeslider.js")}}
{{HTML::script(dirTemaToko()."mallaneka/assets/js/lib/jqzoom.js")}}
{{HTML::script(dirTemaToko()."mallaneka/assets/js/lib/card-payment.js")}}
{{HTML::script(dirTemaToko()."mallaneka/assets/js/lib/owl-carousel.js")}}
{{HTML::script(dirTemaToko()."mallaneka/assets/js/lib/magnific.js")}}
{{HTML::script(dirTemaToko()."mallaneka/assets/js/lib/custom.js")}}


<!-- Default js -->
<!--<script type="text/javascript">
var yotpo_app_key = "r06tTGaouj3TnnPYAlJRF9SPuMKKl7NOQztPgxCM";
(function(){function e(){var e=document.createElement("script");e.type="text/javascript",e.async=!0,e.src="//staticwww.yotpo.com/js/yQuery.js";var t=document.getElementsByTagName("script")[0];t.parentNode.insertBefore(e,t)}window.attachEvent?window.attachEvent("onload",e):window.addEventListener("load",e,!1)})();
</script>-->

<!-- <script data-main="http://{{Request::server('SERVER_NAME').'/'.dirTemaToko()}}mallaneka/assets/js/app-main" src="/js/require.js"></script>  -->
@if ( ! is_login())
<!--<script type="text/javascript">
if(document.location.pathname == '/') {
    $(document).ready(function () {
        // retrieved this line of code from http://dimsemenov.com/plugins/magnific-popup/documentation.html#api
        $.magnificPopup.open({
            items: {
                src: '#nav-account-dialog'
            },
            type: 'inline'
    
          // You may add options here, they're exactly the same as for $.fn.magnificPopup call
          // Note that some settings that rely on click event (like disableOn or midClick) will not work here
        }, 0);
    });
}
</script>-->
@endif