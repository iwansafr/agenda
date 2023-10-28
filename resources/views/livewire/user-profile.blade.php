<div>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Profile</h5>
            <form wire:submit="save">
                @if (session()->has('alert'))
                    <div class="alert alert-{{ session('alert') }} bg-{{ session('alert') }} text-light border-0 alert-dismissible fade show"
                        role="alert">
                        {{ session('message') }}
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert"
                            aria-label="Close"></button>
                    </div>
                @endif
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Username</label>
                    <div class="col-sm-10">
                        <input type="text" wire:model="profile.name"
                            class="form-control @error('profile.name') is-invalid @enderror"
                            placeholder="Input Username" autofocus>
                        @error('profile.name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" wire:model="profile.email"
                            class="form-control @error('profile.email') is-invalid @enderror" placeholder="Input Email">
                        @error('profile.email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Phone</label>
                    <div class="col-sm-10">
                        <input type="text" wire:model="profile.phone"
                            class="form-control @error('profile.phone') is-invalid @enderror" placeholder="Input Phone">
                        @error('profile.phone')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary"><i class="bi bi-cloud-upload"></i> Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
