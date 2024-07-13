<div>
    <div wire:ignore.self class="modal modal-lg" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Password confirmation</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>The action is password protected.</p>
                    <form wire:submit.prevent="verify" action="#" id="password-verify-form">
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" wire:model="password" class="form-control @error('password') is-invalid @enderror" id="password">
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" form="password-verify-form">Verify</button>
                </div>
            </div>
        </div>
    </div>

</div>
