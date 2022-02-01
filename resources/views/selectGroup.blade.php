<!doctype html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Расписание</title>
        <link rel="stylesheet" href="/css/styles.css">
    </head>
    <body>
        <div class="container">
            <h1>Выберите группу</h1>
            <select name="select-group" id="select-group">
                @foreach($groups as $group)
                    <option value="{{ $group->id }}">{{ $group->name }}</option>
                @endforeach
            </select>
            <button id="btn-getTimetable">Выбрать</button>
            <script>
                document.getElementById('btn-getTimetable').addEventListener('click', function(event) {
                    let selectValue = document.getElementById('select-group').options[document.getElementById('select-group').selectedIndex].value
                    window.location.href = `${window.location.href}/${selectValue}`
                })
            </script>
        </div>
    </body>
</html>
