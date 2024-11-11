<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giới thiệu sinh viên</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
    <header>
        <div class="container mx-auto flex justify-center items-center px-4 mt-4 mb-4">
            <a href="{{ route('xemnhieu') }}"
                class="text-black hover:text-blue-200 transition-colors bg-blue-500 p-3 rounded-lg ml-5">Xem nhiềunhất</a>
            <a href="{{ route('category') }}"
                class="text-black hover:text-blue-200 transition-colors bg-blue-500 p-3 rounded-lg ml-5">Danh mục</a>
        </div>
    </header>
