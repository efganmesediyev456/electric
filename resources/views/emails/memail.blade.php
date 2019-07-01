<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Email</title>
</head>

<body>
    <div style="width: 600px; margin: auto; font-family: 'SEGOE UI';">
        <h2 style="text-align: center;">Nevroloqların Milli Assosiasiyası </h2>

        <ul style="display: flex; flex-wrap: wrap;  justify-content: space-around; list-style: none; font-size: 16px;">
            <li style="width: 45%; border-bottom: 1px solid rgb(0, 115, 169); padding:0 5px 5px 5px; margin: 0 0 25px 0; ">
                <span style="margin-right: 20px; font-weight: 700;">Ad:</span><span style="font-style: italic;">{{ $input['name'] }}</span>
            </li>
            <li style="width: 45%; border-bottom: 1px solid rgb(0, 115, 169); padding:0 5px 5px 5px; margin: 0 0 25px 0;">
                <span style="margin-right: 20px; font-weight: 700;">Soyad:</span><span style="font-style: italic;">{{ $input['surname'] }}</span>
            </li>
            <li style="width: 45%; border-bottom: 1px solid rgb(0, 115, 169); padding:0 5px 5px 5px; margin: 0 0 25px 0;">
                <span style="margin-right: 20px; font-weight: 700;">Atasının Adı :</span ><span style="font-style: italic;">{{ $input['father'] }}</span>
            </li>
            <li style="width: 45%; border-bottom: 1px solid rgb(0, 115, 169); padding:0 5px 5px 5px; margin: 0 0 25px 0;">
                <span style="margin-right: 20px; font-weight: 700;">Doğum tarixi:</span><span style="font-style: italic;">{{ $input['date'] }}</span>
            </li>
            <h4 style="width: 100%;">ƏLAQƏ ÜÇÜN ÜNVAN (ASSOSIASIYA VƏ ƏLAQƏLI BIRLIKLƏR TƏRƏFINDƏN MƏKTUBLAR ALMAQ ÜÇÜN)</h4>
            
            
            <li style="width: 45%; border-bottom: 1px solid rgb(0, 115, 169); padding:0 5px 5px 5px; margin: 0 0 25px 0;">
                <span style="margin-right: 20px; font-weight: 700;">Ünvan:</span><span style="font-style: italic;">{{ $input['address'] }}</span>
            </li>
             <li style="width: 45%; border-bottom: 1px solid rgb(0, 115, 169); padding:0 5px 5px 5px; margin: 0 0 25px 0;">
                <span style="margin-right: 20px; font-weight: 700;">Email:</span><span style="font-style: italic;">{{ $input['email'] }}</span>
            </li>
             <li style="width: 45%; border-bottom: 1px solid rgb(0, 115, 169); padding:0 5px 5px 5px; margin: 0 0 25px 0;">
                <span style="margin-right: 20px; font-weight: 700;">Telefon:</span><span style="font-style: italic;">{{ $input['mobile'] }}</span>
            </li>
             <li style="width: 45%; border-bottom: 1px solid rgb(0, 115, 169); padding:0 5px 5px 5px; margin: 0 0 25px 0;">
                <span style="margin-right: 20px; font-weight: 700;">Faks:</span><span style="font-style: italic;">{{ $input['faks'] }}</span>
            </li>
            
            <h4 style="width: 100%;">İŞ YERI (ÜZVLƏRIN SIYAHISINDA GÖSTƏRMƏK ÜÇÜN)</h4>
            
             <li style="width: 45%; border-bottom: 1px solid rgb(0, 115, 169); padding:0 5px 5px 5px; margin: 0 0 25px 0;">
                <span style="margin-right: 20px; font-weight: 700;">Adı:</span><span style="font-style: italic;">{{ $input['name_i'] }}</span>
            </li>
             <li style="width: 45%; border-bottom: 1px solid rgb(0, 115, 169); padding:0 5px 5px 5px; margin: 0 0 25px 0;">
                <span style="margin-right: 20px; font-weight: 700;">Yerləşdiyi ünvan:</span><span style="font-style: italic;">{{ $input['place'] }}</span>
            </li>
            <li style="width: 45%; border-bottom: 1px solid rgb(0, 115, 169); padding:0 5px 5px 5px; margin: 0 0 25px 0;">
                <span style="margin-right: 20px; font-weight: 700;">Telefon:</span><span style="font-style: italic;">{{ $input['w_phone'] }}</span>
            </li>
            <li style="width: 45%; border-bottom: 1px solid rgb(0, 115, 169); padding:0 5px 5px 5px; margin: 0 0 25px 0;">
                <span style="margin-right: 20px; font-weight: 700;">Faks:</span><span style="font-style: italic;">{{ $input['w_faks'] }}</span>
            </li>
            <li style="width: 45%; border-bottom: 1px solid rgb(0, 115, 169); padding:0 5px 5px 5px; margin: 0 0 25px 0;">
                <span style="margin-right: 20px; font-weight: 700;">Vəzifəsi:</span><span style="font-style: italic;">{{ $input['w_pos'] }}</span>
            </li>
            <li style="width: 45%; border-bottom: 1px solid rgb(0, 115, 169); padding:0 5px 5px 5px; margin: 0 0 25px 0;">
                <span style="margin-right: 20px; font-weight: 700;">İxtisası:</span><span style="font-style: italic;">{{ $input['w_spec'] }}</span>
            </li>
            


        </ul>


    </div>

</body>

</html>
