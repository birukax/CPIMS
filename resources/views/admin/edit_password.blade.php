<div class="container w-full">

    <form class="gap-3 " method="POST" action="{{ route('user_password_changed') }}">
        @csrf
        @method('PUT')
        <input hidden name="id" value="{{ $user->id }}" />
        <div class="form-group{{ $errors->has('new-password') ? ' has-error' : '' }}">
            <label for="new-password" class="text-sm col-md-4 control-label ">New Password</label>

            <div class="col-md-12">
                <input id="new-password" type="password" class="rounded-lg form-control" name="new-password"
                    required>

                @if ($errors->has('new-password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('new-password') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="mt-4 form-group">
            <label for="new-password-confirm" class="text-sm col-md-4 control-label ">Confirm New
                Password</label>

            <div class="col-md-12">
                <input id="new-password-confirm" type="password" class="rounded-lg form-control"
                    name="new-password_confirmation" required>
            </div>
        </div>

        <div class="mt-4 form-group">
                <x-button class="ml-4 bg-dark">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-4 h-4 mr-1">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" />
                    </svg>

                    {{ __('Change Password') }}
                </x-button>
        </div>
    </form>
</div>
