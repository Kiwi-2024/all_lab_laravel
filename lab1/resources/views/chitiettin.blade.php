@include('header')
<main class="container mx-auto px-4 py-8">
    <h2 class="text-2xl font-bold text-gray-800">{{ $data->title }}</h2>
    <p class="text-gray-500 text-sm mt-2">{{ $data->created_at }} | Lượt xem: {{ $data->views }}</p>
    <div class="mt-6">
        <img src="https://via.placeholder.com/400x200" alt="Article Image" class="w-50 h-auto rounded-lg shadow-lg">
    </div>
    <div class="mt-6 text-gray-700 leading-relaxed">
        <p>{{ $data->content }}</p>
    </div>
    <div class="mt-8">
        <a href="/xemnhieu" class="bg-blue-600 text-white py-2 px-4 rounded-lg shadow hover:bg-blue-700">Quay lại trang
            tin tức</a>
    </div>
</main>
@include('footer')
