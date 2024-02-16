<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ Auth::user()->name }}さん、こんにちは。
                    <x-primary-button onclick="location.href='{{ route('order.index') }}'">受注管理画面はこちら</x-primary-button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
