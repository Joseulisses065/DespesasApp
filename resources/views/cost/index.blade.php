<x-layout title="Dashboard">
    @isset($success)
    <div class="alert alert-success">
        {{ $success }}
    </div>
    @endisset
    <section class="text-center
    p-5">
        <h1 class="text-light fw-bold">COST CONTROLLER</h1>
    </section>

    <section class="container mb-3 ">
        <section class="values justify-content-around d-none d-lg-flex ">
            <div class="card text-bg-light mb-3 px-5" style="min-width: 22rem;">
                <div class="py-2 mb-0 d-flex justify-content-between">
                    <p class="fs-4">Entry</p><i class="bi bi-box-arrow-in-down fs-4"></i>
                </div>
                <div class="card-body pt-0">
                    <h2 class="">R$ {{$entry}}</h2>
                </div>
            </div>
            <div class="card text-bg-light mb-3 px-5" style="min-width: 22rem;">
                <div class="py-2 mb-0 d-flex justify-content-between">
                    <p class="fs-4">Exit</p><i class="bi bi-box-arrow-in-up fs-4"></i>
                </div>
                <div class="card-body pt-0">
                    <h2 class="">R$ {{$exit}}
                </div></h2>
            </div>
            </div>
            <div class="card text-bg-light mb-3 px-5" style="min-width: 22rem;">
                <div class="py-2 mb-0 d-flex justify-content-between fs-4">
                    <p class="fs-5">Balance</p><i class="bi bi-currency-dollar"></i>
                </div>
                <div class="card-body pt-0">
                    <h2 class="">R$ {{$balance}}</h2>
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
                                <h2 class="">R$ {{$entry}}</h2>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item px-2">
                        <div class="card text-bg-light mb-3 px-5" style="min-width: 22rem;">
                            <div class="py-2 mb-0 d-flex justify-content-between">
                                <p class="fs-4">Exit</p><i class="bi bi-box-arrow-in-down fs-4"></i></i>
                            </div>
                            <div class="card-body pt-0">
                                <h2 class="">R$ {{$exit}}</h2>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item px-2">
                        <div class="card text-bg-light mb-3 px-5" style="min-width: 22rem;">
                            <div class="py-2 mb-0 d-flex justify-content-between">
                                <p class="fs-4">Balance</p><i class="bi bi-box-arrow-in-down fs-4"></i></i>
                            </div>
                            <div class="card-body pt-0">
                                <h2 class="">R$ {{$balance}}</h2>
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
    <section class="container px-4">
        <form action="{{route('cost.store')}}" class=" bg-light p-2 d-flex  gap-4 justify-content-around mb-4 rounded"
            method="post">
            @csrf
            <div class="form-group">
                <input type="text" name="description" placeholder="Description" class="form-control">
            </div>
            <div class="form-group">
                <input type="number" name="value" placeholder="Value" class="form-control">
            </div>
            <div class="form-group pt-2">
                <fieldset class="d-flex justify-content-between  gap-2">
                    <div>
                        <input type="radio" id="Entry" name="type" value="Entry" checked />
                        <label for="Entry">Entry</label>
                    </div>

                    <div>
                        <input type="radio" id="Exit" name="type" value="Exit" />
                        <label for="Exit">Exit</label>
                    </div>

                </fieldset>

            </div>
            <div>
                <button class="btn btn-warning text-light bg-detail">Save</button>
            </div>
        </form>

    </section>

    <section class="container data px-4 rounded">
        <table class="table  rounded">
            <thead>
                <tr class="text-center">
                    <th scope="col">Description</th>
                    <th scope="col">Value</th>
                    <th scope="col">Tipe</th>
                    <th scope="col"></th>

                </tr>
            </thead>
            <tbody>
                @foreach($costs->all() as $cost)
                <tr class="align-baseline text-center">

                    <td>{{$cost->description}}</td>
                    <td>{{$cost->value}}</td>
                    @if($cost->type == 'exit')
                    <td><i class="bi bi-box-arrow-in-up text-danger"></td>
                    @else
                    <td><i class="bi bi-box-arrow-in-down text-success"></td>

                    @endif
                    <td>
                            <form action="{{route('cost.destroy',$cost->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class=" btn btn-danger"> <i class="bi bi-trash3-fill m-2 text-light"></i>
                                </button>

                            </form>
                    </td>



                </tr>
                @endforeach

            </tbody>
        </table>

    </section>
</x-layout>