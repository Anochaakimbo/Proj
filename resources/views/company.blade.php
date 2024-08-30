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
            @foreach ($users as $user)
            @foreach ($user->companies as $company)
            <tr>
                <td>{{ $company->company_name }}</td>
                <td>{{ $company->company_price }}</td>
                <td>
                    <?php
                        $price = $user->companies->first()->company_price;
                        if ($price >= 10000000) {
                            $size = "ขนาดใหญ่";
                        } elseif ($price >= 5000000) {
                            $size = "ขนาดกลาง";
                        } else {
                            $size = "ขนาดเล็ก";
                        }
                        echo $size;
                    ?>
                </td>
                <td>{{ $user->name }}</td>
            </tr>
            @endforeach
            @endforeach
        </tbody>
    </table>
</body>
</html>