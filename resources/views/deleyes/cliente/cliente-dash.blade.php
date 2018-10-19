@component('components.nav-link', [
    'icon' => 'fa fa-users',
    'title' => 'Crear Empresa',
    'link' => route('empresa')
])
@endcomponent

@component('components.nav-link', [
    'icon' => 'fa fa-folder-open',
    'link' => route('dataCredito'),
    'title' => 'Data Credito'
])
@endcomponent

@component('components.nav-link', [
    'icon' => 'fa fa-folder-open',
    'link' => route('listar'),
    'title' => 'Listar Servicios'
])
@endcomponent






