<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
</head>
<body>
    <section>
    <h1>About Page</h1>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Explicabo maxime, nulla eaque exercitationem repellat asperiores a velit reiciendis in quisquam. Obcaecati quam quia deserunt repudiandae reprehenderit at voluptatem, inventore recusandae.</p>
    </section>

    <section>
        ที่อยู่ : {{$city}} <br>
        เบอร์ติดต่อ : {{$tel}} <br>
        อีเมลล์ : {{$email}} <br>
    </section>

    <br>

    <section>
        <fieldset>
            <legend>Navbar:</legend>
            <a href="/">Home</a> &emsp;
            <a href="{{url('/admin')}}">Admin</a> &emsp;
            <a href="{{url('/member')}}">Member</a> &emsp;
            <a href="{{url('/about/foobarbee')}}">About/foobarbee</a> &emsp;
            <a href="{{route('about')}}">About</a> &emsp;
        </fieldset>
    </section>
</body>
</html>