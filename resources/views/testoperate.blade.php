<!DOCTYPE html>


<html>


<meta charset="UTF-8">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
</script>

<body>

    <?php
$pass = "ผ่านการทดสอบภาคปฏิบัติ";

 

?>
    <div class="container">


        <h1>การสอบภาคปฏิบัติ</h1>

        <p>บันทึกผลการสอบว่าผ่านหรือไม่ผ่าน</p>
        <div class="form-check-pass">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
            <label class="form-check-label" for="flexRadioDefault1">
                <p>ผ่านการทดสอบภาคปฏิบัติ</p>

            </label>
        </div>
        <div class="form-check fail">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
            <label class="form-check-label" for="flexRadioDefault2">
                <p>ไม่ผ่านการทดสอบภาคปฏิบัติ</p>
            </label>
        </div>

        <br>
        <a class="btn btn-primary" role="button" href="{{url('/')}}">ย้อนกลับ</a>

    </div>

    @if($pass == "ผ่านการทดสอบภาคปฏิบัติ")
    <p>ผ่านการทดสอบภาคปฏิบัติ</p>

    @else
    <p>ไม่ผ่านการทดสอบภาคปฏิบัติ</p>
    @endif

</body>

</html>