 <?php
// Multidimensional array storing student data
$students = [
    ['SN' => 1, 'Name' => 'Rajesh', 'Roll' => 25, 'Web_Tech_II' => 56, 'DBMS' => 89, 'Economics' => 57, 'DSA' => 64, 'Account' => 98],
    ['SN' => 2, 'Name' => 'Hari', 'Roll' => 5, 'Web_Tech_II' => 56, 'DBMS' => 89, 'Economics' => 57, 'DSA' => 64, 'Account' => 98],
    ['SN' => 3, 'Name' => 'Shyam', 'Roll' => 6, 'Web_Tech_II' => 54, 'DBMS' => 79, 'Economics' => 57, 'DSA' => 64, 'Account' => 98],
    ['SN' => 4, 'Name' => 'Rita', 'Roll' => 10, 'Web_Tech_II' => 56, 'DBMS' => 89, 'Economics' => 57, 'DSA' => 24, 'Account' => 98],
    ['SN' => 5, 'Name' => 'Gita', 'Roll' => 4, 'Web_Tech_II' => 56, 'DBMS' => 89, 'Economics' => 57, 'DSA' => 69, 'Account' => 98],
    ['SN' => 6, 'Name' => 'Sita', 'Roll' => 24, 'Web_Tech_II' => 56, 'DBMS' => 89, 'Economics' => 57, 'DSA' => 24, 'Account' => 98],
    ['SN' => 7, 'Name' => 'Sita', 'Roll' => 24, 'Web_Tech_II' => 56, 'DBMS' => 99, 'Economics' => 57, 'DSA' => 24, 'Account' => 98],
    ['SN' => 8, 'Name' => 'Sita', 'Roll' => 24, 'Web_Tech_II' => 56, 'DBMS' => 99, 'Economics' => 57, 'DSA' => 24, 'Account' => 98],
];

// Function to calculate the total and determine pass/fail
function calculateResult($student) {
    $total = $student['Web_Tech_II'] + $student['DBMS'] + $student['Economics'] + $student['DSA'] + $student['Account'];
    $result = ($student['Web_Tech_II'] >= 35 && $student['DBMS'] >= 35 && $student['Economics'] >= 35 && 
               $student['DSA'] >= 35 && $student['Account'] >= 35) ? 'pass' : 'fail';
    return ['total' => $total, 'result' => $result];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Mark Sheet</title>
    <style>
        table { width: 100%; border-collapse: collapse; margin-bottom: 20px; }
        th, td { border: 1px solid black; padding: 8px; text-align: center; }
        th { background-color: #f2f2f2; }
        .pass { background-color: lightgreen; }
        .fail { background-color: lightcoral; }
        .alt-row { background-color: #444; color: white; }
    </style>
</head>
<body>
    <h2>Mark Ledger</h2>
    <table>
        <tr>
            <th>SN</th><th>Name</th><th>Roll</th><th>Web Tech II</th><th>DBMS</th>
            <th>Economics</th><th>DSA</th><th>Account</th><th>Total</th><th>Result</th>
        </tr>
        <?php foreach ($students as $student): 
            $resultData = calculateResult($student);
        ?>
        <tr class="<?php echo ($resultData['result'] == 'pass') ? 'pass' : 'fail'; ?>">
            <td><?php echo $student['SN']; ?></td>
            <td><?php echo $student['Name']; ?></td>
            <td><?php echo $student['Roll']; ?></td>
            <td><?php echo $student['Web_Tech_II']; ?></td>
            <td><?php echo $student['DBMS']; ?></td>
            <td><?php echo $student['Economics']; ?></td>
            <td><?php echo $student['DSA']; ?></td>
            <td><?php echo $student['Account']; ?></td>
            <td><?php echo $resultData['total']; ?></td>
            <td><?php echo $resultData['result']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>

    <h2>Alternate Color</h2>
    <table>
        <tr>
            <th>SN</th><th>Name</th><th>Roll</th><th>Web Tech II</th><th>DBMS</th>
            <th>Economics</th><th>DSA</th><th>Account</th><th>Total</th><th>Result</th>
        </tr>
        <?php foreach ($students as $index => $student): 
            $resultData = calculateResult($student);
            $rowClass = ($index % 2 == 0) ? '' : 'alt-row';
        ?>
        <tr class="<?php echo $rowClass; ?>">
            <td><?php echo $student['SN']; ?></td>
            <td><?php echo $student['Name']; ?></td>
            <td><?php echo $student['Roll']; ?></td>
            <td><?php echo $student['Web_Tech_II']; ?></td>
            <td><?php echo $student['DBMS']; ?></td>
            <td><?php echo $student['Economics']; ?></td>
            <td><?php echo $student['DSA']; ?></td>
            <td><?php echo $student['Account']; ?></td>
            <td><?php echo $resultData['total']; ?></td>
            <td><?php echo $resultData['result']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
