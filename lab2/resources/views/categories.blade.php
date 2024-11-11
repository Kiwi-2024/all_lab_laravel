
@include('components/header')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold text-center mb-6">Danh Mục</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        @foreach ($data as $item)
        <a href="{{ route('listpost', $item->id) }}"><div class="category-item bg-blue-100 p-4 rounded-lg shadow-md text-center">{{ $item->name }}</div></a>
        @endforeach
    </div>
</div>
@include('components/footer')