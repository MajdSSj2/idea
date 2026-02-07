<x-layout>
    <x-form title="Login in" description="Glad to have you back">
        <form action="/login" method="POST" class="mt-8 space-y-6 mt-10">
            @csrf

            <x-form.field name="email" label="email"> </x-form.field>
            <x-form.field name="password" label="Password" type="password"> </x-form.field>

            <button type="submit" class="btn h-10 w-full">Login</button>
        </form>
    </x-form>
  </x-layout>
