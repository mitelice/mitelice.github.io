<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>บัญชีธนาคาร</title>
</head>

<body>
    <div class="container">
        <form action="">
            <div class="form-group">
                <label for="">บัญชีธนาคาร : </label>
                <select name="bank" id="bank" class="form-control">
                    <option value="กรุงไทย">กรุงไทย</option>
                    <option value="กรุงไทย">ไทยพาณิชย์</option>
                </select>
            </div>

            <div class="form-group">
                <label for="">หมายเลขบัญชี : </label>
                <input class="form-control" type="text" name="bnaknum">
            </div>
            <div>
                <button class="btn btn-primary">
                    ตกลง
                </button>
            </div>
        </form>
    </div>
</body>

</html>