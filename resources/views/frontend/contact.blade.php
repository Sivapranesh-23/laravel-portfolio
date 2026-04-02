@extends('layouts.app')

@section('content')

<div class="max-w-4xl mx-auto p-6">

    <h1 class="text-3xl font-bold mb-6">Contact Me</h1>

    {{-- ✅ SUCCESS MESSAGE HERE --}}
    @if(session('success'))
        <div class="bg-green-500 text-white p-2 mb-4 rounded">
            {{ session('success') }}
        </div>
    @endif

    <form method="POST" action="/contact">
        @csrf

        <input type="text" name="name" placeholder="Your Name" class="border p-2 w-full mb-3">
        <input type="email" name="email" placeholder="Your Email" class="border p-2 w-full mb-3">
        <textarea name="message" placeholder="Message" class="border p-2 w-full mb-3"></textarea>

        <button class="bg-blue-500 text-white px-4 py-2 rounded">
            Send Message
        </button>
    </form>

</div>

@endsection