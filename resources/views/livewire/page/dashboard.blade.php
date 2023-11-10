<div class="row">
    <div class="col-lg-8 col-md-6 col-sm-12">
        <div class="row">

            {{-- Card 1 --}}
            <x-admin.components.card.card size=8 type='sales' title='Dashboard 1'>

                {{-- Dropdown Title --}}
                <x-admin.components.card.dropdown-title title="pilihan">
                    <x-admin.components.card.dropdown-item text='Option 1' />
                </x-admin.components.card.dropdown-title>

                {{-- Card Body --}}
                <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-percent"></i>
                    </div>

                    <div class="ps-3">
                        <h6>145</h6>
                        <span class="text-success small pt-1 fw-bold">12%</span>
                        <span class="text-muted small pt-2 ps-1">increase</span>
                    </div>
                </div> <!-- End Of Card Body -->

            </x-admin.components.card.card>

            {{-- Card 2 --}}
            <x-admin.components.card.card size=4 type='sales' title='Dashboard 3'>

                {{-- Dropdown Title --}}
                <x-admin.components.card.dropdown-title title="pilihan">
                    <x-admin.components.card.dropdown-item text='Option 1' />
                </x-admin.components.card.dropdown-title>

                {{-- Card Body --}}
                <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-percent"></i>
                    </div>

                    <div class="ps-3">
                        <h6>145</h6>
                        <span class="text-success small pt-1 fw-bold">12%</span>
                        <span class="text-muted small pt-2 ps-1">increase</span>
                    </div>
                </div> <!-- End Of Card Body -->

            </x-admin.components.card.card>

            {{-- Card 3 --}}
            <x-admin.components.card.card size=12 type='sales' title='Dashboard 3'>

                {{-- Dropdown Title --}}
                <x-admin.components.card.dropdown-title title="pilihan">
                    <x-admin.components.card.dropdown-item text='Option 1' />
                </x-admin.components.card.dropdown-title>

                {{-- Card Body --}}
                <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-percent"></i>
                    </div>

                    <div class="ps-3">
                        <h6>145</h6>
                        <span class="text-success small pt-1 fw-bold">12%</span>
                        <span class="text-muted small pt-2 ps-1">increase</span>
                    </div>
                </div> <!-- End Of Card Body -->

            </x-admin.components.card.card>

        </div>

    </div>


    <div class="col-lg-4 col-md-6 col-sm-12">
        <x-admin.components.card.card size=12 type='sales' title='Dashboard 2'>

            {{-- Dropdown Title --}}
            <x-admin.components.card.dropdown-title title="pilihan">
                <x-admin.components.card.dropdown-item text='Option 1' />
            </x-admin.components.card.dropdown-title>

            {{-- Card Body --}}
            <div class="card-body">
                <h5 class="card-title">Recent Activity <span>| Today</span></h5>

                <div class="activity">

                    <div class="activity-item d-flex">
                        <div class="activite-label">32 min</div>
                        <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                        <div class="activity-content">
                            Quia quae rerum <a href="#" class="fw-bold text-dark">explicabo officiis</a> beatae
                        </div>
                    </div><!-- End activity item-->

                    <div class="activity-item d-flex">
                        <div class="activite-label">56 min</div>
                        <i class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
                        <div class="activity-content">
                            Voluptatem blanditiis blanditiis eveniet
                        </div>
                    </div><!-- End activity item-->

                    <div class="activity-item d-flex">
                        <div class="activite-label">2 hrs</div>
                        <i class='bi bi-circle-fill activity-badge text-primary align-self-start'></i>
                        <div class="activity-content">
                            Voluptates corrupti molestias voluptatem
                        </div>
                    </div><!-- End activity item-->

                    <div class="activity-item d-flex">
                        <div class="activite-label">1 day</div>
                        <i class='bi bi-circle-fill activity-badge text-info align-self-start'></i>
                        <div class="activity-content">
                            Tempore autem saepe <a href="#" class="fw-bold text-dark">occaecati voluptatem</a>
                            tempore
                        </div>
                    </div><!-- End activity item-->

                    <div class="activity-item d-flex">
                        <div class="activite-label">2 days</div>
                        <i class='bi bi-circle-fill activity-badge text-warning align-self-start'></i>
                        <div class="activity-content">
                            Est sit eum reiciendis exercitationem
                        </div>
                    </div><!-- End activity item-->

                    <div class="activity-item d-flex">
                        <div class="activite-label">4 weeks</div>
                        <i class='bi bi-circle-fill activity-badge text-muted align-self-start'></i>
                        <div class="activity-content">
                            Dicta dolorem harum nulla eius. Ut quidem quidem sit quas
                        </div>
                    </div><!-- End activity item-->

                </div>

            </div> <!-- End Of Card Body -->

        </x-admin.components.card.card>

    </div>
</div>
