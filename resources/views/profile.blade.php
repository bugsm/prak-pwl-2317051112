<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile absen</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            background-color: #f5f5f5;
        }
        
        .profile-image {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 20px;
            border: 3px solid white;
            box-shadow: 0 2px 5px rgba(0,0,0,0.2);
        }
        
        table {
            background-color: white;
            border-collapse: collapse;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            padding: 20px;
            border-radius: 8px;
        }
        
        td {
            padding: 12px 20px;
            border-bottom: 1px solid #eee;
        }

        tr:last-child td {
            border-bottom: none;
        }

        td:first-child {
            font-weight: bold;
            color: #333;
        }
    </style>
</head>
<body>
    <img src="{{ asset('images/mieayam.jpg') }}" alt="Profile Picture" class="profile-image">
    <table>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td>{{ $nama }}</td>
        </tr>

        <tr>
            <td>NPM</td>
            <td>:</td>
            <td>{{ $npm }}</td>
        </tr>

        <tr>
            <td>Kelas</td>
            <td>:</td>
            <td>{{ $kelas }}</td>
        </tr>
    </table>
</body>
</html>