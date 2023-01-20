<!DOCTYPE html>
<html>

<body>

    <meta charset="UTF-8">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>




    <div class="container">





        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8">
                        <h2>ทดสอบขอใบอนุญาตขับขี่</h2>

                        {{$a}}


                    </div>

                </div>
            </div>



            <div class="row align-items-center">
                <div class="col">
                    <p>ชื่อจริง</p>
                    <input type="inputscore" id="inputscore" class="form-control" aria-describedby="scoreHelpBlock">
                </div>
                <div class="col">
                    <p>นามสกุล</p>
                    <input type="inputscore" id="inputscore" class="form-control" aria-describedby="scoreHelpBlock">
                </div>

            </div>
            <br>
            <button type="button" class="btn btn-primary">บันทึกข้อมูล</button>
            <br>
            <br>

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ชื่อจริง</th>
                        <th>นามสกุล</th>
                        <th>วันที่ : เวลา</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Subhash</td>
                        <td>Administration</td>
                        <td>88***88***</td>
                        <td>

                            <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons"></i></a>
                            <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>Subhash</td>
                        <td>Administration</td>
                        <td>88***88***</td>
                        <td>

                            <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons"></i></a>
                            <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>Subhash</td>
                        <td>Administration</td>
                        <td>88***88***</td>
                        <td>

                            <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons"></i></a>
                            <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <a class="btn btn-primary" role="button" href="{{url('/testbody')}}">ทดสอบร่างกาย</a>
        <a class="btn btn-primary" role="button" href="{{url('/testtheory')}}">ทดสอบทฤษฎี</a>
        <a class="btn btn-primary" role="button" href="{{url('/testoperate')}}">ทดสอบภาคปฏิบัติ</a>
        <a class="btn btn-primary" role="button" href="{{url('/testdrive')}}">สถานะการทดสอบขอใบอนุญาตขับขี่</a>
    </div>





</body>

</html>