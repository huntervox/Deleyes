@component('components.nav-link', [
    'icon' => 'fa fa-users',
    'title' => 'Usuarios',
    'link' => route('login')
])
@endcomponent

@component('components.nav-link', [
    'icon' => 'fa fa-folder-open',
    'link' => route('register'),
    'title' => 'Solicitudes'
])
@endcomponent
