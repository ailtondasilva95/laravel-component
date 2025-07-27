<x-layout.app>
    @section('content')
        <div class="container-fluid">
            <h5 class="text-center mt-3 mb-4 text-orange-500">{{ __('translate.description') }}</h5>

            <h2 class="text-center">Badges</h2>
            @include('content.badge')

            <h2 class="text-center">Botões</h2>
            @include('content.button')

            <h2 class="text-center">Avatar</h2>
            @include('content.avatar')

            <h2 class="text-center">Modal</h2>
            @include('content.modal')

            <h2 class="text-center">Sweetalert2</h2>
            @include('content.sweetalert2')

            <h2 class="text-center">Componentes de formulário</h2>
            @include('content.inputs-fields')
            

            {{-- @push('css')
            @endpush
            @push('scripts')
            @endpush --}}

        </div>
    @endsection
</x-layout.app>
