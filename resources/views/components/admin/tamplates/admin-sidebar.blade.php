@php
    use App\Models\pivotMenu;

    $role = Auth::user()->role;
    $pivot = pivotMenu::with(['menu'])
        ->where('PIVOT_ROLE', $role->ROLE_ID)
        ->oldest()
        ->get();

    $sidebarGroup = '';

@endphp

<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <x-admin.tamplates.sidebar.link text="Beranda" navigate="/" icon="grid" />

        <x-admin.tamplates.sidebar.heading text='Profesi Kepamongprajaan' />

        {{-- Logic kanggo nampilkeun data menu dumasar kana role nu login --}}
        @for ($i = 0; $i < count($pivot); $i++)
            @if ('sidebar' == $pivot[$i]->menu[0]->MENU_POSITION && null == $pivot[$i]->menu[0]->MENU_PARENT)
                <x-admin.tamplates.sidebar.link :text="$pivot[$i]->menu[0]->MENU_NAME" :navigate="$pivot[$i]->menu[0]->MENU_URL" :icon="$pivot[$i]->menu[0]->MENU_ICON" />
            @endif
        @endfor

        {{-- Logic kanggo nampilkeun data sidebar group dumasar kana role nu login --}}
        @for ($i = 0; $i < count($pivot); $i++)
            @if ('sidebar-group' == $pivot[$i]->menu[0]->MENU_POSITION && null == $pivot[$i]->menu[0]->MENU_PARENT)
                <x-admin.tamplates.sidebar.list-item text="{{ $pivot[$i]->menu[0]->MENU_NAME }}"
                    icon="{{ $pivot[$i]->menu[0]->MENU_ICON }}" name="{{ $pivot[$i]->menu[0]->MENU_ID }}"
                    wire:key='{{ $pivot[$i]->menu[0]->MENU_ID }}'>

                    @for ($j = 0; $j < count($pivot); $j++)
                        @if (
                            'sidebar' == $pivot[$j]->menu[0]->MENU_POSITION && $pivot[$j]->menu[0]->MENU_PARENT == $pivot[$i]->menu[0]->MENU_NAME)
                            <x-admin.tamplates.sidebar.item-link text="{{ $pivot[$j]->menu[0]->MENU_NAME }}"
                                navigate="{{ $pivot[$j]->menu[0]->MENU_URL }}" icon="circle"
                                wire:key='{{ $pivot[$j]->menu[0]->MENU_ID }}' />
                        @endif
                    @endfor

                </x-admin.tamplates.sidebar.list-item>
            @endif
        @endfor


        {{-- Menu kanggo area Admin --}}
        @if ($role->ROLE_NAME == 'Super Admin' || $role->ROLE_NAME == 'Admin Pustaka')
            <x-admin.tamplates.sidebar.heading text='Admin Area' />

            {{-- Role Manajemen --}}
            <x-admin.tamplates.sidebar.link text="Manajemen Role" navigate="role-manajemen" icon="bi-bar-chart-steps" />

            {{-- Menu Manajemen --}}
            <x-admin.tamplates.sidebar.link text="Manajemen Menu" navigate="menu" icon="bi-menu-button-fill" />

            {{-- User Manajemen --}}
            <x-admin.tamplates.sidebar.link text="Manajemen Pengguna" navigate="user-manajemen"
                icon="bi-person-lines-fill" />

            {{-- Akses Manajemen --}}
            <x-admin.tamplates.sidebar.link text="Manajemen Akses" navigate="assign-manajemen"
                icon="bi-universal-access-circle" />

            {{-- Pengaturan Website --}}
            <x-admin.tamplates.sidebar.list-item text="Pengaturan website" name="pengaturan" wire:key='pengaturan'>

                <x-admin.tamplates.sidebar.item-link text="Pusat Pengaduan" navigate="pengaturan.pengaduan"
                    icon="circle" wire:key='1' />

                {{-- <x-admin.tamplates.sidebar.item-link text="-" navigate="-" icon="circle"
                    wire:key='-' /> --}}
            </x-admin.tamplates.sidebar.list-item>



            @if ($role->ROLE_NAME == 'Super Admin')
                {{-- Data Sampah --}}
                <x-admin.tamplates.sidebar.list-item text="Data Sampah" name="sampah" icon="bi-trash3-fill"
                    wire:key='sampah'>
                    <x-admin.tamplates.sidebar.item-link text="Data Pengguna" navigate="/" icon="circle"
                        wire:key='1' />
                    <x-admin.tamplates.sidebar.item-link text="Data Role" navigate="/" icon="circle"
                        wire:key='2' />
                    <x-admin.tamplates.sidebar.item-link text="Data Menu" navigate="/" icon="circle"
                        wire:key='3' />
                    <x-admin.tamplates.sidebar.item-link text="Data Asign" navigate="/" icon="circle"
                        wire:key='4' />
                    <x-admin.tamplates.sidebar.item-link text="Data Access" navigate="/" icon="circle"
                        wire:key='5' />
                </x-admin.tamplates.sidebar.list-item>
            @endif <!-- Tungtung tina menu super admin -->

        @endif <!-- Tungtung tina menu admin -->


    </ul>

</aside>
