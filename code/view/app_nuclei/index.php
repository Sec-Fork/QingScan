{include file='public/head' /}
<?php
$searchArr = [
    'action' => url('hydra/index'),
    'method' => 'get',
    'inputs' => [
        ['type' => 'text', 'name' => 'search', 'placeholder' => "搜索的内容"],
        ['type' => 'select', 'name' => 'app_id', 'options' => $projectList, 'frist_option' => '项目列表'],
    ]];
?>
{include file='public/search' /}
<div class="row tuchu">
    <!--            <div class="col-md-1"></div>-->
    <div class="col-md-12 ">
        <table class="table table-bordered table-hover table-striped">
            <thead>
            <tr>
                <th>ID</th>
                <th>所属项目</th>
                <th>name</th>
                <th>host</th>
                <th>扫描时间</th>
            </tr>
            </thead>
            <?php foreach ($list as $value) { ?>
                <tr>
                    <td><?php echo $value['id'] ?></td>
                    <td><?php echo $value['app_name'] ?></td>
                    <td><?php echo $value['name'] ?></td>
                    <td><?php echo $value['host'] ?></td>
                    <td><?php echo $value['create_time']; ?></td>
                </tr>
            <?php } ?>
        </table>
    </div>
</div>
{include file='public/fenye' /}

{include file='public/footer' /}