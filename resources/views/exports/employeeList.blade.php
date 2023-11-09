<!DOCTYPE html>
<html>

<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <style type="text/css">
    </style>
</head>

<body style="background-color: #f4f4f4; margin: 0 !important; padding: 0 !important;">
    <section>
        <h1>Cocosor Inc</h1>
        <table>
            <thead>
                <tr class="border-b border-gray-200">
                    <th></th>
                    <th>Username</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $emp)
                    <tr>
                        <th>
                            {{ $emp->id }}
                        </th>
                        <td>
                            {{ $emp->username }}
                        </td>
                        <td>
                            {{ $emp->email }}
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
    </section>
</body>

</html>