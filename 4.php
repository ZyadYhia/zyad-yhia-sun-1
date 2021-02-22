<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body class="d-flex justify-content-center">


    <table style=" margin-top: 10px;width: 95%;" class="table table-dark text-center">
        <thead>
            <tr>
                <th colspan="12">
                    Multiplication Table
                </th>
            </tr>
        </thead>
        <tbody>
            <?php for ($i = 1; $i <= 12; $i++) { ?>
                <tr>
                    <?php for ($y = 1; $y <= 12; $y++) {
                        $z = $y * $i; ?>
                        <td class="text-center border border-3">
                            <?php echo "$y * $i = $z"; ?>
                        </td>
                    <?php }; ?>
                <?php echo "</tr>";
            } ?>


        </tbody>
    </table>
</body>

</html>