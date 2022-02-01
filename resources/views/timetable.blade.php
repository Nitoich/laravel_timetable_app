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
        <div class="wrapper">
            <h1 class="title">Расписание</h1>
            <div class="days__container">
                @foreach($data as $day)
                    <div class="day">
                        <h2>{{ $day[0]->dayInfo->name }}</h2>
                        @foreach($day as $subject)
                            <div class="lesson">
                                <p>{{ $subject->number  }}.</p>
                                <p>{{ $subject->subjectInfo->name }}</p>
                                <p>{{ $subject->type }}</p>
                            </div>
                        @endforeach
                    </div>
                @endforeach
            </div>
        </div>
    </body>
</html>
