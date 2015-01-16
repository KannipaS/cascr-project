<style>
.red{
    color: #ff0000;
}
</style>
<div class="page-header" xmlns="http://www.w3.org/1999/html">
    <h3><span class="glyphicon glyphicon-th-list"></span> ตรวจสอบรายการสินค้า</h3>
</div>

<table id="myTable" class="table table-striped" cellspacing="0" width="100%">
    <thead>
    <tr>
        <th>ลำดับ</th>
        <th>รหัสสินค้า</th>
        <th>รุ่นสินค้า</th>
        <th>ชื่อสินค้า</th>
        <th>แสดงผล</th>
        <th>กลุ่มสินค้า</th>
        <th>แก้ไข</th>
        <th>ลบ</th>
    </tr>
    </thead>

    <tbody>
    <? $note = array('ไม่แสดงผล','แสดงผล'); ?>
    <? foreach($pro as $i => $data) { ?>
        <tr>
            <td><?= ++$i; ?></td>
            <td><?= $data['pro_id'] ?></td>
            <td><?= $data['pro_name']; ?></td>
            <td><?= $data['pro_title']; ?></td>
            <td><?= $note[$data['pro_show']]; ?></td>
            <td><?= $data['cat_name']; ?></td>
            <td><a href=""><span class="glyphicon glyphicon-pencil"></span></a></td>
            <td><a href=""><span class="glyphicon glyphicon-remove red "></span></a></td>
        </tr>
    <? } ?>
    </tbody>
</table>

<script type="text/javascript">
    $(document).ready(function(){
        $('#myTable').DataTable();
    });
</script>