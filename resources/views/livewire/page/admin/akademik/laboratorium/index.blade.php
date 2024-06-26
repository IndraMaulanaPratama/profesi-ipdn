{{-- Because she competes with no one, no one can compete with her. --}}
<div class="col-12">

    <div class="row g-4">

        <!-- Content Layanan -->
        <div class="col-lg-5 col-md-5 col-sm-12">
            <a href="{{ route('admin.akademik.laboratorium.layanan') }}" wire:navigate>
                <div class="card info-card sales-card">

                    <div class="card-body">
                        <h6 class="card-title">&nbsp;</h6>

                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-headset"></i>
                            </div>
                            <div class="ps-3">
                                <h6>Layanan Laboratorium</h6>
                            </div>
                        </div>
                    </div>

                </div>
            </a>
        </div>

        <!-- Content Pelatihan -->
        <div class="col-lg-5 col-md-5 col-sm-12">
            <a href="{{ route('admin.akademik.laboratorium.pelatihan') }}" wire:navigate>
                <div class="card info-card customers-card">

                    <div class="card-body">
                        <h6 class="card-title">&nbsp;</h6>

                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-file-earmark-post"></i>
                            </div>
                            <div class="ps-3">
                                <h6>Pelatihan Index</h6>
                            </div>
                        </div>
                    </div>

                </div>
            </a>
        </div>

    </div>
</div>
