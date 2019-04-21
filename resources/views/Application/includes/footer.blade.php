<!--Footer-->
<div class="row" style="background-color: rgb(68,68,68); color: white; margin-top: 60px">


    <div class="container text-center text-md-left">

        <hr style="background-color: white; margin-top: 55px">

        <div class="row justify-content-center text-center" style="color: white">

            <div class="col-auto" >
                <a class="text-white" target="_blank" href="http://www.saltandlime.com.au/privacy-credit-reporting-policy">Privacy and Credit Reporting Policy</a>
            </div>
            |
            <div class="col-auto">
                <a class="text-white" target="_blank" href="http://www.saltandlime.com.au/website-policy">Website Terms and Conditions</a>
            </div>
            |
            <div class="col-auto" >
                <a class="text-white" target="_blank" href="http://www.saltandlime.com.au/credit-guide">Credit Guide</a>
            </div>

        </div>

        <div class="row py-3 d-flex align-items-center">




            <div class="col-12">

                <!--Copyright-->
                <p class="text-center  grey-text">© 2019 saltandlime.com.au | ACN 619 815 833 | Australian Credit Licence Number 501633</p>
                <!--/.Copyright-->

            </div>

        </div>

    </div>

</div>
<!--/.Footer-->

<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>
