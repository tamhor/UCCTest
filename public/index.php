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
    <div class="page" id="app">
        <div class="container">
            <div class="media row">
                <div class="col-md-4 order-md-12">
                    <div class="media-body">
                        <div class="card mx-3 mt-5">
                            <div class="card-body">
                                <h4 class="card-title">Insert Vehicle</h4>
                                <div class="card-text">
                                    <form id="form" method="post">
                                        <input type="hidden" id="id">
                                        <div class="field-wrapper">
                                            <input type="text" id="name" class="form-control" :class="{ 'is-invalid': isInvalid }" name="name" required>
                                            <div class="field-placeholder">
                                                <span>Name</span>
                                            </div>
                                        </div>
                                        <div class="field-wrapper">
                                            <div class="form-inline">
                                                <input type="number" id="numb" class="form-control" style="width: 70%;" :class="{ 'is-invalid': isInvalid }" required>
                                                <div class="field-placeholder">
                                                    <span>Engine Displacement</span>
                                                </div>
                                                <select class="form-control" name="unit" id="unit">
                                                    <option selected value="none">Unit</option>
                                                    <option value="l">L</option>
                                                    <option value="cc">CC</option>
                                                    <option value="ic">IC</option>
                                                </select>
                                            </div>
                                        </div>
                                        <input class="form-control" type="hidden" id="calculate" name="engine_displacement" readonly>
                                        <div class="field-wrapper">
                                            <input type="number" class="form-control" :class="{ 'is-invalid': isInvalid }" name="engine_power" id="engine_power" required>
                                            <div class="field-placeholder">
                                                <span>Engine Power</span>
                                            </div>
                                        </div>
                                        <div class="field-wrapper">
                                            <input type="text" id="price" class="form-control" :class="{ 'is-invalid': isInvalid }" name="price" required>
                                            <div class="field-placeholder">
                                                <span>Price</span>
                                            </div>
                                        </div>
                                        <div class="field-wrapper">
                                            <input type="text" id="location" class="form-control" :class="{ 'is-invalid': isInvalid }" name="location" required>
                                            <div class="field-placeholder">
                                                <span>Location</span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <span>Category</span>
                                            <select class="form-control" :class="{ 'is-invalid': isInvalid }" id="category_id" required>
                                                <option v-for="cat in categories" :value="cat.id">{{ cat.name }}</option>
                                            </select>
                                        </div>
                                        <div class="form-button">
                                            <button type="submit" id="submit" class="btn btn-primary">Add</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 order-md-1">
                    <div class="card-columns mt-5" style="overflow-x: scroll; float-left; overflow-x:auto; height:80vh;">
                        <div class="card" v-for="res in results">
                            <div class="card-header">
                                <h5 class="card-title">
                                    {{res.name}}
                                </h5>
                                <p class="card-text">
                                    <small class="text-muted">
                                        {{res.category}}
                                    </small>
                                </p>
                            </div>
                            <div class="card-body">
                                <p class="card-text">
                                    Engine Displacement : {{res.engine_displacement}} CC
                                </p>
                                <p class="card-text">
                                    Engine Power : {{res.engine_power}} HP
                                </p>
                                <p id="rupiah" data-a-sign="Rp. " data-a-dec="," data-a-sep="." class="card-text">
                                    {{res.price}}
                                </p>
                            </div>
                            <div class="card-footer">
                                <p class="card-text">
                                    <small class="text-muted">
                                        {{res.location}}
                                    </small>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
    <script src="js/vue.global.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="js/app.js"></script>
</body>

</html>