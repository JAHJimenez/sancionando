
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-xl-4 col-sm-4 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Denuncias de Hoy</p>
                                    <h5 class="font-weight-bolder mb-0">
                                        3,000

                                    </h5>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                    <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-sm-4 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Denuncias resueltas</p>
                                    <h5 class="font-weight-bolder mb-0">
                                        233,400

                                    </h5>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                    <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-sm-4 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Dinero Recaudado</p>
                                    <h5 class="font-weight-bolder mb-0">
                                        $3,645,462
                                    </h5>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                    <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>


        <div class="col-lg-12 col-md-12 mb-md-0 mb-4 mt-3">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="p-4 bg-secondary mb-3">
                        <form action="create" method="POST" enctype="multipart/form-data">
                            <div class="row">

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input name="date" class="form-control form-control-alternative" type="datetime-local" value="2022-01-01T00:00:00" id="example-datetime-local-input">

                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea type="text" name="description" class="form-control form-control-alternative" id="exampleFormControlInput1" placeholder="Descripcion de los echos"  cols="30" rows="10"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label style="color: white;" for="exampleFormControlSelect2">Cargar Evidencia</label>
                                        <input type="file" name="file" class="form-control form-control-alternative" id="exampleFormControlInput1">
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-primary"  type="submit">Enviar Denuncia</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>

    </div>