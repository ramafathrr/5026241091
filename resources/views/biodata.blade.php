<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tutorial Laravel #4 : Passing data Controller ke view laravel - www.malasngoding.com</title>
</head>
<body>
    <h1>tutorial laravel</h1>
    <a href="https://www.malasngoding.com/category/laravel">www.malasngoding.com</a>
    <br>

    <p>Nama : {{ $nama }} - <?php echo $nama; ?></p>
    <p>Nama : {{ $umur }} - <?php echo $umur; ?></p>
    <p>Mata pelajaran</p>

    <ul>
        @foreach ($matkul as $m)
            <li>{{$m}}</li>
        @endforeach
    </ul>
</body>
</html>
