@include('components/header')
<section class="container mx-auto px-4 mt-8">
    <h2 class="text-xl font-semibold mb-4">Tin Mới Nhất</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($data as $item)
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <img src="https://via.placeholder.com/300x150" alt="News 1" class="w-full h-48 object-cover">
            <div class="p-4">
                <h3 class="text-lg font-semibold">{{ $item->title }}</h3>
                <p class="text-gray-600 text-sm mt-2">{{ $item->content }}</p>
                <a href="{{ route('chitiet', $item->id)}}" class="text-blue-600 font-bold mt-4 inline-block">Xem chi tiết</a>
            </div>
        </div>
        @endforeach
    </div>

</section>
@include('components/footer')
