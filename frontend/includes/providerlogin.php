<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>provider login</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body>
    <div class="modal fade" tabindex=-1 role="dialog" id="provider_login">
        <div class="modal-dialog modal-dialog-scrollable modal-md" role="document">
            <div class="modal-content" style="background-image: url('img/clog.jpg'); background-size: cover;">
                <div class="modal-header">
                    <h5 class="modal-title">Registration</h5>
                    <button type="button" class="close" data-dismiss="modal" area-label="close">
                        <span area-hidden="true">&times;</span>
                    </button>
                </div> <!--header-->
                <div class="modal-body">

                    <!-- dropdown menu -->
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="form3Example2">Provider Type</label>
                            <select onchange="navigateToPage(this)" class="form-control">
                                <option value="" selected disabled>Select</option>
                                <option value="includes/guidelogin.php">Tourist</option>
                                <option value="#">Vehicle</option>
                                <option value="#">Restaurant</option>
                            </select>


                        </div>
                    </div>
                </div><!--body-->
            </div>
        </div>
    </div>

    <script>
        function navigateToPage(selectElement) {
            var selectedPage = selectElement.value;
            if (selectedPage) {
                window.location.href = selectedPage;
            }
        }
    </script>


</body>
</html>