<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>

    <div style="width: 600px; margin: auto; font-family: 'SEGOE UI' ;">
        <h2 style="text-align: center;">Nevroloqların Milli Assosiasiyası </h2>
        <div style="background-color: rgb(0, 115, 169); padding: 25px; position: relative; ">
            <div style="position: absolute; top: 0; left: 0;  width: 100%; height: 100%; background-color: rgba(0, 115, 169, 0.6); "></div>
        </div>
        <div style="width: 100%; padding: 15px 0px; background-color: #19b5fe; display: flex; justify-content: space-around;">
            <a href="{{ route('home') }}/az/membership" style="padding:0 20px; display: inline-block; text-decoration: none; color: #fff; font-size: 14px;">ÜZVLÜK</a>
            <a href="{{ route('home') }}/az/books" style="padding: 0px 20px; display: inline-block; text-decoration: none; color: #fff; font-size: 14px;">E-KİTABXANA</a>
            <a href="{{ route('home') }}/az/adverts" style="padding: 0px 20px; display: inline-block; text-decoration: none; color: #fff; font-size: 14px;">ELANLAR</a>
        </div>

        <div style="display: flex; flex-wrap: wrap; justify-content: space-between; margin: 25px 0px 0px 0px;">
            <div style="width: 46%; padding: 10px; background-color: #19b5fe;">
                <h4 style="color: #fff; font-size: 16px;">HAQQIMIZDA</h4>
                <p style="color: #fff; font-size: 15px;">Nevroloqların Milli Assosiasiyası 27.01.2011 ildə təsis edilmişdir.
                    2.04.2011 ildə Azərbaycan Respublikası Ədliyyə Nazirliyində qeydiyyatdan keçmişdir. Qeydiyyat nömrəsi № 1111-Q35-2935</p>
            </div>
            <div style="width: 46%; padding: 10px; background-color: #19b5fe;">
                <h4 style="color: #fff; font-size: 16px;">ÜZVLÜK</h4>
                <p style="color: #fff; font-size: 15px;">Nevroloqların Milli Assosiasiyasına üzv olmaq üçün aşağıdakı ərizə formasını doldurub assosiasiyanın e-mail ünvanına göndərmək kifayətdir.</p>
            </div>
        </div>

        <div style="margin: 25px 0px 0px 0px;">

            <h4 style="color: #000; font-size: 16px; color: rgba(0, 115, 169);">{{ $input['email'] }}</h4>
            <h4 style="color: #000; font-size: 16px; color: rgba(0, 115, 169);">{{ $input['name'] }}</h4>
            <p>{{ $input['message'] }}</p>
        </div>

        <div style="width: 100%; position: relative; background-size: cover; background-repeat: no-repeat; padding: 10px 0px 10px 0px; overflow: hidden;">
            <div style="position: absolute; top: 0; left: 0;  width: 100%; height: 100%; background-color: rgba(0, 115, 169, 0.6); "></div>
            <div style="display: flex; justify-content: space-around; color: #000;">
                <span >Bütün hüquqlar qorunur © {{ date('Y') }}</span>
                <span >Əlaqə: +99455 848-60-20</span>
            </div>

        </div>

    </div>



</body>

</html>
