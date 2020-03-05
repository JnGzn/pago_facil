<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.css" integrity="sha256-A47OwxL/nAN0ydiDFTSGX7ftbfTJTKgiJ0zqCuTPDh4=" crossorigin="anonymous" />
</head>
<body>
    <div class="container">
        <h1>Países</h1>
        <div class="row mx-auto">
        <table class="table border border-success">
            <thead>
                <tr>
                    <th>pais</th>
                    <th>capital</th>
                    <th>moneda</th>
                    <th>poblacion</th>
                    <th class="bg-success class">ciudad</th>

        


                </tr>
            </thead>
            <tbody>
                @foreach($paises as $pais => $informacion )
                    <tr>
                        <td rowspan="3">{{ $pais }}</td>
                        <td rowspan="3">{{ $informacion["capital"] }}</td>
                        <td rowspan="3">{{ $informacion["moneda"] }}</td>
                        <td rowspan="3">{{ $informacion["poblacion"] }}</td>
                        <td class="bg-success class">{{ $informacion["ciudades"][0] }}</td>
                      


                    </tr>
                    <tr>
                        <td class="bg-success class">{{ $informacion["ciudades"][1] }}</td>
                    </tr>
                    <tr>
                        <td class="bg-success class">{{ $informacion["ciudades"][2] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        </div>
    </div>
    
</body>
</html>