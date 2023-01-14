<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>

<body>
    <section>
        <?php
        
        $user = 'gree';
        $arr = ['Home', 'Member', 'About', 'Menu'];
        
        ?>

        <h1>Admin Site</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur, temporibus et. Ipsam, possimus numquam?
            Quisquam sed blanditiis deleniti. Similique dolorum necessitatibus iure, deserunt harum laudantium officia
            voluptates facere excepturi at!</p>
        <hr>
        <h2>{{ $user }}</h2>

        @if ($user == 'green')
            <h1>ยินดีต้อนรับ ท่านผู้เจริญ {{ $user }}</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam cumque explicabo aspernatur earum
                consectetur magnam dicta non officia laudantium laboriosam ullam, at velit. Quidem, omnis? Neque totam
                sequi iure incidunt!</p>
        @else
            <h1>ผู้ใช้ท่านนี้ไม่ได้เป็นแอดมิน</h1>
        @endif

        <fieldset>
            <legend>Navbar:</legend>
            @foreach ($arr as $item)
                <a href="{{ $item }}">{{ $item }}</a> &ensp;
            @endforeach
        </fieldset>

        <br>

        <ul>
            [LIST]
            @for ($i = 0; $i < 5; $i++)
                <li> {{ $i }} </li>
            @endfor
        </ul>

        <form action="/action_page.php">
            <fieldset>
                <legend>Personalia:</legend>
                <label for="fname">First name:</label>
                <input type="text" id="fname" name="fname"><br><br>
                <label for="lname">Last name:</label>
                <input type="text" id="lname" name="lname"><br><br>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email"><br><br>
                <label for="birthday">Birthday:</label>
                <input type="date" id="birthday" name="birthday"><br><br>
                <input type="submit" value="Submit">
            </fieldset>
        </form>




    </section>
</body>

</html>
