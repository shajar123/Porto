<script src="{{asset('admin_assets/libs/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('admin_assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('admin_assets/libs/metismenu/metisMenu.min.js')}}"></script>
    <script src="{{asset('admin_assets/libs/simplebar/simplebar.min.js')}}"></script>
    <script src="{{asset('admin_assets/libs/node-waves/waves.min.js')}}"></script>

    <script src="{{asset('admin_assets/libs/morris.js/morris.min.js')}}"></script>
    <script src="{{asset('admin_assets/libs/raphael/raphael.min.js')}}"></script>


    <script src="{{asset('admin_assets/libs/peity/jquery.peity.min.js')}}"></script>

    <script src="{{asset('admin_assets/js/pages/dashboard.init.js')}}"></script>

    <script src="{{asset('admin_assets/js/app.js')}}"></script>
    <script src="{{asset('admin_assets/libs/growl/jquery.growl.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
         function showSelectedImage(selectInput, imgTagId) {
        console.log(imgTagId);
        var file = selectInput[0].files[0];
        console.log(file);
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#' + imgTagId).attr("src", e.target.result);
        }

        reader.readAsDataURL(file);

    }


    </script>
