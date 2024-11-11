@include('components/header')
<div class="container mx-auto p-6">
    <h1 class="text-3xl font-bold text-center mb-8">Danh Sách Bài Viết</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($data as $item)
        <div class="bg-white p-4 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
            <h2 class="text-xl font-semibold text-gray-800">{{ $item->title }}</h2>
            <p class="text-gray-600 mt-2">{{ $item->content }}</p>
            <div class="flex justify-between items-center mt-4">
                <span class="text-sm text-gray-500">Danh mục: {{ $item->name }}</span>
                <span class="text-sm text-gray-500">Lượt xem: {{ $item->views }}</span>
            </div>
            <a href="{{ route('chitiet', $item->id) }}" class="mt-4 inline-block text-blue-500 hover:underline">Đọc thêm</a>
        </div>
        @endforeach
    </div>
</div>
@include('components/footer')