<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Email Confirmation</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap');

        body {
            background-image: url("https://github.com/bakaroti/resource/blob/main/liq3.png?raw=true");
            background-color: #333;
            color: #fff;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            max-width: 800px;
            padding: 20px;
            background-color: #fff
                /* background-image: url("https://github.com/bakaroti/resource/blob/main/liq3.png?raw=true"); */
                background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            /* Added box shadow */
            text-align: center;
        }

        .logo-container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 20px;
        }

        .logo {
            width: 100px;
            height: 100px;
            border-radius: 50%;

        }

        h1 {
            color: #fff;
            margin-bottom: 20px;
        }

        p {
            color: #fff;
            margin-bottom: 10px;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="container">
            <div class="logo-container">
                <img class="logo" src="https://github.com/bakaroti/resource/blob/main/logo_110.png?raw=true" alt="logo"
                    width="100">
            </div>
            <div class="table-responsive">
                <table class="table table-bordered text-center rounded rounded-3 overflow-hidden">
                    <thead>
                        <tr class="table-dark">
                            <th scope="col">ID Pesan</th>
                            <th scope="col">ID User</th>
                            <th scope="col">Nama User</th>
                            <th scope="col">Email User</th>
                            <th scope="col">Nomor User</th>
                            <th scope="col">Link Gmap</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        <tr>
                            <td>{{ $pesan->id }}</td>
                            <td>{{ $pesan->id_user }}</td>
                            <td>{{ $pesan->user->name }}</td>
                            <td>{{ $pesan->data->email }}</td>
                            <td onclick="location.href='https://wa.me/{{ $pesan->data->no_wa }}'">
                                <a class="btn btn-primary">click me</a>
                            </td>
                            <td>{{ $pesan->data->iframeMaps }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</body>

</html>