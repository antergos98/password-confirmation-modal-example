@props(['action', 'confirm' => false, 'method' => 'POST'])


@if($confirm)
    <div
        x-data="{ modal: new bootstrap.Modal(Livewire.first().$el.children[0]) }"
        @password-confirmed="$refs.form.submit();"
    >
        @once
            <livewire:confirm-password-dialog />
        @endonce

        <form x-ref="form" @submit.prevent="modal.toggle()" action="{{ $action }}" method="POST">
            @csrf
            @method($method)
            <button type="submit" {{ $attributes }}>{{ $slot }}</button>
        </form>
    </div>
@else
    <form action="{{ $action }}" method="POST">
        @csrf
        @method($method)
        <button type="submit" {{ $attributes }}>{{ $slot }}</button>
    </form>
@endif
