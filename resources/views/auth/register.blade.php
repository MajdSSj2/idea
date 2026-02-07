<x-layout>
    <x-form title="Register An Account" description="Start Tracking Your Ideas">
        <form action="/register" method="POST" class="mt-8 space-y-6 mt-10">
            @csrf

            <x-form.field name="name" label="Name"> </x-form.field>
            <x-form.field name="email" label="Email" type="email"> </x-form.field>
            <x-form.field name="password" label="Password" type="password"> </x-form.field>
          
            <button type="submit" class="btn h-10 w-full">Create Account</button>
        </form>
    </x-form>
  </x-layout>