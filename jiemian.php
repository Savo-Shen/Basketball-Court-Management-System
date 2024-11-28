<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title>列表增删改查</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }
        h1 {
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
        }
        .delete-button {
            background-color: red;
        }
    </style>
</head>
<body>
    <?php
    // 数据库配置
    $servername = "localhost"; // 正确的主机地址
    $username = "savo_shen";        // 你的数据库用户名
    $password = "22201076";            // 你的数据库密码（如果设置了密码，请填写）
    $dbname = "basketball_system";         // 你的数据库名称
    $port = 3306;              // 数据库端口号

    // 创建连接
    $conn = new mysqli($servername, $username, $password, $dbname, $port);

    // 检查连接
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM procurement";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->get_result();
    $value = 1;
    ?>
    <?php 

    $isChecked = isset($_POST['subscribe']) ? true : false;
    
    if ($isChecked) {
        $value ++;
    } else {
        $value --;
    }
    ?>
    <h1>列表增删改查</h1>
    <table>
        <thead>
            <tr>
                <th>勾选</th>
                <th>采购时间</th>
                <th>采购人</th>
                <th>资产类别</th>
                <th>资产名称</th>
                <th>资产状态</th>
                <th>金额</th>
                <th>采购人联系电话</th>
                <th>操作</th>
            </tr>
        </thead>

        <!-- <form action="" method="post">
            <label>
                <input type="checkbox" name="subscribe" value="1">
                Subscribe to newsletter 
            </label>
            <button type="submit">Submit</button>
        </form> -->
        <form action="operation.php" method="post">
            <?php
                // print_r($result);
                // foreach($result as $index => $row){
                //     print_r($row);
                // }
            ?>
        </form>
        <tbody>
            <?php
            // 示例数据
            // $data = [
            //     ['采购时间' => '2021-10-29', '采购人' => 'admin', '资产类别' => '咖啡机', '资产名称' => '222', '资产状态' => '在用', '金额' => '11.00', '采购人联系电话' => '',],
            //     ['采购时间' => '2019-12-27', '采购人' => '曹操', '资产类别' => '手机', '资产名称' => 'iphone8', '资产状态' => '在用', '金额' => '5000.00', '采购人联系电话' => '13798258973'],
            //     ['采购时间' => '2019-12-27', '采购人' => '刘备', '资产类别' => '电脑', '资产名称' => '联想K4450', '资产状态' => '在用', '金额' => '3500.00', '采购人联系电话' => '13834559854'],
            //     ['采购时间' => '2019-12-27', '采购人' => '曹操', '资产类别' => '电脑', '资产名称' => '苹果MacBook Air', '资产状态' => '在用', '金额' => '6000.00', '采购人联系电话' => '13798258973'],
            //     ['采购时间' => '2019-12-27', '采购人' => '曹操', '资产类别' => '电脑', '资产名称' => '苹果MacBook Pro', '资产状态' => '在用', '金额' => '5500.00', '采购人联系电话' => '13798258973'],
            //     ['采购时间' => '2019-12-27', '采购人' => '曹操', '资产类别' => '手机', '资产名称' => 'iphone7 plus', '资产状态' => '在用', '金额' => '5000.00', '采购人联系电话' => '13798258973'],
            //     ['采购时间' => '2019-12-27', '采购人' => '曹操', '资产类别' => 'PAD', '资产名称' => 'iPad Pro', '资产状态' => '在用', '金额' => '4000.00', '采购人联系电话' => '13798258973']
            // ];
            // print_r($data);
            foreach ($result as $index => $row) {
                echo "<tr>";
                echo "<td><input type='checkbox'></td>";
                echo "<td>" . $row['purchase_date'] . "</td>";
                echo "<td>" . $row['buyer'] . "</td>";
                echo "<td>" . $row['asset_category'] . "</td>";
                echo "<td>" . $row['asset_name'] . "</td>";
                echo "<td>" . $row['asset_status'] . "</td>";
                echo "<td>" . $row['amount'] . "</td>";
                echo "<td>" . $row['contact_number'] . "</td>";
                echo "<td><button class='edit-button'>编辑</button> <button class='delete-button'>删除</button></td>";
                echo "</tr>";
            }
            // foreach ($data as $index => $row) {
            //     echo "<tr>";
            //     echo "<td><input type='checkbox'></td>";
            //     echo "<td>" . $row['采购时间'] . "</td>";
            //     echo "<td>" . $row['采购人'] . "</td>";
            //     echo "<td>" . $row['资产类别'] . "</td>";
            //     echo "<td>" . $row['资产名称'] . "</td>";
            //     echo "<td>" . $row['资产状态'] . "</td>";
            //     echo "<td>" . $row['金额'] . "</td>";
            //     echo "<td>" . $row['采购人联系电话'] . "</td>";
            //     echo "<td><button class='edit-button'>编辑</button> <button class='delete-button'>删除</button></td>";
            //     echo "</tr>";
            // }
            ?>
        </tbody>
    </table>
</body>
</html>