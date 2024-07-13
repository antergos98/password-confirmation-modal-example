@props(['action', 'confirm' => false, 'method' => 'POST'])


@if($confirm)
    <div
        x-data="{ modal: new bootstrap.Modal(Livewire.getByName('confirm-password-dialog')[0].$el.children[0]) }"
        @password-confirmed="$refs.form.submit();"
    >
        <livewire:confirm-password-dialog />
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
