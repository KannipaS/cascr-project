<? foreach($select as $data){ ?>
<div class="detail-item">
    <h3><a href="#"></a><?= $data['pro_name'];?></h3>
    <img src="upload/<?= $data['pro_pic']; ?>" alt="">
    <p>
        <?= $data['pro_title']; ?>
    </p>
</div>
<div class="detail-box">
    <ul>
        <?= $data['pro_detail']; ?>
    </ul>
</div>
<div class="detail-vdo">
    <h4>VDO details</h4>
    <div class="detail-vdo-box">
        <!-- put vdo in this -->
    </div>
<? } ?>