<style>
    .control-label{
        margin-top: 5.5px;
    }
    .starred{
        padding-left: 0px !important;
        font-size: 50px !important;
        color: red;
    }
    .red{
        color: red;
    }
</style>

<div class="page-header">
    <h3><span class="glyphicon glyphicon-th-list"></span> เพิ่มสินค้าเข้าสู่ระบบ</h3>
</div>

<form action="index.php/backend/save_edit_data" class="form-horizontal" id="form" name="form" method="post" enctype="multipart/form-data">

<? foreach($pro as $data){ ?>
    <div class="form-group form-group-sm">
        <label class="col-sm-2 control-label" for="formGroupInputSmall">ชื่อสินค้า</label>
        <div class="col-sm-5">
            <input class="form-control" type="text" name="pname" id="pname" value="<?= $data['pro_name']; ?>" placeholder="ชื่อสินค้า">
        </div>
        <div class="col-sm-1 starred">
            <label>*</label>
        </div>
    </div>

    <div class="form-group form-group-sm">
        <label class="col-sm-2 control-label" for="formGroupInputSmall">รายละเอียดย่อ</label>
        <div class="col-sm-5">
            <input class="form-control" type="text" name="pdetail" id="pdetail" value="<?= $data['pro_title']; ?>"  placeholder="รายละเอียดย่อ">
        </div>
        <div class="col-sm-1 starred">
            <label>*</label>
        </div>
    </div>

    <div class="form-group form-group-sm">
        <label class="col-sm-2 control-label" for="formGroupInputSmall">รูปภาพที่อยู่ในระบบ</label>
        <div class="col-sm-5">
            <img width="150" height="150" src="upload/<?= $data['pro_pic']; ?>"/>
        </div>
    </div>

    <div class="form-group form-group-sm">
        <label class="col-sm-2 control-label" for="formGroupInputSmall">รูปภาพ</label>
        <div class="col-sm-5">
            <input type="file" class="form-control" id="pimage" name="pimage">
        </div>
    </div>




    <div class="form-group form-group-sm">
        <label class="col-sm-2 control-label" for="formGroupInputSmall">รายละเอียด</label>
        <div class="col-sm-9">
            <textarea class="form-control" name="editor1" name="editor1"><?= $data['pro_detail']; ?>"</textarea>
        </div>
    </div>

    <div class="form-group form-group-sm">
        <label class="col-sm-2 control-label" for="formGroupInputSmall">แสดงผล</label>
        <div class="col-sm-5">
            <select name="show" id="show" class="form-control">
                <option <? if($data['pro_show'] == 0){ echo "selected"; } ?> value="0">ไม่แสดงผล</option>
                <option <? if($data['pro_show'] == 1){ echo "selected"; } ?> value="1">แสดงผล</option>
            </select>
        </div>
    </div>

    <div class="form-group form-group-sm">
        <label class="col-sm-2 control-label" for="formGroupInputSmall">หมวดหมู่</label>
        <div class="col-sm-5">
            <select name="pcat" id="pcat" class="form-control">
                <? foreach($cat as $category){ ?>
                    <option <? if($data['cat_id'] == $category['cat_id']){ echo "selected"; } ?> value="<?= $category['cat_id']; ?>"><?= $category['cat_name']; ?></option>
                <? } ?>
            </select>
        </div>
    </div>
    <div class="form-group form-group-sm">
        <div class="col-sm-2 control-label">
            <button onclick="JavaScript:Cancel();" value="cancel" type="button" class="btn btn-danger">ยกเลิก</button>
        </div>
        <div class="col-sm-1 control-label">
            <button type="submit" class="btn btn-success">บันทึก</button>
        </div>
    </div>

    <input type="hidden" id="id" name="id" value="<?= $data['pro_id']; ?>" />
    <input type="hidden" id="oldpic" name="oldpic" value="<?= $data['pro_pic']; ?>" />
<? } ?>

</form>

<script type="text/javascript">
    CKEDITOR.replace( 'editor1' );

    $( document ).ready(function() {
        $("#form").validate({
            rules: {
                pname:      "required",
                pdetail:    "required"
            },
            messages: {
                pname:   "<p class='red'>กรุณากรอกชื่อสินค้า</p>",
                pdetail: "<p class='red'>กรุณากรอกข้อมูลโดยย่อ</p>"
            },
        });
    });

    function Cancel(){
        if(confirm('cancel')==true){
            window.location = 'index.php/backend/root_menu';
        }
    }
</script>