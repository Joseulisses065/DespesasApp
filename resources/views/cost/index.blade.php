<x-layout title="Dashboard">
    <section class="text-center
    p-5">
        <h1 class="text-light fw-bold">COST CONTROLLER</h1>
    </section>

    <section class="container mb-3 ">
        <section class="values justify-content-around d-none d-lg-flex ">
            <div class="card text-bg-light mb-3 px-5" style="min-width: 22rem;">
                <div class="py-2 mb-0 d-flex justify-content-between">
                    <p class="fs-4">Entry</p><i class="bi bi-box-arrow-in-down fs-4"></i></i>
                </div>
                <div class="card-body pt-0">
                    <h2 class="">R$ 15.55</h2>
                </div>
            </div>
            <div class="card text-bg-light mb-3 px-5" style="min-width: 22rem;">
                <div class="py-2 mb-0 d-flex justify-content-between">
                    <p class="fs-4">Exit</p><i class="bi bi-box-arrow-in-up fs-4"></i></i>
                </div>
                <div class="card-body pt-0">
                    <h2 class="">R$ 15.55</h2>
                </div>
            </div>
            <div class="card text-bg-light mb-3 px-5" style="min-width: 22rem;">
                <div class="py-2 mb-0 d-flex justify-content-between fs-4">
                    <p class="fs-5">Saldo</p><i class="bi bi-currency-dollar"></i>
                </div>
                <div class="card-body pt-0">
                    <h2 class="">R$ 15.55</h2>
                </div>
            </div>
        </section>

        <section class="d-lg-none">
            <div id="carouselExampleIndicators" class="carousel slide px-5">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner px-2">
                    <div class="carousel-item active px-2">
                        <div class="card text-bg-light mb-3 px-5" style="min-width: 22rem;">
                            <div class="py-2 mb-0 d-flex justify-content-between">
                                <p class="fs-4">Entry</p><i class="bi bi-box-arrow-in-down fs-4"></i></i>
                            </div>
                            <div class="card-body pt-0">
                                <h2 class="">R$ 15.55</h2>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item px-2">
                        <div class="card text-bg-light mb-3 px-5" style="min-width: 22rem;">
                            <div class="py-2 mb-0 d-flex justify-content-between">
                                <p class="fs-4">Entry</p><i class="bi bi-box-arrow-in-down fs-4"></i></i>
                            </div>
                            <div class="card-body pt-0">
                                <h2 class="">R$ 15.55</h2>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item px-2">
                        <div class="card text-bg-light mb-3 px-5" style="min-width: 22rem;">
                            <div class="py-2 mb-0 d-flex justify-content-between">
                                <p class="fs-4">Entry</p><i class="bi bi-box-arrow-in-down fs-4"></i></i>
                            </div>
                            <div class="card-body pt-0">
                                <h2 class="">R$ 15.55</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>
    </section>
    <section class="container px-5">
        <form action="" class=" bg-light p-2 d-flex  gap-4 justify-content-around mb-4 rounded">
            <div class="form-group">
                <input type="text" name="description" placeholder="Description" class="form-control">
            </div>
            <div class="form-group">
                <input type="number" name="Value" placeholder="Value" class="form-control">
            </div>
            <div class="form-group d-flex justify-content-between ali">
                <div class="form-check m-1">
                    <input class="form-check-input p-1" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Exit </label>
                </div>
                <div class="form-check m-1">
                    <input class="form-check-input p-1" type="radio" name="flexRadioDefault" id="flexRadioDefault2"
                        checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                        Entry </label>
                </div>
            </div>
            <div>
                <button class="btn btn-warning text-light bg-detail">Save</button>
            </div>
        </form>

    </section>

    <section class="container data px-5 rounded">
        <table class="table  rounded">
            <thead>
                <tr>
                    <th scope="col">Description</th>
                    <th scope="col">Value</th>
                    <th scope="col">Tipe</th>
                    <th scope="col"></th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Mark</td>
                    <td>90,00</td>
                    <td><i class="bi bi-box-arrow-in-down text-danger"></td>
                    <td>
                        <div>
                            <i class="bi bi-trash3-fill m-2 text-danger"></i>
                        </div>
                    </td>



                </tr>
                <tr>
                    <td>Jacob</td>
                    <td>150,00</td>
                    <td><i class="bi bi-box-arrow-in-up text-success"></td>
                    <td>
                        <div>
                            <i class="bi bi-trash3-fill m-2 text-danger"></i>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Larry</td>
                    <td>120,00</td>

                    <td><i class="bi bi-box-arrow-in-up text-success"></td>
                    <td>
                        <div>
                            <i class="bi bi-trash3-fill m-2 text-danger"></i>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>

    </section>
</x-layout>