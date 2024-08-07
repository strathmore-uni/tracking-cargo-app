@extends('layouts.app')

@section('template_title')
    {{ $trackedCargo->name ?? __('Show') . " " . __('Tracked Cargo') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="flex justify-center items-center h-screen bg-blue-100"> 
            <div class="max-w-md w-full p-6 bg-white rounded-lg shadow-md">
                <h1 class="text-3xl font-semibold mb-6 text-center">{{ __('Show') }} Tracked Cargo</h1>

                <div class="mb-4">
                    <strong class="block mb-1">Awbno:</strong>
                    <span class="text-gray-700">{{ $trackedCargo->awbno }}</span>
                </div>

                <div class="bg-white">
                    <div class="mb-4">
                        <strong class="block mb-1">Awbno:</strong>
                        <span class="text-gray-700">{{ $trackedCargo->awbno }}</span>
                    </div>
                    <div class="mb-4">
                        <strong class="block mb-1">Flight:</strong>
                        <span class="text-gray-700">{{ $trackedCargo->flight }}</span>
                    </div>
                    <div class="mb-4">
                        <strong class="block mb-1">Status:</strong>
                        <span class="text-gray-700">{{ $trackedCargo->status }}</span>
                    </div>
                    <div class="mb-4">
                        <strong class="block mb-1">Location:</strong>
                        <span class="text-gray-700">{{ $trackedCargo->location }}</span>
                    </div>
                </div>

                <div class="text-center">
                    <a href="{{ route('tracked-cargos.index') }}" class="inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        {{ __('Back') }}
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection

