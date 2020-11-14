<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehicles || Undercurrent Capital Test</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="page">
        <div class="container py-5">
            <div class="media row">
                <div class="col-md-4 order-md-12">
                    <div class="media-body">
                        <div class="card mx-3 mt-5">
                            <div class="card-body">
                                <h4 class="card-title">Insert Vehicle</h4>
                                <div class="card-text">
                                    <form id="form" action="" method="post">
                                        <div class="field-wrapper">
                                            <input ref="input" type="email" name="email" id="email">
                                            <div class="field-placeholder"><span>Enter your email</span></div>
                                        </div>
                                        <div class="field-wrapper">
                                            <input ref="input" type="password" name="password" id="password">
                                            <div class="field-placeholder"><span>Enter your password</span></div>
                                        </div>
                                        <div class="form-button">
                                            <button type="button" class="btn btn-primary">Login</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 order-md-1">
                    <div class="mt-5">
                        <ul id="list">
                            <li v-for="res in results">
                                {{ res.name }}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <script>
            $(".field-wrapper .field-placeholder").on("click", function() {
                $(this).closest(".field-wrapper").find("input").focus();
            });
            $(".field-wrapper input").on("keyup", function() {
                var value = $.trim($(this).val());
                if (value) {
                    $(this).closest(".field-wrapper").addClass("hasValue");
                } else {
                    $(this).closest(".field-wrapper").removeClass("hasValue");
                };
            });
        </script>
        <script src="js/vue.global.js"></script>
        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
        <script src="js/app.js"></script>
</body>

</html>