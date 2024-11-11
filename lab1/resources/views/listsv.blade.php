@include('header')
    <div class="container mx-auto">
        <h1 class="text-2xl font-semibold text-center mb-6">Danh Sách Sinh Viên</h1>
        
        <table class="min-w-full bg-white border border-gray-300">
            <thead>
                <tr class="border-b">
                    <th class="py-2 px-4 text-left text-sm font-medium text-gray-700 border-r">ID</th>
                    <th class="py-2 px-4 text-left text-sm font-medium text-gray-700 border-r">Họ và Tên</th>
                    <th class="py-2 px-4 text-left text-sm font-medium text-gray-700 border-r">Tuổi</th>
                    <th class="py-2 px-4 text-left text-sm font-medium text-gray-700 border-r">MSSV</th>
                    <th class="py-2 px-4 text-left text-sm font-medium text-gray-700 border-r">Địa Chỉ</th>
                    <th class="py-2 px-4 text-left text-sm font-medium text-gray-700 border-r">Số Điện Thoại</th>
                    <th class="py-2 px-4 text-left text-sm font-medium text-gray-700">Trường</th>
                </tr>
            </thead>
            <tbody>
                <!-- Vòng lặp qua từng sinh viên -->
                @foreach ($data as $student)
                <tr class="border-b">
                    <td class="py-2 px-4 border-r">{{ $student['id'] }}</td>
                    <td class="py-2 px-4 border-r"><a href="{{ route('thongtinsv', $student['id']) }}" class="text-blue-800">{{ $student['name'] }}</a></td>
                    <td class="py-2 px-4 border-r">{{ $student['age'] }}</td>
                    <td class="py-2 px-4 border-r">{{ $student['mssv'] }}</td>
                    <td class="py-2 px-4 border-r">{{ $student['address'] }}</td>
                    <td class="py-2 px-4 border-r">{{ $student['phone'] }}</td>
                    <td class="py-2 px-4">{{ $student['school'] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    @include('footer');