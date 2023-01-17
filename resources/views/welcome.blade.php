<!DOCTYPE html>
<html>

<body>

    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <?php

//   $date = "";
//   $time = "";

?>
    <!-- <div class="container">
        <h2>ทดสอบขอใบอนุญาตขับขี่</h2>

        <div class="row align-items-center">

            <div class="col">
                <label for="exampleInputusername" class="form-label">ชื่อจริง</label>
                <input type="username" class="form-control" id="exampleInputusername" aria-describedby="usernameHelp">
            </div>
            <div class="col">
                <label for="exampleInputlastname" class="form-label">นามสกุล</label>
                <input type="lastname" class="form-control" id="exampleInputlastname">
            </div>

        </div>
    </diV>


    <div class="container">
        <div class="row align-items-center">

            <div class="col">
                <button type="edit" class="btn btn-primary">แก้ไขข้อมูล</button>
            </div>
            <div class="col">
                <button type="delete" class="btn btn-primary">ลบข้อมูล</button>
            </div>

        </div>
    </div>

    <div class="container">
        <button type="submit" class="btn btn-primary">บันทึกข้อมูล</button>


    </div> -->

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