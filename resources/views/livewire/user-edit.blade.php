
<div>
    <div class="card">
        <div class="card-header">From Edit</div>
        <div class="card-body">

            <form wire:submit.prevent="update">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text"class="form-control @error('name') is-invalid @enderror" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required wire:model="name">
                    @error('name')
                    <div id="validationServer03Feedback" >
                        {{$message}}
                    </div>
                    @enderror

                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text"class="form-control @error('email') is-invalid @enderror" wire:model="email">
                    @error('email')
                    <div id="validationServer03Feedback" >
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-warning">Update</button>
        </div>

        </form>
    </div>
</div>

