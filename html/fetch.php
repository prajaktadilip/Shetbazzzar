
<div class="box-body table-responsive no-padding">
    <table class="table table-hover">
        <tr>
            <th>Role</th>
            <th>Name</th>
            <th>Username</th>
            <th>User_id</th>
            <th>Password</th>
            <th>Email_id</th>
            <th>Phone_no</th>
            <th>Street</th>
            <th>City</th>
            <th>State</th>
            <th>Taluka</th>
            <th></th>
        </tr>

        <?php
        $sql="select role,name,username,user_id,password,email,phoneno,street,city,state,taluka from user";
        if ($result = $sql->query($sql)) {
        while ($row = $result->fetch_assoc()) {
            ?>
                <tr>
                    <td><?php echo $row['role']?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['username']; ?></td>
                    <td><?php echo $row['user_id']; ?></td>
                    <td><?php echo  $row['password'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td> <?php echo  $row['phoneno'];?></td>
                    <td><?php echo $row['street'];?></td>
                    <td><?php echo $row['city'];?></td>
                    <td><?php echo $row['state'];?></td>
                    <td><?php echo $row['taluka'];?></td>
                </tr>

                <?php

            }
        }
        ?>


    </table>
</div>
