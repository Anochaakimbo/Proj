<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Information</title>
</head>
<body>
    <table border = 1 >
        <thead>
            <tr>
                <th>ชื่อบริษัท</th>
                <th>ราคาที่จดทะเบียน</th>
                <th>ขนาดบริษัท</th>
                <th>ชื่อเจ้าของบริษัท</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($companies as $company)
            <tr>
                <td>{{ $company->company_name }}</td>
                <td>{{ $company->company_price }}</td>
                <td>
                    @if($company->company_price >= 10000000)
                        ขนาดใหญ่
                    @elseif($company->company_price >= 5000000)
                        ขนาดกลาง
                    @else
                        ขนาดเล็ก
                    @endif
                </td>
                <td>{{ $company->users->name }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
