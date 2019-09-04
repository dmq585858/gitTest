<?php
<form action="{:url('User/addUser')}" method="post">
    用户名：
    <input type="text" name="name" id=""><br />
    密码:
    <input type="password" name="password" /><br />
    年龄：
    <input type="text" name="age" id=""><br />
    邮箱：
    <input type="text" name="email" id=""><br />
    城市：
    <select name="city_id" id="">
        <option value="0">请选择所在的城市</option>
            <option value="">北京</option>
    </select>
    <br />
    <input type="submit" value="添加">
</form>

?>
