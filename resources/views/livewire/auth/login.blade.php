<?php

use Illuminate\Auth\Events\Lockout;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Volt\Component;

new #[Layout('components.layouts.auth')] class extends Component {
    #[Validate('required|string|email')]
    public string $email = '';

    #[Validate('required|string')]
    public string $password = '';

    public bool $remember = false;

    /**
     * Handle an incoming authentication request.
     */
    public function login(): void
    {
        $this->validate();

        $this->ensureIsNotRateLimited();

        if (! Auth::attempt(['email' => $this->email, 'password' => $this->password], $this->remember)) {
            RateLimiter::hit($this->throttleKey());

            throw ValidationException::withMessages([
                'email' => __('auth.failed'),
            ]);
        }

        RateLimiter::clear($this->throttleKey());
        Session::regenerate();

        $this->redirectIntended(default: route('dashboard', absolute: false), navigate: true);
    }

    /**
     * Ensure the authentication request is not rate limited.
     */
    protected function ensureIsNotRateLimited(): void
    {
        if (! RateLimiter::tooManyAttempts($this->throttleKey(), 5)) {
            return;
        }

        event(new Lockout(request()));

        $seconds = RateLimiter::availableIn($this->throttleKey());

        throw ValidationException::withMessages([
            'email' => __('auth.throttle', [
                'seconds' => $seconds,
                'minutes' => ceil($seconds / 60),
            ]),
        ]);
    }

    /**
     * Get the authentication rate limiting throttle key.
     */
    protected function throttleKey(): string
    {
        return Str::transliterate(Str::lower($this->email).'|'.request()->ip());
    }
}; ?>

{{-- <div class="flex flex-col gap-6">
    <x-auth-header :title="__('Log in to your account')" :description="__('Enter your email and password below to log in')" />

    <!-- Session Status -->
    <x-auth-session-status class="text-center" :status="session('status')" />

    <form wire:submit="login" class="flex flex-col gap-6">
        <!-- Email Address -->
        <flux:input
            wire:model="email"
            :label="__('Email address')"
            type="email"
            required
            autofocus
            autocomplete="email"
            placeholder="email@example.com"
        />

        <!-- Password -->
        <div class="relative">
            <flux:input
                wire:model="password"
                :label="__('Password')"
                type="password"
                required
                autocomplete="current-password"
                :placeholder="__('Password')"
            />

            @if (Route::has('password.request'))
                <flux:link class="absolute end-0 top-0 text-sm" :href="route('password.request')" wire:navigate>
                    {{ __('Forgot your password?') }}
                </flux:link>
            @endif
        </div>

        <!-- Remember Me -->
        <flux:checkbox wire:model="remember" :label="__('Remember me')" />

        <div class="flex items-center justify-end">
            <flux:button variant="primary" type="submit" class="w-full">{{ __('Log in') }}</flux:button>
        </div>
    </form>

    @if (Route::has('register'))
        <div class="space-x-1 rtl:space-x-reverse text-center text-sm text-zinc-600 dark:text-zinc-400">
            {{ __('Don\'t have an account?') }}
            <flux:link :href="route('register')" wire:navigate>{{ __('Sign up') }}</flux:link>
        </div>
    @endif
</div> --}}
<div class="flex flex-col gap-8 max-w-md mx-auto px-8 py-10 bg-gradient-to-b from-[#387b4b] to-[#94CAA3]  rounded-3xl shadow-xl ring-1 ring-[#53975c]">
    <!-- Auth Header -->
    <x-auth-header
        :title="__('Log in to your account')"
        :description="__('Enter your email and password below to access your account.')"
    />

    <!-- Session Status -->
    <x-auth-session-status
        class="text-center text-sm text-[#275a37] dark:text-[#a9f7c2] font-medium"
        :status="session('status')"
    />

    <!-- Login Form -->
    <form wire:submit.prevent="login" class="flex flex-col gap-6">
        <!-- Email Address -->
        <flux:input
            wire:model.lazy="email"
            :label="__('Email address')"
            type="email"
            required
            autofocus
            autocomplete="email"
            placeholder="email@example.com"
        />

        <!-- Password -->
        <div class="relative">
            <flux:input
                wire:model.lazy="password"
                :label="__('Password')"
                type="password"
                required
                autocomplete="current-password"
                placeholder="{{ __('Password') }}"
            />
            @if (Route::has('password.request'))
                <flux:link
                    :href="route('password.request')"
                    wire:navigate
                    class="absolute right-0 top-0 text-xs text-[#2c5034] dark:text-[#b8f7c7] font-semibold hover:underline transition hover:text-[#183c24]"
                >
                    {{ __('Forgot your password?') }}
                </flux:link>
            @endif
        </div>

        <!-- Remember Me -->
        <flux:checkbox
            wire:model="remember"
            :label="__('Remember me')"
            class="text-[#2a4f32] dark:text-[#b5f7c6] font-medium"
        />

        <!-- Submit Button -->
        <div>
            <flux:button
                type="submit"
                class="w-full bg-[#1C3B20] hover:bg-[#18351c] text-white font-semibold py-2.5 rounded-lg transition duration-300 shadow-md hover:shadow-lg focus:ring-2 focus:ring-[#aef2c4] focus:outline-none"
            >
                {{ __('Log in') }}
            </flux:button>
        </div>
    </form>

    <!-- Divider -->
    <div class="relative my-6">
        <div class="absolute inset-0 flex items-center">
            <div class="w-full border-t border-zinc-300 dark:border-zinc-600"></div>
        </div>
        <div class="relative flex justify-center text-sm">
            <span class="bg-white dark:bg-zinc-900 px-3 text-zinc-500 dark:text-zinc-400">
                {{ __('or continue with') }}
            </span>
        </div>
    </div>

    <!-- Social Login Placeholder -->
    <div class="flex flex-col gap-4">
        <flux:button
            variant="outline"
            class="w-full text-[#1C3B20] border-[#1C3B20] hover:bg-[#e9f5ec] dark:text-[#c0f7d3] dark:border-[#b8f7c7] dark:hover:bg-zinc-800 transition duration-300"
        >
            {{ __('Sign in with Google') }}
        </flux:button>
    </div>

    <!-- Register Link -->
    @if (Route::has('register'))
        <div class="text-center text-sm text-zinc-100 dark:text-zinc-100 mt-6">
            {{ __('Don\'t have an account?') }}
            <flux:link
                :href="route('register')"
                wire:navigate
                class="text-[#dbe9dd] font-semibold hover:underline hover:text-[#163a22] transition"
            >
                {{ __('Sign up') }}
            </flux:link>
        </div>
    @endif
</div>


