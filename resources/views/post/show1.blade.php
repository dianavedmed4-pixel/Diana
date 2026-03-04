<x-layout>
	<x-slot:title>
		{{ $title }} - site.com
	</x-slot>
	
    <p style="{{ $name }}">{{ $name }}</p>
	<p><input class="{{ $name }}"></p>
    <p><input value="{{ $age }}"></p>
    <p><input value="{{ $salary }}"></p>
    current timestamp: {{ time() }}
</x-layout>
