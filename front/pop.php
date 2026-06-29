<fieldset>
    <legend>目前位置：首頁 > 人氣文章區</legend>
<table style="width:95%;margin:auto">
    <tr>
        <th style="width:25%" class='ct'>標題</th>
        <th style="width:50%" class='ct'>內容</th>
        <th style="width:25%" class='ct'>人氣</th>
    </tr>
    <?php 
    $total=$News->count(['sh'=>1]);
    $div=5;
    $pages=ceil($total/$div);
    $now=$_GET['p']??1;
    $start=($now-1)*$div;
    $posts=$News->all(['sh'=>1]," order by good desc limit $start,$div");
    foreach($posts as $post):
    ?>
    <tr>
        <td><?= $post['title'] ?></td>
        <td><?= mb_substr($post['content'],0,30); ?>...</td>
        <td></td>
    </tr>
    <?php
    endforeach;
    ?>
</table>
<div>

</div>
</fieldset>