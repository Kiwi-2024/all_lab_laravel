@include('header');
    <div class="flex justify-center items-center min-h-screen">
        <div class="bg-white shadow-md rounded-lg p-6 w-full max-w-4xl">
            <h1 class="text-2xl font-semibold text-center mb-6">Thông tin sinh viên</h1>
        
            <table class="min-w-full table-auto">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="px-4 py-2 border">Tiêu đề</th>
                        <th class="px-4 py-2 border">Thông tin</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="px-4 py-2 border font-medium">Tên sinh viên</td>
                        <td class="px-4 py-2 border">{{ $data['name'] }}</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-2 border font-medium">Mã sinh viên</td>
                        <td class="px-4 py-2 border">{{ $data['mssv'] }}</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-2 border font-medium">Địa chỉ</td>
                        <td class="px-4 py-2 border">{{ $data['address'] }}</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-2 border font-medium">Chuyên ngành</td>
                        <td class="px-4 py-2 border">{{ $data['specialized'] }}</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-2 border font-medium">Thời gian học</td>
                        <td class="px-4 py-2 border">{{ $data['date'] }}</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-2 border font-medium">Sở thích</td>
                        <td class="px-4 py-2 border">{{ $data['hobby'] }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    @include('footer');
