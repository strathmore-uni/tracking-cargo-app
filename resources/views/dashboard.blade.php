@extends('layouts.app')

@section('content')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-center text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('User Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-blue-100"> 
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 text-center">
                    <h3 class="text-3xl font-bold mb-6 text-blue-700">{{ __("Welcome!") }}</h3> 
                    <h3 class="text-2xl font-bold mb-4 text-green-600">{{ __("Start Tracking") }}</h3> 
                    <div class="mt-6">
                        <img src="{{ asset('track.jpg') }}" alt="Tracking Image" class="rounded-lg shadow-md mx-auto" style="max-width: 200px;">
                    </div>
                    <a href="{{ route('tracktrace.index') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4 inline-block">
                        {{ __('Track & Trace') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection




